<section id="<?php echo $id?>">
  <div class="container">
    <div class="row">

      <div class="sec-title text-center wow animated fadeInDown animated">
        <h2><?php echo $contents['title']?></h2>
        <p><?php echo $contents['description']?></p>
      </div>

      <?php foreach($contents['packages'] as $k=>$package): ?>
      <div class="col-md-4 wow animated fadeInUp animated" data-wow-delay="<?php echo 0.3+$k*0.1?>s">
        <div class="price-table text-center <?php echo $package['featured'] ? 'featured': ''?>">
          <span><?php echo $package['title']?></span>
          <div class="value">
            <span><?php echo $package['money']?></span>
            <span><?php echo $package['price']?></span><br>
            <span><?php echo $package['period']?></span>
          </div>
          <ul>
            <?php foreach($package['features'] as $feature): ?>
            <li><?php echo $feature?></li>
            <?php endforeach; ?>
            <li><?php echo op_link($package['link'])?></li>
          </ul>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>
