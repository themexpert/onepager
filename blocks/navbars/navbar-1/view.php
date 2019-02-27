<?php
	$sticky = ($settings['sticky_nav']) ? 'uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky"' : '';
?>
<div id="<?php echo $id; ?>" class="navbar navbar-1 fp-section fp-auto-height" <?php echo $sticky; ?>>
	<div class="uk-container">
		<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
				<div class="uk-navbar-left">
						<?php if($contents['logo']) :?>
							<a class="uk-navbar-item uk-logo" href="#"><img class="img-responsive" src="<?php echo $contents['logo']?>" alt="<?php wp_title(); ?>"/></a>
						<?php else : ?>
						<a class="uk-navbar-item uk-logo" href="<?php echo site_url(); ?>"><?php wp_title(); ?></a>
						<?php endif; ?>
				</div>
				<div class="uk-navbar-right">
					<?php wp_nav_menu(array(
						'menu' =>$contents['menu'] ,
						'menu_class'=>'uk-navbar-nav uk-visible@m',
						'items_wrap' => '<ul id="%1$s" class="%2$s" uk-scrollspy-nav="closest: li; scroll: true; overflow:false; offset:80">%3$s</ul>',
						'container' =>false,
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker()
					)) ?>
					<?php echo op_link($contents['link'], 'uk-visible@s uk-button uk-button-primary');?>
					
					<a uk-navbar-toggle-icon="" href="#offcanvas-<?php echo $id; ?>" uk-toggle class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon">
						<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="navbar-toggle-icon"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg>
					</a>
				</div>
		</nav>
	</div>
</div>

<!-- This is the off-canvas -->
<div id="offcanvas-<?php echo $id; ?>" uk-offcanvas="flip: true; overlay: true">
	<div class="uk-offcanvas-bar">

		<button class="uk-offcanvas-close" type="button" uk-close></button>

		<?php wp_nav_menu(array(
				'menu' =>$contents['menu'] ,
				'menu_class'=>'uk-nav uk-nav-default',
				'container' =>false,
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker()
			)) ?>

	</div>
</div>
