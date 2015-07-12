<?php
/**
* TABLE OF CONTENTS
*
* 1. if wp_debug is true run whoops
* 2. create $onepager
* 3. register livemode toolbar
* 4. register blocks
* 5. support svg upload mime
* 6. add onepage templates
*
**/

use Pimple\Container;
use ThemeXpert\Onepager\Adapters\WordPress;
use ThemeXpert\Onepager\Onepager;
use Whoops\Handler\PrettyPageHandler;

function onepager()
{
    static $onepager;

    if (!$onepager) {
        $onepager = new Onepager(
            new WordPress(new Container, ONEPAGER_PATH, ONEPAGER_URL),
            new Container
        );
    }

    return $onepager;
}


function tx_add_svg_upload_support($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

function tx_add_build_mode_button_to_toolbar()
{
    $isOnepage = onepager()->content()->isOnepage();
    $isLiveMode = onepager()->content()->isLiveMode();

    if ($isOnepage && !$isLiveMode) {
        $url = League\Url\Url::createFromUrl(getCurrentPageURL());
        $url->getQuery()->modify(array('livemode' => true));

        onepager()->toolbar()->addMenu(
            'op-enable-livemode',
            $url->__toString(),
            '<span class="fa fa-circle"></span> Enable Build Mode'
        );
    }

    //hide the navbar when livemode
    if ($isLiveMode) {
        show_admin_bar(false);
    }
}


do_action('onepager_blocks');


/**
 * LOAD ALL BLOCKS BEFOREHAND
 * WE WILL NEED THEM IN OUR AJAX REQUESTS
 */
onepager()->blockManager()->loadAllFromPath(
    onepager()->path("blocks"),
    onepager()->url("blocks")
);

onepager()->blockManager()->setGroupOrder(array(
    "navbars",
    "headers",
    "contents",
    "portfolios",
    "teams",
    "testimonials",
    "blog",
    "sliders",
    "pricings",
    "footers",
    "themes"
));

//if (!file_exists(onepager()->path("blocks/blocks.cache")) && is_writable(onepager()->path("blocks"))) {
//    file_put_contents(onepager()->path("blocks/blocks.cache"), json_encode((array)onepager()->blockManager()->all()));
//}


/**
 * Add page Templates
 */
$pageTemplater = new ThemeXpert\WordPress\PageTemplater();
$pageTemplater->addTemplate('OnePager', ONEPAGER_PATH . "/app/views/onepage.php");

/**
 * Add preset layouts
 */
onepager()->layoutManager()->loadAllFromPath(ONEPAGER_PATH . "/presets", untrailingslashit(ONEPAGER_URL) . "/presets");

/**
 * Wordpress Action Hooks
 */
add_action('wp', 'tx_add_build_mode_button_to_toolbar');
add_filter('upload_mimes', 'tx_add_svg_upload_support');
