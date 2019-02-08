<?php 

  // alignment
  $alignment = ($styles['item_alignment']) ? $styles['item_alignment'] : '';

  // section animation
  $section_animation = ($styles['section_animation']) ? 'uk-scrollspy="cls:uk-animation-'.$styles['section_animation'].'"' : '';

?>

<footer id="<?php echo $id; ?>" class="fp-section fp-auto-height uk-text-<?php echo $alignment;?> footers footer-1">
<div class="uk-section">
    <div class="uk-container" <?php echo $section_animation;?>>
        <div class="social-links">
            <?php foreach ( $contents['social'] as $social ): ?>
              <a class="icon" href="<?php echo $social; ?>" target="_blank"></a>
            <?php endforeach; ?>
        </div><!-- social-links -->

          <nav class="" uk-navbar>
              <div class="uk-navbar-<?php echo $alignment;?>">
                <!-- WP Nav -->
                <?php wp_nav_menu( 
                      array(
                          'menu'       => $contents['menu'],
                          'menu_class' => 'uk-navbar-nav',
                      ) 
                    ) 
                ?>
              </div><!-- uk-navbar-center -->
          </nav> <!-- uk-navbat -->
          <?php if ($contents['copyright']): ?>
              <p class="copyright"><?php echo $contents['copyright']; ?></p>
          <?php endif; ?>
    </div> <!-- uk-container -->
</div>
</footer> <!-- end-footer -->
