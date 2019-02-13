<?php
	// Title Animation 
	$title_animation = ($settings['title_animation']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['title_animation'].'"' : '';
	// Logo Animation
	$logo_animation = ($settings['logo_animation']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['logo_animation'].'"' : '';
	// Content Animation 
	$content_animation = ($settings['content_animation']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['content_animation'].'"' : '';
?>
<section id="<?= $id; ?>" class="fp-section uk-section coming-soon coming-soon-2 uk-height-viewport">
	<div class="uk-overlay-primary uk-position-cover"></div>

	<article class="uk-position-center">
			<?php if ($contents['logo']): ?>
			<!-- Logo -->
			<div class="logo">
				<img class="op-logo uk-align-center uk-text-center" src="<?= $contents['logo']?>" alt="logo" <?= $logo_animation;?>>
			</div>
			<?php endif;?>
			<!-- Title -->
			<?php if ($contents['title']): ?>
				<h1 class="uk-heading-primary uk-text-center uk-text-<?= $settings['title_transformation']; ?>" <?= $title_animation;?> ><?= $contents['title']; ?>
				</h1>
			<?php endif;?>
			<!-- Description -->
			<?php if ($contents['description']): ?>
				<div class="uk-text-lead uk-text-center uk-align-center uk-width-1-2@s" <?= $content_animation;?> >
					<?= $contents['description']?>
				</div>
			<?php endif;?>
	</article> 
	
</section> <!-- end-section -->