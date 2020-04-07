<?php

Class TXOP_Templates{

    public function handle_template_pages(){
        $action = isset( $_GET['action'] ) ? $_GET['action'] : 'list';

        switch($action){
            case 'new' : 
                $template = __DIR__ . '/templates/template-new.php';
                break;
                
            case 'edit' : 
                $template = __DIR__ . '/templates/template-edit.php';
                break;
            
            case 'view' : 
                $template = __DIR__ . '/templates/template-view.php';
                break;
            
            default : 
                $template = __DIR__ . '/templates/template-list.php';
                break;

        }
        if(file_exists($template)){
            include $template;
        }
    }
    
}

?>