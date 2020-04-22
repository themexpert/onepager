<?php
// title animation
$title_animation = ($settings['title_animation']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . ';"' : '';
// blog item animation
$blog_animation = ($settings['blog_item_animation']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['blog_item_animation'] . ';"' : '';

// Arguments
$args = array(
    'posts_per_page' => $contents['total_posts'],
    'cat' => $contents['category'],
    'order'   => $contents['post_order'],
);
// Build query
$query = new WP_Query($args);
?>

<section id="<?php echo $id;?>" class="fp-section blogs blog-6">
    <div class="uk-section">
        <div class="uk-container">
            <div class="content-wrapper">
                <?php if($contents['title']): ?>
                    <div class="section-heading uk-margin-large-bottom uk-text-<?php echo $settings['title_alignment'] ?>">
                    <?php
                        echo op_heading(
                            $contents['title'],
                            $settings['heading_type'],
                            'uk-heading-primary uk-text-' . $settings['title_transformation'],
                            $title_animation
                        );
                    ?>
                    <?php if($contents['desc']): ?>
                        <p <?php echo ( $settings['title_animation'] ? $title_animation . 'delay:400"' : '' ); ?>><?php echo $contents['desc'];?></p>
                    <?php endif;?> 
                </div>
                <?php endif;?>
                <?php if($query->have_posts()):?>
                    <div class="uk-grid" uk-grid>
                        <?php while($query->have_posts()): $query->the_post(); ?>
                            <div <?php echo ( $settings['blog_item_animation'] ? $blog_animation . 'delay:400' : '' ); ?> class="uk-width-1-3@s">
                                <article class="uk-article">
                                    <div class="img-wrapper">
                                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                                    </div>
                                    <p class="uk-article-meta uk-margin-remove-bottom"><?php echo get_the_date('F d, Y');?></p>
                                    
                                    <h1 class="uk-article-title uk-margin-remove uk-text-<?php echo $settings['blog_title_transformation'];?>"><?php the_title();?></h1>
                                    
                                    
                                    <?php if ( $contents['readmore_text'] ) : ?>	
                                        <a class="uk-button uk-button-text uk-margin-medium-top uk-text-<?php echo $settings['btn_text_transformation'];?>" href="<?php the_permalink(); ?>"><?php echo $contents['readmore_text']; ?></a>
                                    <?php endif; ?>
                                </article>
                            </div>
                        <?php endwhile;?>
                    </div>
                    <div class="all-post-btn uk-text-center uk-margin-large-top">
                            <?php echo op_link($contents['all_post'], 'uk-button uk-button-default');?>
                    </div>
                <?php endif; wp_reset_query();?>
            </div>
        </div>
    </div>
</section>