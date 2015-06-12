<header id="<?php echo $id; ?>" class="op-section navbar navbar-static-top header-2">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-<?php echo $id; ?>">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo site_url(); ?>">
			<img class="img-responsive" src="<?php echo $fields['logo']?>" alt="<?php wp_title(); ?>">
	      </a>
	    </div>
	    <!-- Menu -->
	    <nav class="collapse navbar-collapse" id="nav-<?php echo $id; ?>">
	    	<?php wp_nav_menu(array(
                'menu' =>$fields['menu'] , 
                'menu_class'=>'nav navbar-nav', 
                'container' =>false,
            )) ?>

            <?php if( $fields['cta']): ?>
            <a href="<?php echo $fields['cta']?>" class="btn navbar-btn navbar-right"><?php echo $fields['cta_text']?></a>
	    	<?php endif; ?>
	    </nav>
	</div>
</header>