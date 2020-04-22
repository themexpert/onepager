<?php
// title animation
$title_animation = ($settings['title_animation']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . ';"' : '';
// items animation
$items_animation = ($settings['item_animation']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['item_animation'] . ';target:> .uk-card; delay:200;"' : '';
// Arguments
$args = array(
    'posts_per_page' => $contents['total_posts'],
    'cat' => $contents['category'],
);
// Build query
$query = new WP_Query($args);
?>
<section id="<?php echo $id; ?>" class="fp-section blogs blog-5 uk-padding-small">
<div class="uk-section">
    <div class="uk-container">
        <article class="uk-article">
            <div class="section-heading uk-margin-large-bottom">
                <?php if ($contents['title']): ?>
                    <div class="uk-margin-large-bottom main-heading uk-text-<?php echo $settings['title_alignment'] ?>">
                    <!-- Section Title -->
					  	<?php
echo op_heading(
    $contents['title'],
    $settings['heading_type'],
    'uk-heading-primary uk-text-' . $settings['title_transformation'],
    $title_animation
);
?>
                    </div>
                <?php endif;?>

            <div class="uk-grid-large uk-grid" uk-grid>
                <?php if ($query->have_posts()): ?>
                    <?php $postCount = 1;
while ($query->have_posts()): $query->the_post();?>
					        <div <?php echo $settings['item_animation'] ? $items_animation . 'delay: 400' : '' ?> class="uk-width-1-3@m uk-width-1-1@s">
					            <div class="uk-card attorney_blog_list">

					                <div class="uk-card-media-top">
					                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
					                </div>

					                <h2 class="uk-card-title uk-margin-small">
					                    <a class="uk-text-<?php echo $settings['item_title_transformation'] ?>" href="<?php the_permalink();?>"><span><?php echo $postCount <= 9 ? '0' . $postCount . "." : $postCount . "."; ?></span> <?php the_title();?></a>
					                </h2>
					                <p class="uk-text-small">
					                    <?php op_the_excerpt($contents['text_limit']);?>
					                </p>
					                <?php if ($contents['readmore_text']): ?>
					                    <a class="op-button-right uk-button uk-button-default uk-button-medium" href="<?php the_permalink();?>"><?php echo $contents['readmore_text']; ?></a>
					                <?php endif;?>
                            </div>
                        </div>
                    <?php $postCount++;endwhile;
wp_reset_postdata()?>

                <?php endif;?>
            </div>
        </article>
    </div>
</div>

</section>