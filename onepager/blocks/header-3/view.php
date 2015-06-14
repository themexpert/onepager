<?php
$slide_num = 0;
?>
<header id="<?php echo $id; ?>" class="op-section header-3">
	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-static-top">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo site_url(); ?>">
						<img class="img-responsive" src="<?php echo $fields['logo']?>" alt="<?php wp_title(); ?>">
					</a>
				</div>

				<?php if('normal' == $settings['menu_type']) :?>
				
				<?php if( $settings['cta']): ?>
					<a href="#" data-toggle="offcanvas" href="<?php echo $settings['cta']?>" class="btn navbar-btn navbar-right"><?php echo $settings['cta_text']?></a>
				<?php endif; ?>
				
				<!-- Menu -->
				<div class="collapse navbar-collapse">
					<?php wp_nav_menu(array(
					'menu' =>$fields['menu'] ,
					'menu_class'=>'nav navbar-nav navbar-right',
					'container' =>false,
					)) ?>
				</div>
				
				<?php endif; ?>

				<?php if('offcanvas' == $settings['menu_type']) :?>
					<a href="#" data-toggle="offcanvas" class="offcanvas-trigger navbar-link navbar-right"><span class="fa fa-align-justify fa-2x"></span></a>
					
					<?php if( $settings['cta']): ?>
						<a href="<?php echo $settings['cta']?>" class="btn navbar-btn navbar-right"><?php echo $settings['cta_text']?></a>
					<?php endif; ?>
				<?php endif; ?>
			</nav>
		</div>
	</div>
</header>

<div id="slide-<?php echo $id ?>" class="carousel slide" data-ride="carousel">
	<?php if(count($fields['sliders']) > 1): // Indicator will only show when more then one item publish?>
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php for($i = 0; $i < count($fields['sliders']); $i++): ?>
		<li data-target="#slide-<?php echo $id ?>" data-slide-to="<?php echo $i;?>" class="<?php echo ($i === 0) ? 'active' : ''?>"></li>
		<?php endfor;?>
	</ol>
	<?php endif; ?>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		
		<?php foreach($fields['sliders'] as $slide): ?>
		<div class="item <?php echo ($slide_num === 0) ? 'active' : ''?>">
			<div class="slide-image" style="background: url(<?php echo $slide['image']?>);"></div>
			<div class="container">
				<div class="carousel-caption flex-grid flex-grid-center flex-grid-middle">
					<?php if($slide['title']):?>
					<h2 class="title"><?php echo $slide['title']?></h2>
					<?php endif; ?>
					
					<?php if($slide['description']):?>
					<p class="desc"><?php echo $slide['description']?></p>
					<?php endif; ?>
					
					<?php if($slide['link']): ?>
					<p><a class="btn btn-lg btn-primary" href="<?php echo $slide['link']?>"><?php echo $slide['link_text']?></a></p>
					<?php endif; ?>
				</div>	
			</div>
		</div>
		<?php $slide_num++; endforeach; ?>
	</div>
</div>
<!-- Offcanvas menu -->
<div class="offcanvas-menu">
	<a href="#" class="pull-right offcanvas-close"><span class="fa fa-close"></span></a>
	<?php wp_nav_menu(array(
	'menu' =>$fields['menu'] ,
	'menu_class'=>'nav',
	'container' =>false,
	)) ?>
</div>
<script type="text/javascript">
	jQuery(document).ready(function(){
		// Offcanvas menu
		jQuery('[data-toggle="offcanvas"]').click(function () {
			jQuery('body').toggleClass('offcanvas-active')
		});
		jQuery('.offcanvas-close').on('click', function(){
			jQuery('body').removeClass('offcanvas-active')
		});
	});
</script>