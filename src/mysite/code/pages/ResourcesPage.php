<?php

class ResourcesPage extends Page{
    static $db = array();

    static $has_many = array(
        'Resources' => 'Resource'
    );

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        $fields->removeByName('Content');

        $cf = new GridFieldConfig_RecordEditor();
        $cf->addComponent(new GridFieldSortableRows('SortOrder'));
        $fields->addFieldsToTab('Root.Resources', array(
            GridField::create('Resources', 'Resources', $this->Resources(), $cf)
        ));

        $cf = new GridFieldConfig_RecordEditor();
        $cf->addComponent(new GridFieldSortableRows('SortOrder'));
        $fields->addFieldsToTab('Root.Resource Categories', array(
            GridField::create('ResourceCategories', 'Resource Categories', ResourceCategory::get(), $cf)
        ));

        return $fields;
    }
}

class ResourcesPage_Controller extends Page_Controller{

    public function getResourceCategories(){
        return ResourceCategory::get();
    }
}