<?php namespace ThemeXpert\Providers\WordPress;

use ThemeXpert\Providers\Contracts\Opi18nInterface;

class Opi18n implements Opi18nInterface {
    public function set_opi18n_strings(){
        return [
            'hello' => 'hello new world'
        ];
    }
    public function get_opi18n_strings(){
        return [
            'preview' => __('Preview', 'tx-onepager'),
            'new_update_available' => __('New Update Available', 'tx-onepager'),
            'add_block' => __('Add block', 'tx-onepager'),
            'upgrade_to_pro' => __('Upgrade to PRO', 'tx-onepager'),
            'unlock_pro_description' => __('Unlock more layouts, blocks and features you could imagine.', 'tx-onepager'),
            'exit' => __('Exit', 'tx-onepager'),
            'update' => __('Update', 'tx-onepager'),
            'save_as_template' => __('Save as Template', 'tx-onepager'),
            'export' => __('Export', 'tx-onepager'),
            'res_desktop' => __('Desktop', 'tx-onepager'),
            'res_tablet' => __('Tablet (768px)', 'tx-onepager'),
            'res_mobile' => __('Mobile (360px)', 'tx-onepager'),
            'save_page_op_library' => __('Save page to Onepager library', 'tx-onepager'),
            'import_op_library' => __('Import template to Onepager library', 'tx-onepager'),
            'insert' => __('Insert', 'tx-onepager'),
            'save' => __('Save', 'tx-onepager'),
            'error' => [
                'section_add' => __('Please add a section in page', 'tx-onepager'),
                'save' => __('Could not save', 'tx-onepager'),
                'settings' => __('You haven\'t saved your settings changes and by leaving the page they will be lost.', 'tx-onepager'),
                'insert' => __('Can not insert. Something went wrong', 'tx-onepager'),
                'wrong_json' => __('Wrong JSON File. Please upload Onepager JSON', 'tx-onepager'),
            ],
            'success' => [
                'template_added' => __('Template Added Successfully', 'tx-onepager'),
                'section_added' => __('New section added', 'tx-onepager'),
            ],
            'tab' => [
                'layout' => __('Layout', 'tx-onepager'),
                'contents' => __('Contents', 'tx-onepager'),
                'blocks' => __('Blocks', 'tx-onepager'),
                'menu' => __('Menu', 'tx-onepager'),
                'page_settings' => __('Page Settings', 'tx-onepager'),
                'settings' => __('Settings', 'tx-onepager'),
                'styles' => __('styles', 'tx-onepager'),
                'my_templates' => __('My Templates', 'tx-onepager'),
            ],
            'user_input' => [
                'template_name' => __('Enter template name', 'tx-onepager'),
                'merge_layout_text' => __('Merge with your page ?', 'tx-onepager'),
                'delete_layout_text' => __('Are you sure to delete ?', 'tx-onepager'),
            ],
            'dropdown' => [
                'section' => __('Please select a section', 'tx-onepager'),
            ],
            'alert' => [
                'select_menu' => __('Select any menu from the list.', 'tx-onepager'),
                'no_save_template' => __('You didn\'t save any template yet.', 'tx-onepager'),
                'no_blocks' => __('You have no blocks', 'tx-onepager'),
            ],
            'label' => [
                'menu_position' => __('Menu Position', 'tx-onepager'),
            ],
            'review' => [
                'str1' => __('If you like our plugin please ', 'tx-onepager'),
                'str2' => __('rate us on wordpress.org', 'tx-onepager'),
            ],
            'placeholder' => [
                'type_template_name' => __('Type your template name', 'tx-onepager'),
            ],
            'button' => [
                'saving' => __('saving', 'tx-onepager'),
                'save' => __('save', 'tx-onepager'),
                'uploading' => __('Uploading', 'tx-onepager'),
                'select_file' => __('Select File', 'tx-onepager'),
            ],
            'thead' => [
                'name' => __('Name', 'tx-onepager'),
                'type' => __('Type', 'tx-onepager'),
                'created_by' => __('Created By', 'tx-onepager'),
                'created_at' => __('Created At', 'tx-onepager'),
                'action' => __('Action', 'tx-onepager'),
            ],
            'tbody' => [
                'admin' => __('Admin', 'tx-onepager'),
                'insert' => __('Insert', 'tx-onepager'),
                'export' => __('Export', 'tx-onepager'),
            ],
            'delete' => [
                'title' => __('Are you sure?', 'tx-onepager'),
                'text' => __('Time travel is still hard and there is no way back', 'tx-onepager'),
                'confirm_button_text' => __('Yes, delete it', 'tx-onepager'),
            ],
            'tooltip' => [
                'edit' => __('Edit', 'tx-onepager'),
                'copy' => __('Copy', 'tx-onepager'),
                'delete' => __('Delete', 'tx-onepager'),
                'rename' => __('Double click to rename', 'tx-onepager'),
            ],
            
        ];
    }
}
