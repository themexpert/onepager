<?php

Class TXOP_Delete_Handler{

    public function __construct(){
        $this->txop_delete_template();
    }
    
    public function txop_delete_template(){
        /**
         * Verify nonce
         */
        if( ! wp_verify_nonce($_REQUEST['_wpnonce'], 'txop-delete-template') ){
            wp_die("are you cheating ?");
        }
        /**
         * check user capability
         */
        if( ! current_user_can('manage_options') ){
            wp_die('Are you cheating buddy ?');
        }
        /**
         * get the template id from request
         */
        $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
        /**
         * call the delete function 
         * and it return row for success
         * and error object for failure
         */
        $delete_template = txop_delete_template($id);
        /**
         * redirect to the list page 
         */
        if($delete_template){
            $redirect_list_page = admin_url('admin.php?page=onepager-templates&template-deleted=true'); 
        }else{
            $redirect_list_page = admin_url('admin.php?page=onepager-templates&template-deleted=false'); 
        }
        wp_redirect($redirect_list_page);
        exit;
    }
}

?>