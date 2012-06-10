<?php


class HookFilterExamplePlugin extends Omeka_Plugin_Abstract
{

    protected $_hooks = array('public_append_to_items_show');
    protected $_filters = array('admin_items_form_tabs');


    public function hookPublicAppendToItemsShow()
    {
        $item = get_current_item();
        echo "I'm item number " . $item->id;               
    }
    
    public function filterAdminItemsFormTabs($tabs, $item)
    {
        $tabs['Hook Filter Example'] = "Hi there!";
        return $tabs;        
    }

}