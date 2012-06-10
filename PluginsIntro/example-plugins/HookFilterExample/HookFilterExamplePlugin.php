<?php


class HookFilterExamplePlugin extends Omeka_Plugin_Abstract
{

    protected $_hooks = array('public_append_to_items_show');
    protected $_filters = array('admin_items_form_tabs');


    public function hookPublicAppendToItemsShow()
    {
        //usually, this hook is used to display additional data related to an item that your plugin keeps track of 
        $item = get_current_item();
        echo "I'm item number " . $item->id;               
    }
    
    public function filterAdminItemsFormTabs($tabs, $item)
    {
        //usually, this filter is used to add form info for your plugin
        //the after_save_item hook is then used to process that form data
        
        //here, we'll just start with how to add a tab that displays some simple text
        
        $tabs['Hook Filter Example'] = "Hi there!";
        return $tabs;        
    }

}