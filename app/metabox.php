<?php

add_action('add_meta_boxes', 'tx_add_onepager_metabox');
add_action('admin_enqueue_scripts', 'tx_onepager_metabox_scripts');

function tx_add_onepager_metabox(){
    $template = function($post){
        $onepagerLayouts = onepager()->layoutManager()->all();

        //generate livemode url
        $url = League\Url\Url::createFromUrl(get_permalink($post->ID));
        $query = $url->getQuery();
        $query->modify(array('livemode' => true));

        include __DIR__ . "/views/page-meta.php";
    };

    add_meta_box(
        'onepager-metabox',
        __( 'Onepager', 'onepager' ),
        $template,
        'page'
    );
}

function tx_onepager_metabox_scripts($hook){
    global $post;

    if (!($post && $post->post_type == "page")) return;
    if (!($hook == 'post-new.php' || $hook == 'post.php')) return;

    $data = array(
        'pageId' => $post->ID
    );

    wp_enqueue_script('tx-onepager-page-meta', asset('assets/meta.js'), true);
    wp_localize_script('tx-onepager-page-meta', 'onepager', $data);
}

