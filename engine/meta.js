;
(function ($) {
  $(function ($) {
    var pageId = onepager.pageId;
    var $onepagerEnableBtn = $('<button type="button" id="enable-onepager" class="op-btn op-btn-with-logo">Enable Onepager</button>');
    var $onepagerDisableBtn = $('<button type="button" id="disable-onepager" class="op-btn op-btn-with-logo">Disable Onepager</button>');

    //var $editorTabs = $(".wp-editor-tabs");
    var $selectLayoutBtn = $(".op-select-preset");
    var $postArea = $("#postdivrich");
    var $pageTemplate = $("#page_template");
    
    var $export = $("#onepager-export-layout");
    var $onepagerMetabox = $("#onepager_meta");
    var $blankTemplate = $("#blank-template");
    var $filter = $("#op-group-filter select");
    var $presets = $("#op-presets>.media");
    var $publish = $("#publish");

    window.exportSections = function (name, id) {
      id = id || pageId;
      exportOnepagerSections(id, name);
    };

    $filter.on('change', function () {
      var group = $(this).val();
      $presets.hide();
      $(group).show();
    });

    $export.on('click', exportHandler);
    $pageTemplate.on('change', templateChangeHandler);
    $pageTemplate.trigger('change');
    $selectLayoutBtn.on('click', layoutSelectHandler);

    $blankTemplate.on('click', resetTemplate);

    $onepagerEnableBtn.on('click', enableOnepagerHandler);
    $onepagerDisableBtn.on('click', disableOnepagerHandler);

    //initialize
    $(window).load(function() {
      setTimeout(function(){
        if($postArea.length){
          $postArea.before($onepagerEnableBtn);
          $postArea.before($onepagerDisableBtn);    
        }else{
          $('.edit-post-header__settings').prepend($onepagerDisableBtn);
          $('.edit-post-header__settings').prepend($onepagerEnableBtn);

          $('.editor-page-attributes__template select').on('change', templateChangeHandlerNew);
          $('.editor-page-attributes__template select').trigger('change');
        }

        if($('.editor-page-attributes__template select').val() == 'onepage.php'){
          $onepagerEnableBtn.hide();
          $onepagerDisableBtn.show();
          $onepagerMetabox.show();
          $('.editor-block-list__layout').hide();
          $('#onepager_meta').removeClass('closed');
          $('#onepager_meta .op-editpage-link').show();
          // $('.editor-block-list__layout').after($('.onepager-meta-container').html());
        }
        else
        {
          $onepagerEnableBtn.show();
          $onepagerDisableBtn.hide();
        }
      }, 3000);
    });

    function enableOnepagerHandler() {
      if($pageTemplate.length){
        if ($pageTemplate.find('option[value="onepager/onepage.php"]').get(0)) {
          $pageTemplate.val("onepager/onepage.php");
        } else {
          $pageTemplate.val("onepage.php");
        }
        //$pageTemplate.val("onepage.php");
        $pageTemplate.trigger('change');        
        $publish.click();
      }else{

        if($('.editor-post-title__block textarea').val() == ''){
          alert('Please add a title first!');
          return;
        }

        $('.editor-block-list__layout').hide();
        $('.editor-page-attributes__template select').val('onepage.php');
        $('.editor-page-attributes__template select').trigger('change');
        
        setTimeout(function(){
          jQuery.ajax( {
              url:wpApiSettings.root + wpApiSettings.versionString + typenow + 's/' + onepager.pageId,
              method: 'POST',
              beforeSend: function ( xhr ) {
                  xhr.setRequestHeader( 'X-WP-Nonce', wpApiSettings.nonce );
              },
              data:{"template":"onepage.php","id":onepager.pageId}
          })
          
          $(".editor-post-save-draft").click();
          // $('.editor-block-list__layout').after($('.onepager-meta-container').html());
          $('#onepager_meta').removeClass('closed');
          $('#onepager_meta .op-editpage-link').show();

        }, 2000);

      }
    }

    function disableOnepagerHandler() {
      if($pageTemplate.length){
        $pageTemplate.val("default");
        $pageTemplate.trigger('change');        
      }else if($('.editor-page-attributes__template select').length){
        $('.editor-page-attributes__template select').val('');
        $('.editor-page-attributes__template select').trigger('change');

        setTimeout(function(){
          jQuery.ajax( {
              url:wpApiSettings.root + wpApiSettings.versionString + typenow + 's/' + onepager.pageId,
              method: 'POST',
              beforeSend: function ( xhr ) {
                  xhr.setRequestHeader( 'X-WP-Nonce', wpApiSettings.nonce );
              },
              data:{"template":"","id":onepager.pageId}
          })
          
          $(".editor-post-save-draft").click();
          // $('.editor-block-list__layout').after($('.onepager-meta-container').html());

        }, 2000);

        setTimeout(function(){
          $(".editor-post-publish-button").click();
        }, 1000);

        // $('.editor-writing-flow #op-presets').remove();
        $('.editor-block-list__layout').show();
      }
    }

    function layoutSelectHandler() {
      //FIXME: $.data ?
      var confirmationMsg =
        "Are you sure you want to insert this layout?" +
        "This layout will replace your current layout!";

      var layoutId = $(this).attr("data-layout-id");
      var proceed = confirm(confirmationMsg);

      if (proceed) {
        insertOnepagerLayout(pageId, layoutId);
      }
    }

    /**
     * Export Button Click Handle
     * @param e
     */
    function exportHandler(e) {
      exportOnepagerSections(pageId, 'template');
      e.preventDefault();
    }

    /**
     * Page Template Change Handler
     */
    function templateChangeHandler() {
      var template = $(this).val();

      //10 ms - just after every other plugin has done their stuff
      setTimeout(function () {
        if (isOnepageTemplate(template)) {
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
      }, 10);

    }
    
    /**
     * Page Template Change Handler
     */
    function templateChangeHandlerNew() {
      var template = $(this).val();
      console.log(template);

      //10 ms - just after every other plugin has done their stuff
      setTimeout(function () {
        if (isOnepageTemplate(template)) {
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
      }, 10);

    }
  });

  /**
   * Checks if a given template is a onepager template
   * @param template
   * @returns {boolean}
   */
  function isOnepageTemplate(template) {
    //if template is null return false
    // return template && ("onepage.php" === template || template.indexOf("onepager-") === 0);
    return template && ("onepage.php" === template || template.indexOf("onepager-") === 0 || template.indexOf("onepager/") === 0);
  }

  /**
   * Given sections array it downloads them
   * @param pageId
   * @param name
   */
  function exportOnepagerSections(pageId, name) {
    var payload = {
      action: 'onepager_get_sections',
      pageId: pageId
    };

    name = name || 'template-' + pageId;
    var screenshot = name + ".jpg";

    $.post(ajaxurl, payload, function (res) {
      if (res.success) {
        downloadAsJson({
          name: name,
          screenshot: screenshot,
          sections: res.sections
        });
      } else {
        alert("oops!! onepager could not export this page");
      }
    });

  }

  function downloadAsJson(data) {
    var dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(data, null, 2));
    var dlAnchorElem = document.getElementById('downloadAnchorElem');

    dlAnchorElem.setAttribute("href", dataStr);
    dlAnchorElem.setAttribute("download", data.name + ".json");
    dlAnchorElem.click();
  }

  function insertOnepagerLayout(pageId, layoutId) {
    var data = {
      action: 'onepager_select_layout',
      layoutId: layoutId,
      pageId: pageId
    };

    loadEditor(data);
  }

  function resetTemplate() {
    var payload = {action: 'onepager_get_sections', pageId: onepager.pageId};
    var data = {action: 'onepager_save_sections', updated: null, pageId: onepager.pageId, sections: []};

    $.post(ajaxurl, payload, function (res) {
      if (res && res.success && res.sections.length !== 0) {
        var confirmationMsg =
          "Are you sure you want to insert this layout?" +
          "This layout will replace your current layout!";

        var proceed = confirm(confirmationMsg);

        //FIXME: give sweetalert :/
        if (!proceed) {
          return;
        }

        loadEditor(data);
      } else {
        loadEditor(data);
      }

    })
  }

  function loadEditor(data) {
    $.post(ajaxurl, data, function (res) {
      if (res && res.success) {
        location.href = onepager.buildModeUrl;
      } else {
        alert("failed to insert layout ");
      }
    });
  }

  function addPage(data) {
    $.post(ajaxurl, data, function (res) {
      if (res && res.success) {
        console.log(res)
      } else {
        alert("failed to insert layout ");
      }
    });
  }

})(jQuery);
