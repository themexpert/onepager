<header id="<?php echo $id; ?>" class="op-section navbar navbar-static-top navbar-2" <?php echo ($settings['sticky_nav']) ? 'data-spy="affix"' : '';?> data-offset-top="80">
	<div class="container-fluid">
		<!-- Brand -->
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo site_url(); ?>">
	      	<?php if($contents['logo']) :?>
				<img class="img-responsive" src="<?php echo $contents['logo']?>" alt="<?php wp_title(); ?>">
			<?php else : ?>
				<?php wp_title(); ?>
			<?php endif; ?>
	      </a>
	    </div>
	    <!-- Menu -->
	    <nav id="nav-<?php echo $id; ?>">
            <a href="#" data-toggle="offcanvas" class="offcanvas-trigger navbar-link navbar-right"><span class="fa fa-align-justify"></span> Menu</a>
	    </nav>
	</div>
	<!-- Offcanvas menu -->
	<div class="offcanvas-menu">
		<a href="#" class="pull-right offcanvas-close"><span class="fa fa-close"></span></a>
		<?php wp_nav_menu(array(
		'menu' =>$contents['menu'] ,
		'menu_class'=>'nav',
		'container' =>false,
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
		)) ?>
	</div>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		// Offcanvas menu
		jQuery('[data-toggle="offcanvas"]').click(function () {
			jQuery('body').toggleClass('offcanvas-active');
		});
		jQuery('.offcanvas-close').on('click', function(){
			jQuery('body').removeClass('offcanvas-active');
		});
	});
	</script>
</header>
