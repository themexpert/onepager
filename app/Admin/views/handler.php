<?php

Class TXOP_Handler{

    public function __construct(){
        $this->upload_handler();
    }

    
    public function upload_handler(){
        /**
         * check the import post data
         */
        if(! isset($_POST['upload_template_button'])){
            return;
        }
        /**
         * Verify nonce
         */
        if( ! wp_verify_nonce($_POST['_wpnonce'], 'upload-template-nonce') ){
            wp_die("are you cheating ?");
        }
        /**
         * check user capability
         */
        if( ! current_user_can('manage_options') ){
            wp_die('Are you cheating buddy ?');
        }
        /**
         * check if no file uploaded
         */
        if(! $_FILES['import-template-json']['tmp_name']){
            wp_die('Please upload onepager template json file');
        }
        /**
         * read the json data and
         * decode that data
         */
        $read_json_file = file_get_contents($_FILES['import-template-json']['tmp_name']);
        $json_data = json_decode($read_json_file, true);
        /**
         * If no identifier found
         */
        if(! array_key_exists('identifier', $json_data) ){
            wp_die('Invalid file. Please Upload Onepager template');
        }
        /**
         * check if the identifier value is txonepager or not
         */
        if( 'txonepager' !== $json_data['identifier'] ){
            wp_die('Invalid file. Please Upload Onepager template');
        }
        /**
         * If no section found
         */
        if(! array_key_exists('sections', $json_data) ){
            wp_die('Invalid file data. Please Upload Onepager template');
        }
        /**
         * get the value from json file
         */
        $name = array_key_exists('name', $json_data) ? sanitize_text_field($json_data['name']) : 'template';
        $type = array_key_exists('type', $json_data) ? sanitize_text_field($json_data['type']) : 'page';
        $data = serialize($json_data['sections']);
        /**
         * return an id for successfull insert
         * or if fail
         * return a error object
         */
        $insert_id = txop_insert_user_templates([
            'name'      => $name,
            'type'      => $type,
            'data'      => $data
        ]);
        /**
         * hanlde the error object
         */
        if( is_wp_error($insert_id)){
            wp_die( $insert_id->get_error_message() );
        }
        /**
         * redirect to the list page 
         * with inserted true query parameter
         */
        $redirect_list_page = admin_url('admin.php?page=onepager-templates&inserted=true'); 
        wp_redirect($redirect_list_page);
        exit;
    }
}

?>