<?php
	$sticky = ( $settings['sticky_nav'] ) ? 'uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky"' : '';
?>

<div id="<?php echo $id;?>" class="fp-section navbar navbar-3 fp-auto-height" <?php echo $sticky; ?>>
    <div class="uk-container">
        <nav class="uk-navbar-container tx-navbar" uk-navbar>
            <div class="uk-navbar-left">
                <?php if ( $contents['logo'] ) : ?>
                        <a class="uk-navbar-item uk-logo" href="<?php echo site_url(); ?>"><img class="img-responsive" src="<?php echo $contents['logo']; ?>" alt="<?php wp_title(); ?>"/></a>
                    <?php else : ?>
                        <a class="uk-navbar-item uk-logo" href="<?php echo site_url(); ?>"><?php wp_title(); ?></a>
                <?php endif; ?>
            </div>
            <div class="uk-navbar-center">
                <div class="center-menu-wrapper">
                <?php
                    if($contents['main_menu']):
                        wp_nav_menu(
                            array(
                                'menu' => $contents['main_menu'],
                                'menu_class' => 'uk-navbar-nav uk-visible@m',
                                'items_wrap' => '<ul id="%1$s" class="%2$s" uk-scrollspy-nav="closest: li; scroll: true; overflow:false; offset:80">%3$s</ul>',
                                'container' => false,
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            )
                        );
                    else:
                        echo "choose a menu";
                    endif;
                ?>
                </div>
            </div>
            <div class="uk-navbar-right">
                <div class="uk-flex uk-flex-middle right-menu-wrapper">
                    <?php
                        if($contents['right_menu']):
                            wp_nav_menu(
                                array(
                                    'menu' => $contents['right_menu'],
                                    'menu_class' => 'uk-navbar-nav uk-visible@m',
                                    'items_wrap' => '<ul id="%1$s" class="%2$s" uk-scrollspy-nav="closest: li; scroll: true; overflow:false; offset:80">%3$s</ul>',
                                    'container' => false,
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                )
                            );
                        else:
                            echo "choose a menu";
                        endif;
                    ?>
                    <a uk-navbar-toggle-icon="" href="#offcanvas-<?php echo $id; ?>" uk-toggle class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="navbar-toggle-icon"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>


<!-- This is the off-canvas -->
<div id="offcanvas-<?php echo $id; ?>" uk-offcanvas="flip: true; overlay: true">
	<div class="uk-offcanvas-bar">

		<button class="uk-offcanvas-close" type="button" uk-close></button>
    <div class="mobile-menu-wrapper">
    <?php
        wp_nav_menu(
            array(
                'menu' => $contents['main_menu'],
                'menu_class' => 'uk-nav uk-nav-default',
                'container' => false,
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            )
        )
        ?>
    </div>

	</div>
</div>