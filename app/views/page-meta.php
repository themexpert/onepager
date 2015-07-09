<style>
    .layout-thumbnail{
        width: 200px;
        height: 200px;
        float: left;
        margin: 10px;
        padding: 10px;
    }
    .layout-thumbnail img{
        width: 100%;
    }
</style>

<div class="onepager-meta-container">
    <?php if ($post->post_status == "publish"): ?>
    <div class="toolbar">
        <a href="<?php echo $url->__toString() ?>">Frontend Editor</a>

        <div style="display:none">
            <button type="button" id="onepager-save-layout" class="onepager-button">Save Layout</button>
            <button type="button" id="onepager-export-layout" class="onepager-button">Export Layout</button>
            <button type="button" id="onepager-import-layout" class="onepager-button">Import Layout</button>

            <!--needed for downloading with ajax-->
            <a id="downloadAnchorElem"></a>
        </div>

    </div>
    <?php endif; ?>

    <div id="onepager-layouts">
        <?php foreach($onepagerLayouts as $layout): ?>
            <div class="layout-thumbnail">
                <img src="<?php echo $layout['screenshot']?>"/>

                <div class="caption">
                    <h3><?php echo $layout['name']?></h3>

                    <button data-layout-id="<?php echo $layout['id']?>" class="onepager-select-layout" class="btn btn-primary" type="button"> Select</button>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <div style="clear:both"></div>
</div>
