<footer id="<?php echo $id; ?>" class="op-section text-center footers footer-1">
  <div class="social-links">
    <?php foreach ( $contents['social'] as $social ): ?>
      <a class="icon" href="<?php echo $social ?>" target="_blank"></a>
    <?php endforeach; ?>
  </div>
  <!-- WP Nav -->
  <?php wp_nav_menu( array(
    'menu'       => $contents['menu'],
    'menu_class' => 'nav nav-pills flex flex-center',
    'container'  => false,
    'walker'     => new wp_bootstrap_navwalker(),
  ) ) ?>

  <p class="copyright"><?php echo $contents['copyright'] ?></p>
</footer>
