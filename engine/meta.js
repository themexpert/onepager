;
(function ($) {
  $(function ($) {
    var pageId              = onepager.pageId;
    var $onepagerEnableBtn  = $('<button type="button" id="enable-onepager" class="op-btn op-btn-with-logo">Enable Onepager</button>');
    var $onepagerDisableBtn = $('<button type="button" id="disable-onepager" class="op-btn op-btn-with-logo">Disable Onepager</button>');

    //var $editorTabs = $(".wp-editor-tabs");
    var $selectLayoutBtn = $(".op-select-preset");
    var $postArea        = $("#postdivrich");
    var $pageTemplate    = $("#page_template");
    var $export          = $("#onepager-export-layout");
    var $onepagerMetabox = $("#onepager-metabox");
    var $blankTemplate   = $("#blank-template");
    var $filter          = $("#op-group-filter select");
    var $presets         = $("#op-presets>.media");
    var $publish         = $("#publish");
    window.exportSections = function () {
      $export.click();
    };

    $filter.on('change', function(){
      var group = $(this).val();
      if(group === 'all'){
        $presets.show();
        return;
      }

      $presets.hide();
      $(".og-"+group).show();
    });

    $export.on('click', exportHandler);
    $pageTemplate.on('change', templateChangeHandler);
    $selectLayoutBtn.on('click', layoutSelectHandler);

    $blankTemplate.on('click', resetTemplate);

    $onepagerEnableBtn.on('click', enableOnepagerHandler);
    $onepagerDisableBtn.on('click', disableOnepagerHandler);

    //initialize
    $pageTemplate.trigger('change');
    $postArea.before($onepagerEnableBtn);
    $postArea.before($onepagerDisableBtn);

    function enableOnepagerHandler() {
      $pageTemplate.val("onepage.php");
      $pageTemplate.trigger('change');

      $publish.click();
    }

    function disableOnepagerHandler() {
      $pageTemplate.val("default");
      $pageTemplate.trigger('change');
    }

    function layoutSelectHandler() {
      //FIXME: $.data ?
      var confirmationMsg =
            "Are you sure you want to insert this layout?" +
            "This layout will replace your current layout!";

      var layoutId = $(this).attr("data-layout-id");
      var proceed  = confirm(confirmationMsg);

      if (proceed) {
        insertOnepagerLayout(pageId, layoutId);
      }
    }

    /**
     * Export Button Click Handle
     * @param e
     */
    function exportHandler(e) {
      exportOnepagerSections(pageId);
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
  });

  /**
   * Checks if a given template is a onepager template
   * @param template
   * @returns {boolean}
   */
  function isOnepageTemplate(template) {
    //if template is null return false
    return template && ("onepage.php" === template || template.indexOf("op-") === 0);
  }

  /**
   * Given sections array it downloads them
   * @param pageId
   */
  function exportOnepagerSections(pageId) {
    var payload = {
      action: 'onepager_get_sections',
      pageId: pageId
    };

    $.post(ajaxurl, payload, function (res) {
      if (res.success) {
        downloadAsJson({
          sections: res.sections,
          name    : "template.json"
        });
      } else {
        alert("oops!! onepager could not export this page");
      }
    });

  }

  function downloadAsJson(data) {
    var dataStr      = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(data, null, 2));
    var dlAnchorElem = document.getElementById('downloadAnchorElem');

    dlAnchorElem.setAttribute("href", dataStr);
    dlAnchorElem.setAttribute("download", "template.json");
    dlAnchorElem.click();
  }

  function insertOnepagerLayout(pageId, layoutId) {
    var data = {
      action  : 'onepager_select_layout',
      layoutId: layoutId,
      pageId  : pageId
    };

    loadEditor(data);
  }

  function resetTemplate() {
    var payload = {action: 'onepager_get_sections', pageId: onepager.pageId};
    $.post(ajaxurl, payload, function(res){
      if(res && res.success && res.sections.length !== 0){
        var confirmationMsg =
          "Are you sure you want to insert this layout?" +
          "This layout will replace your current layout!";

        var proceed  = confirm(confirmationMsg);

        //FIXME: give sweetalert :/
        if(!proceed) return;

        var data = {action: 'save_sections', updated: null, pageId: onepager.pageId, sections: []};
        loadEditor(data);
      } else {
        loadEditor();
      }

    })
  }

  function loadEditor(data){
    $.post(ajaxurl, data, function(res){
      if(res && res.success) {
        location.href = onepager.buildModeUrl;
      } else {
        alert("failed to insert layout ");
      }
    });
  }

})(jQuery);
