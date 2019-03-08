<?php 
$layouts  = onepager()->presetManager()->all();
$groups   = array_unique( array_reduce( $layouts, function ( $carry, $layout ) {
  return array_merge( $carry, $layout['group'] );
}, [ ] ) );

function op_get_html_group_class( $groups ) {
  return implode( " ", array_map( function ( $group ) {
    return sanitize_title( $group );
  }, $groups ) );
}
?>
<div class="wrap" uk-filter="target: .layout-filter">
  <h1 class="uk-title">Dashboard</h1>
  
  <ul class="uk-subnav uk-subnav-pill" uk-margin>
    <li class="uk-active" uk-filter-control><a href="#">All</a></li>
    <?php foreach( $groups as $group):?>
      <li uk-filter-control="[data-group*='<?php echo sanitize_title($group)?>']"><a href="#"><?php echo $group?></a></li>
    <?php endforeach;?>
  </ul>

  <div class="layout-filter uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
  <?php foreach ( $layouts as $layout ): ?>
    <div data-group="<?php echo op_get_html_group_class($layout['group'])?>">
      <div class="uk-card uk-card-default uk-transition-toggle" tabindex="0">
        <div class="uk-card-media-top uk-inline">
          <img src="<?php echo $layout['screenshot'] ?>" alt="<?php echo $layout['name'] ?>">
          <div class="uk-position-cover uk-overlay uk-overlay-primary uk-transition-fade"></div>
          <div class="uk-position-center uk-text-center uk-transition-fade">
            <p><a href="#" class="uk-button uk-button-primary uk-border-pill">Import</a></p>
          </div>
        </div>
        
        <p class="uk-card-footer uk-padding-small"><?php echo $layout['name'] ?></p>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>
