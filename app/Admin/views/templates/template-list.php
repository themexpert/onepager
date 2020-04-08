<?php ?>

<div class="wrap">

    <h1 class="wp-heading-inline"><?php _e('All Templates', 'tx-onepager'); ?></h1>

    <a class="page-title-action" href="<?php echo admin_url('admin.php?page=onepager-templates&action=new'); ?>"><?php _e('Add New', 'tx-onepager'); ?></a>
    
    <!-- success message for import success -->
    <?php if(isset($_GET['inserted'])): ?>
        <div class="notice notice-success">
            <p><?php _e('Templated has been imported successfully', 'tx-onepager'); ?></p>
        </div>
    <?php endif; ?>

    <!-- success message for delete success -->
    <?php if(isset($_GET['template-deleted'] ) && $_GET['template-deleted'] == true): ?>
        <div class="notice notice-success">
            <p><?php _e('Templated has been deleted successfully', 'tx-onepager'); ?></p>
        </div>
    <?php endif; ?>

    <form action="" method="post">
        <?php
        require ONEPAGER_PATH . '/app/Admin/views/template-lists.php';
        $table = new TXOP_Template_Lists();
        $table->prepare_items();
        $table->search_box( 'search', 'search_id' );
        $table->display();
        ?>
    </form>

</div>