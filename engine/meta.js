;
(function ($) {
	$(function ($) {
		var pageId = onepager.pageId;
		var enableOnepagerString = wp.i18n.__("Enable Onepager", "tx-onepager");
		var disableOnepagerString = wp.i18n.__("Disable Onepager", "tx-onepager");
		var $onepagerEnableBtn = $( '<button type="button" id="enable-onepager" class="op-btn op-btn-with-logo">'+ enableOnepagerString +'</button>' );
		var $onepagerDisableBtn = $( '<button type="button" id="disable-onepager" class="op-btn op-btn-with-logo">'+ disableOnepagerString +'</button>' );
		var $loading = $( '<div class="onepager-loading" style="display:none"><div uk-spinner></div></div>' );

		// var $editorTabs = $(".wp-editor-tabs");
		var $selectLayoutBtn = $( ".op-select-preset" );
		var $postArea = $( "#postdivrich" );
		var $pageTemplate = $( "#page_template" );

		var $export = $( "#onepager-export-layout" );
		var $onepagerMetabox = $( "#onepager_meta" );
		var $blankTemplate = $( "#blank-template" );
		var $filter = $( "#op-group-filter select" );
		var $presets = $( "#op-presets>.media" );
		var $publish = $( "#publish" );

		window.exportSections = function (name, id) {
			id = id || pageId;
			exportOnepagerSections( id, name );
		};

		$filter.on('change', function () {
			var group = $( this ).val();
			$presets.hide();
			$( group ).show();
		});

		$export.on( 'click', exportHandler );
		$pageTemplate.on( 'change', templateChangeHandler );
		$pageTemplate.trigger( 'change' );
		$selectLayoutBtn.on( 'click', layoutSelectHandler );

		$blankTemplate.on( 'click', resetTemplate );

		$onepagerEnableBtn.on( 'click', enableOnepagerHandler );
		$onepagerDisableBtn.on( 'click', disableOnepagerHandler );

		InitStatusOnePager();
		
		function InitStatusOnePager(){
			setTimeout(function () {
				if(!$('#wpadminbar').length){
					InitStatusOnePager();
				} else {
					if ($postArea.length) {
						$postArea.before( $onepagerEnableBtn );
						$postArea.before( $onepagerDisableBtn );
					} else {
						$gutenberg = $('#editor');
						$gutenberg.find('.edit-post-header-toolbar').append($onepagerDisableBtn);
						$gutenberg.find('.edit-post-header-toolbar').append($onepagerEnableBtn);
					}
		
					if ($( '.block-editor' )) {
						$( '.block-editor' ).prepend( $loading );
					}
					
					var $pageTemplate = $( "#page_template" );
					var $pageTemplateAlternative = $( '.editor-page-attributes__template select' );
					console.log($pageTemplate.val());
					console.log($pageTemplateAlternative.val());
					if(
						$pageTemplate.val() == 'onepage.php' ||
						$pageTemplate.val() == 'onepager-default.php' ||
						$pageTemplateAlternative.val() == 'onepage.php' ||
						$pageTemplateAlternative.val() == 'my-test.php' ||
						$pageTemplateAlternative.val() == 'onepager-default.php'
					){
						$onepagerEnableBtn.hide();
						$onepagerDisableBtn.show();
						$onepagerMetabox.show();
						$( '.editor-block-list__layout, .wp-block.editor-writing-flow__click-redirect' ).hide();
						$( '#onepager_meta' ).removeClass( 'closed' );
						$( '#onepager_meta .op-editpage-link' ).show();
						// $('.editor-block-list__layout, .wp-block.editor-writing-flow__click-redirect').after($('.onepager-meta-container').html());
					} else {
						$onepagerEnableBtn.show();
						$onepagerDisableBtn.hide();
					}
				}
			}, 1000);
		}

		function enableOnepagerHandler() {
			var $wpTitle = $('#title');
			if (!$wpTitle.val()) {
				$wpTitle.val('OnePager #' + $('#post_ID').val());
				$('#title-prompt-text').addClass('screen-reader-text');
			}

			if ($pageTemplate.length) {
				if ($pageTemplate.find( 'option[value="onepager/onepage.php"]' ).get( 0 )) {
					$pageTemplate.val( "onepager/onepage.php" );
				} else {
					$pageTemplate.val( "onepage.php" );
				}
				// $pageTemplate.val("onepage.php");
				$pageTemplate.trigger( 'change' );
				$publish.click();
			} else {
				// guttenburg only section.
				$( ".onepager-loading" ).show();

				var documentTitle = wp.data.select('core/editor').getEditedPostAttribute('title');
				if (!documentTitle) {
					wp.data.dispatch('core/editor').editPost({
						title: 'OnePager #' + $('#post_ID').val()
					});
				}

				wp.data.dispatch('core/editor').editPost({
					template: 'onepage.php'
				});

				$( '.editor-block-list__layout, .wp-block.editor-writing-flow__click-redirect' ).hide();
				wp.data.dispatch('core/editor').savePost();
				
				enableOnePagerWhenSave();
			}
		}

		function enableOnePagerWhenSave() {
			setTimeout(function () {
				if (wp.data.select('core/editor').isSavingPost()) {
					enableOnePagerWhenSave();
				} else {
					$loading.hide();
					$onepagerEnableBtn.hide();
					$onepagerDisableBtn.show();
					$onepagerMetabox.show();
					
					focusOnepagerTitle();
				}
			}, 300);
		}
		function focusOnepagerTitle(){
			if ($pageTemplate.length) {
				return;
			}
			setTimeout(function () {
				$( '#post-title-0' ).focus();
			}, 500);
		}
		function disableOnepagerHandler() {
			$loading.show();

			if ($pageTemplate.length) {
				$pageTemplate.val( "default" );
				$pageTemplate.trigger( 'change' );

				$publish.click();
			} else {
				wp.data.dispatch('core/editor').editPost({
					template: ''
				});
				
				$( '.editor-block-list__layout, .wp-block.editor-writing-flow__click-redirect' ).show();
				wp.data.dispatch('core/editor').savePost();
				disableOnePagerWhenSave();
			}
			
		}

		function disableOnePagerWhenSave() {
			setTimeout(function () {
				if (wp.data.select('core/editor').isSavingPost()) {
					disableOnePagerWhenSave();
				} else {
					$loading.hide();
					$onepagerEnableBtn.show();
					$onepagerDisableBtn.hide();
					$onepagerMetabox.hide();
				}
			}, 300);
		}

		function layoutSelectHandler() {
			
			if ($pageTemplate.length) {
				var $wpTitle = $('#title');
				if (!$wpTitle.val()) {
					$wpTitle.val('OnePager #' + $('#post_ID').val());
					$('#title-prompt-text').addClass('screen-reader-text');
				}
			}else{
				var documentTitle = wp.data.select('core/editor').getEditedPostAttribute('title');
				if (!documentTitle) {
					wp.data.dispatch('core/editor').editPost({
						title: 'OnePager #' + $('#post_ID').val()
					});
				}
			}
			// if ($( '.editor-post-title__block textarea' ).val() == '') {
			// 	alert( 'Please add a title first!' );
			// 	return;
			// }

			// FIXME: $.data ?
			var confirmationMsg =
				wp.i18n.__("Are you sure you want to insert this layout?", 'tx-onepager') +
				wp.i18n.__("This layout will replace your current layout!", "tx-onepager");

			var layoutId = $( this ).attr( "data-layout-id" );
			var proceed = confirm( confirmationMsg );

			if (proceed) {
				$( ".onepager-loading" ).css( "display", "block" )
				insertOnepagerLayout( pageId, layoutId );
			}
		}

		/**
		 * Export Button Click Handle
		 *
		 * @param e
		 */
		function exportHandler(e) {
			exportOnepagerSections( pageId, 'template' );
			e.preventDefault();
		}

		/**
		 * Page Template Change Handler
		 */
		function templateChangeHandler() {
			var template = $( this ).val();

			// 10 ms - just after every other plugin has done their stuff
			setTimeout(
				function () {
					if (isOnepageTemplate( template )) {
							$postArea.hide();
							$onepagerEnableBtn.hide();
							$onepagerDisableBtn.show();
							$onepagerMetabox.show();
					} else {
							$postArea.show();
							$onepagerEnableBtn.show();
							$onepagerDisableBtn.hide();
							$onepagerMetabox.hide();
					}
				},
				10
			);

		}

		/**
		 * Page Template Change Handler
		 */
		function templateChangeHandlerNew() {
			var template = $( this ).val();
			console.log( template );

			// 10 ms - just after every other plugin has done their stuff
			setTimeout(
				function () {
					if (isOnepageTemplate( template )) {
							// $('.edit-post-text-editor, .edit-post-visual-editor').hide();
							$onepagerEnableBtn.hide();
							$onepagerDisableBtn.show();
							$onepagerMetabox.show();
					} else {
							// $('.edit-post-text-editor, .edit-post-visual-editor').show();
							$onepagerEnableBtn.show();
							$onepagerDisableBtn.hide();
							$onepagerMetabox.hide();
					}
				},
				10
			);

		}
	});

	/**
	 * Checks if a given template is a onepager template
	 *
	 * @param template
	 * @returns {boolean}
	 */
	function isOnepageTemplate(template) {
		// if template is null return false
		// return template && ("onepage.php" === template || template.indexOf("onepager-") === 0);
		return template && ("onepage.php" === template || 'my-test.php' === template || template.indexOf( "onepager-" ) === 0 || template.indexOf( "onepager/" ) === 0);
	}

	/**
	 * Given sections array it downloads them
	 *
	 * @param pageId
	 * @param name
	 */
	function exportOnepagerSections(pageId, name) {
		var userTemplate = prompt(wp.i18n.__("Enter template name", "tx-onepager"), wp.i18n.__("mytemplate", "tx-onepager"));
		var payload = {
			action: 'onepager_get_sections',
			pageId: pageId
		};

		var donwloadFileName = 'onepager-' + name + '-' + pageId + '-' + Date.now(); 
		name = name || 'template-' + pageId;
		var screenshot = name + ".jpg";

		$.post(
			ajaxurl,
			payload,
			function (res) {
				if (res.success) {
					downloadAsJson(
						{
							// name: name,
							name: userTemplate,
							screenshot: screenshot,
							file:donwloadFileName,
							identifier: 'txonepager',
							type:'page',
							sections: res.sections

						}
					);
				} else {
					alert( wp.i18n.__("oops!! onepager could not export this page", "tx-onepager") );
				}
			}
		);

	}

	function downloadAsJson(data) {
		var dataStr = "data:text/json;charset=utf-8," + encodeURIComponent( JSON.stringify( data, null, 2 ) );
		var dlAnchorElem = document.getElementById( 'downloadAnchorElem' );

		dlAnchorElem.setAttribute( "href", dataStr );
		dlAnchorElem.setAttribute( "download", data.file + ".json" );
		dlAnchorElem.click();
	}

	function insertOnepagerLayout(pageId, layoutId) {
		var data = {
			action: 'onepager_select_layout',
			layoutId: layoutId,
			pageId: pageId
		};

		loadEditor( data );
	}

	function resetTemplate() {
		var payload = { action: 'onepager_get_sections', pageId: onepager.pageId };
		var data = { action: 'onepager_save_sections', updated: null, pageId: onepager.pageId, sections: [] };

		$.post(
			ajaxurl,
			payload,
			function (res) {
				if (res && res.success && res.sections.length !== 0) {
					var confirmationMsg =
					wp.i18n.__("Are you sure you want to insert this layout?", "tx-onepager") +
					wp.i18n.__("This layout will replace your current layout!", "tx-onepager");

					var proceed = confirm( confirmationMsg );

					// FIXME: give sweetalert :/
					if ( ! proceed) {
						return;
					}

					loadEditor( data );
				} else {
					loadEditor( data );
				}

			}
		)
	}

	function loadEditor(data) {
		$( ".onepager-loading" ).css( "display", "block" )

		$.post(
			ajaxurl,
			data,
			function (res) {
				if (res && res.success) {
					location.href = onepager.buildModeUrl;
					$( ".onepager-loading" ).css( "display", "none" );
				} else {
					$( ".onepager-loading" ).css( "display", "none" )
					alert( wp.i18n.__("failed to insert layout ", "tx-onepager") );
				}
			}
		);
	}

})( jQuery );
