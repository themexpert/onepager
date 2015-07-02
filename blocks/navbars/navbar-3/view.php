<header id="<?php echo $id; ?>" class="op-section navbar navbar-static-top navbar-3" <?php echo ($settings['sticky_nav']) ? 'data-spy="affix"' : '';?> data-offset-top="80">
	<div class="container">
		<!-- Brand -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-<?php echo $id; ?>">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo site_url(); ?>">
	      	<?php if($contents['logo']) :?>
				<img class="img-responsive" src="<?php echo $contents['logo']?>" alt="<?php wp_title(); ?>">
			<?php else : ?>
				<?php wp_title(); ?>
			<?php endif; ?>
	      </a>
	    </div>
	    <!-- Menu -->
	    <nav class="collapse navbar-collapse" id="nav-<?php echo $id; ?>">
	    	<?php wp_nav_menu(array(
                'menu' =>$contents['menu'] , 
                'menu_class'=>'nav navbar-nav', 
                'container' =>false,
            )) ?>
            <?php if( $contents['cta']): ?>
            <a href="<?php echo $contents['cta']?>" class="btn navbar-btn navbar-right"><?php echo $contents['cta_text']?></a>
	    	<?php endif; ?>
	    </nav>
	</div>
</header>