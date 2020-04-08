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
         * If no section found
         */
        if(! array_key_exists('sections', $json_data) ){
            wp_die('Invalid file data. Please Upload Onepager template');
        }
        echo '<pre>';
        var_dump ('welcome');
        echo '</pre>';

        exit();
    }
}

?>