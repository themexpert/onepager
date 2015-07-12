<?php namespace ThemeXpert\Onepager\Block;

use ThemeXpert\FileSystem\FileSystem as FS;
use ThemeXpert\Onepager\Block\Transformers\ConfigTransformer;

class BlockManager
{

    protected $groupOrder = [];



    public function __construct(ConfigTransformer $configTransformer, Collection $blocksCollection)
    {
        $this->configTransformer = $configTransformer;
        $this->blocksCollection = $blocksCollection;
    }

    public function loadAllFromPath($path, $url)
    {
        try {
            if(!FS::exists($path)){
                $msg = __("You were trying to add blocks from ".$path." but this path does not exist. Please create this folder.", "onepager");
                throw new \Exception($msg);
            }

            $folders = FS::folders($path);

            foreach ($folders as $folder) {
                $config_file = untrailingslashit($path) . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . "config.php";


                if (!FS::exists($config_file)) {
                    $this->loadAllFromPath($path . DIRECTORY_SEPARATOR . $folder, $url . "/" . $folder);

                    continue;
                }

                $this->add($config_file, trailingslashit($url) . $folder);
            }
        } catch(\Exception $e){
            die('Caught exception: '.  $e->getMessage(). "\n<br>");
        }
    }

    public function add($file, $url)
    {
        $url = trailingslashit($url);
        $config = require($file);


        $config = $this->configTransformer->transform($config, $file, $url);
        $this->blocksCollection->set($config['slug'], $config);
    }

    public function get($key)
    {
        return $this->blocksCollection->get($key);
    }

    public function all()
    {
        return $this->blocksCollection;
    }

  /**
   * @return array
   */
  public function getGroupOrder()
  {
    return $this->groupOrder;
  }

  /**
   * @param array $groupOrder
   */
  public function setGroupOrder($groupOrder)
  {
    $this->groupOrder = $groupOrder;
  }
}
