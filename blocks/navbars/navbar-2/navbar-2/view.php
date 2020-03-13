

<div id="<?php echo $id; ?>" class="navbar navbar-1 fp-section fp-auto-height uk-position-relative" <?php echo $sticky; ?>>
    <div class="uk-position-top">
    <div class="uk-container">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <div class="brand-logo-wrapper">
                        <?php if ($contents['logo']): ?>
                            <a class="uk-navbar-item uk-logo" href="<?php echo site_url(); ?>"><img class="img-responsive" width="160" src="<?php echo $contents['logo']; ?>" alt="<?php wp_title();?>" uk-image/></a>
                        <?php else: ?>
                            <a class="uk-navbar-item uk-logo" href="<?php echo site_url(); ?>"><?php wp_title();?></a>
                        <?php endif;?>
                    </div>
                </div>
                <div class="uk-navbar-right tx-area-right">
                        <div class="contact-wrapper">
                        <?php echo op_link($contents['link'], 'uk-button'); ?>
                        </div>
                            <?php
wp_nav_menu(
    array(
        'menu' => $contents['menu'],
        'menu_class' => 'uk-navbar-nav uk-visible@m',
        'items_wrap' => '<ul id="%1$s" class="%2$s" uk-scrollspy-nav="closest: li; scroll: true; overflow:false; offset:80">%3$s</ul>',
        'container' => false,
        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
        'walker' => new WP_Bootstrap_Navwalker(),
    )
)
?>
                <a uk-navbar-toggle-icon="" href="#offcanvas-<?php echo $id; ?>" uk-toggle class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="navbar-toggle-icon"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg>
                </a>
                </div>
            </nav>
        </div>
    </div><!-- uk-container -->
</div>

<!-- This is the off-canvas -->
<div id="offcanvas-<?php echo $id; ?>" uk-offcanvas="flip: true; overlay: true">
	<div class="uk-offcanvas-bar">

		<button class="uk-offcanvas-close" type="button" uk-close></button>

		<?php
wp_nav_menu(
    array(
        'menu' => $contents['menu'],
        'menu_class' => 'uk-nav uk-nav-default',
        'container' => false,
        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
        'walker' => new WP_Bootstrap_Navwalker(),
    )
)
?>

	</div>
</div>