<?php
$layouts = onepager()->presetManager()->all();
$groups = array_unique(
	array_reduce(
		$layouts,
		function ( $carry, $layout ) {
			return array_merge( $carry, $layout['group'] );
		},
		[]
	)
);

function op_get_html_group_class( $groups ) {
	return implode(
		' ',
		array_map(
			function ( $group ) {
				return sanitize_title( $group );
			},
			$groups
		)
	);
}
?>
<div class="wrap" uk-filter="target: .layout-filter">
  <h1 class="uk-title"><?php _e( 'Dashboard', 'onepager' ); ?></h1>

	<?php if ( ! did_action( 'onepager_pro_loaded' ) ) : ?>
	<div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-margin uk-margin-medium-top uk-margin-medium-bottom">
	  <div class="uk-grid uk-grid-small uk-flex-middle">
		<div class="uk-width-2-3">
		  <div class="uk-grid uk-grid-small">
			<div class="uk-width-1-6 uk-first-column">
			  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="60px" height="40px" viewBox="251 356 110 80" enable-background="new 251 356 110 80" xml:space="preserve" fill="#fff">
				<g>
				  <path d="M291.9,433.6l-25.1-67.7c0.3-2.5,2.4-3,4.6-3.1c2.2-0.2,49-1.3,49-1.3c5,0,6.2,1.3,7.5,3.3c1.3,2,17.8,30.6,17.8,30.6
					c1.5,3.1-1.4,3.6-3.5,3.8c-3.1,0.4-48.8,4.6-48.8,4.6l4.6,12.1l54.9-5.6c8.8-2.6,8-9,6.2-12.3c-1.8-3.2-25-37.8-25-37.8
					c-2.7-3.6-7.7-4.3-11.7-4.3c-4-0.1-57.5-0.3-57.5-0.3c-12.8,0.1-14.5,4.6-14.6,8.3c-0.1,3.6,21.1,71.7,21.1,71.7L291.9,433.6z"/>
				  <path d="M316.5,368.7L316.5,368.7c-0.2,0-25.3,1.3-26.2,1.3c-1,0.1-1.1,0.3-1.1,0.3s-0.1,0.2,0.1,0.7l6.6,15.9
					c0,0.1,0.7,1.6,2.5,1.5c7.2-0.3,27.5-1.9,28.6-2.1c0.8-0.1,0.9-0.3,0.9-0.3s0-0.2-0.3-0.7l0,0c-2.3-4.1-8.2-14.9-8.7-15.5
					C318.6,369.1,318.3,368.7,316.5,368.7z"/>
				  <path d="M325.8,389.3c0,0-0.2-0.4-0.5-1c-5.1,0.5-21,1.7-27.2,2c-0.1,0-0.1,0-0.2,0c-2.7,0-3.7-2.3-3.7-2.4l-6-14.2
					c-0.2,0-0.4,0-0.4,0c-2,0.1-2.1,1-1.7,2l6.3,15.2c0,0.1,1.1,2.6,4,2.6c0.1,0,0.1,0,0.2,0l28-2.1C325.4,391.4,326.9,391,325.8,389.3
					z"/>
				</g>
			  </svg>
			</div>
			<div class="uk-width-5-6">
			  <h5 class="uk-margin-remove-bottom"><?php _e( 'Unlock More Layouts', 'onepager' ); ?></h5>
			  <p class="uk-margin-remove-top">Upgrade to PRO version and unlock more layouts, blocks and features you could imagine.</p>
			</div>
		  </div>

		</div>
		<div class="uk-width-1-3">
		  <a href="https://themesgrove.com/wp-onepager/?utm_source=wp-admin&utm_medium=dashboard&utm_campaign=wponepager-gopro" target="_blank" class="uk-button uk-button-danger">Explore Onepager Pro</a>
		</div>
	  </div>
	</div>
	<?php endif; ?>
  
  <ul class="uk-subnav uk-subnav-pill" uk-margin>
	<li class="uk-active" uk-filter-control><a href="#">All</a></li>
	<?php foreach ( $groups as $group ) : ?>
	  <li uk-filter-control="[data-group*='<?php echo sanitize_title( $group ); ?>']"><a href="#"><?php echo $group; ?></a></li>
	<?php endforeach; ?>
  </ul>

  <div class="layout-filter uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid>
	<?php foreach ( $layouts as $layout ) : ?>
	<div data-group="<?php echo op_get_html_group_class( $layout['group'] ); ?>">
	  <div class="uk-card uk-card-default uk-transition-toggle" tabindex="0" >
			<div class="uk-card-media-top uk-inline uk-height-medium" uk-overflow-auto>
				<img data-src="<?php echo $layout['screenshot']; ?>" alt="<?php echo $layout['name']; ?>" uk-img >
			</div>
			<div class="uk-card-footer uk-padding-small uk-margin-remove uk-text-center">
				<p class="uk-margin-small-bottom"><strong><?php echo $layout['name']; ?></strong></p>
				<button 
					id="layout-import"
					class="uk-button uk-button-primary uk-width-1-1"
					uk-toggle="target: #layout-selection-modal"
					data-name="<?php echo $layout['name']; ?>"
					data-image="<?php echo $layout['screenshot']; ?>"
					data-id="<?php echo $layout['id']; ?>"
					>Import</button>
			</div>
	  </div>
	</div>
	<?php endforeach; ?>
  </div>

  <!-- This is the modal -->
  <div id="layout-selection-modal" class="uk-flex-top" uk-modal="bg-close:false">
	  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
		<h4 class="uk-modal-title"><?php _e( 'Get started with ', 'onepager' ); ?> <strong class="uk-text-primary"></strong></h4>
		<div uk-grid>
			<div class="uk-width-1-3@m">
			  <img id="layout-image" />
			</div>
			<div class="uk-width-2-3@m">
			<form class="uk-form-stacked" method="post" action="options.php">
			  <div class="uk-margin">
				  <label class="uk-form-label" for="form-stacked-text"><?php echo _e( 'Page Title', 'onepager' ); ?></label>
				  <div class="uk-form-controls">
					  <input require class="uk-input page-title" id="form-stacked-text" type="text" placeholder="<?php _e( 'Name of your page', 'onepager' ); ?>" required>
				  </div>
			  </div>
			  <div class="uk-margin">
				<button 
				  type="submit" 
				  id="op_create_page_from_layout_button"
				  class="uk-button uk-button-primary"
				  name="op_create_page_from_layout_button">
				  <span uk-spinner style="display:none"></span>
					<?php _e( 'Create', 'onepager' ); ?>
				</button>
			  </div>
			</form>
			</div>
		</div>
		<button class="uk-modal-close-default" type="button" uk-close></button>
	  </div>
  </div>
