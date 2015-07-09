<?php namespace ThemeXpert\Onepager\Block;

use ThemeXpert\FileSystem\FileSystem as FS;
use ThemeXpert\Onepager\Block\Transformers\ConfigTransformer;

class TemplateManager
{
    protected $templates;
    protected $paths;

    public function loadAllFromPath($path, $url)
    {
        $this->paths[] = array(
            "path" => $path,
            "url" => $url
        );
    }

    public function add($file, $url)
    {
        $config = json_decode(file_get_contents($file), true);
        if (!array_key_exists('screenshot', $config)) {
            $filename = basename($file);
            $imagename = str_replace('.json', '.png', $filename);
            $config['screenshot'] = trailingslashit($url) . $imagename;
            $config['id'] = $filename;
        }

        $this->templates[] = $config;
    }

    public function loadAll()
    {
        foreach ($this->paths as $path) {
            $files = array_filter(FS::files($path['path']), function ($file) {
                return substr($file, -4, strrpos($file, '.json')) === "json";
            });

            foreach ($files as $file) {
                $config_file = untrailingslashit($path['path']) . DIRECTORY_SEPARATOR . $file;
                $this->add($config_file, $path['url']);
            }
        }
    }

    public function all()
    {
        $this->loadAll();
        return $this->templates;
    }
}
