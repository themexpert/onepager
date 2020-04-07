<?php

Class TXOP_Handler{

    public function __construct(){
        $this->upload_handler();
    }

    
    public function upload_handler(){
        
        if(! isset($_POST['upload_template_button'])){
            return;
        }
        if( ! wp_verify_nonce($_POST['_wpnonce'], 'upload-template-nonce') ){
            wp_die("are you cheating ?");
        }
        if( ! current_user_can('manage_options') ){
            wp_die('Are you cheating buddy ?');
        }

        // $json_file = $_POST['import-template-json'];
        // $file_name = $_FILES;
        $read_json_file = file_get_contents($_FILES['import-template-json']['tmp_name']);
        $json_data = json_decode($read_json_file, true);
        echo '<pre>';
        var_dump ( 'posts', $_POST );
        var_dump ( 'files', $_FILES );
        var_dump ( 'data', $json_data );
        echo '</pre>';
        exit();
    }
}

?>