</div>

<script>
  function addPage(data) {
	jQuery('#op_create_page_from_layout_button').attr('disabled', 'disabled')
	jQuery(".uk-spinner").css("display", "inline-block");
	$.post(ajaxurl, data, function (res) {
	  if (res && res.success) {
		window.location = res.url;
		// jQuery(".uk-spinner").css("display", "none");
	  } else {
		alert("failed to insert layout ");
		jQuery(".uk-spinner").css("display", "none");
	  }
	});
  }
  
</script>
<script>
UIkit.util.on('#layout-import', 'click', function (e) {
  e.preventDefault();

  $ = $ = jQuery;
  
  var name = $(this).data('name'),
	  imagePath = $(this).data('image'),
	  layoutId = $(this).data('id');
  // Set image
  $('#layout-image').attr('src', imagePath);
  // $('#layout-image').attr('alt', name);
  // Set name
  $('.uk-modal-title strong').text(name);
  // Set layout id 
  $('#layout-selection-modal .uk-button').val(layoutId);
});

UIkit.util.on('#op_create_page_from_layout_button', 'click', function (e) {
  e.preventDefault();

  $ = $ = jQuery;
  let pageTitle = $(".page-title").val();

  if(!pageTitle) {
	alert("Please give a title for your page")
	return;
  }

  addPage({
	action: 'onepager_add_page',
	pageTitle: pageTitle,
	layoutId: $('#layout-selection-modal .uk-button').val()
  })

});

</script>
