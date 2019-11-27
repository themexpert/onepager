<div class="onepager-meta-container">
  <?php if ( $post->post_status == 'publish' ) : ?>
	<div class="toolbar">
	  <div id="op-group-filter">
		<label><?php esc_html_e('Filter :', 'tx-onepager');?></label>
		<select>
		  <option value=".og-all"><?php esc_html_e('All', 'tx-onepager');?></option>
		  <?php foreach ( $groups as $group ) : ?>
			<option value=".<?php echo tx_get_preset_group_class( $group ); ?>"><?php esc_html_e($group, 'tx-onepager');?></option>
			<?php endforeach; ?>
		</select>
	  </div>

	  <div class="op-btns-group">
		<div>
		  <button type="button" id="onepager-export-layout" class="op-btn op-btn-secondary--small onepager-button"><?php esc_html_e('Export', 'tx-onepager');?></button>
		  <!--<button type="button" id="onepager-save-layout" class="onepager-button">Save Layout</button>
		  <button type="button" id="onepager-import-layout" class="onepager-button">Import Layout</button> -->

		  <!--needed for downloading with ajax-->
		  <a id="downloadAnchorElem"></a>
		</div>
	  </div>
	</div>
	<?php endif; ?>

  <div id="op-presets">
	<div class="op-editpage-link" style="<?php echo ! count( $sections ) ? 'display:none' : ''; ?>">
		<a href="<?php echo $editorUrl; ?>" class="op-btn op-btn-with-logo"><?php esc_html_e('Edit with OnePager', 'tx-onepager');?></a>
		<p><?php esc_html_e('This page is made with OnePager', 'tx-onepager');?></p>
	</div>
	<!-- Blank Template -->
	<div class="media og-all">
	  <figure class="thumbnails">
		<img src="<?php echo op_asset( 'assets/images/blank-template.jpg' ); ?>"/>
		<figcaption>
		  <h3><?php esc_html_e('Start Blank', 'tx-onepager');?></h3>
		  <button id="blank-template" data-layout-id="blank-template" class="op-btn" type="button"><?php esc_html_e('Create', 'tx-onepager');?></button>
		</figcaption>
	  </figure>
	</div>
	<?php foreach ( $onepagerLayouts as $layout ) : ?>
	  <div class="media og-all <?php echo tx_get_preset_groups_class( $layout['group'] ); ?>">
		<figure class="thumbnails">
		  <img src="<?php echo $layout['screenshot']; ?>"/>
		  <figcaption>
			<h3><?php echo $layout['name']; ?></h3>
			<button data-layout-id="<?php echo $layout['id']; ?>" class="op-btn op-select-preset" type="button">
				<?php esc_html_e('Select', 'tx-onepager');?>
			</button>
		  </figcaption>
		</figure>
	  </div>

	<?php endforeach; ?>
  </div>
</div>
