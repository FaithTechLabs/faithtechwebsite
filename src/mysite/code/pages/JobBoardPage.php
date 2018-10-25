<?php

class JobBoardPage extends Page {
    static $allowed_children = array('JobPage');

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        $fields->removeByName("Content");

        $cf = new GridFieldConfig_RecordEditor();
        $cf->addComponent(new GridFieldSortableRows('SortOrder'));
        $fields->addFieldsToTab('Root.Locations', array(
            GridField::create('JobLocation', 'Location', JobLocation::get(), $cf)
        ));

        return $fields;
    }
}

class JobBoardPage_Controller extends Page_Controller{
    public function getJobLocations()
    {
        return JobLocation::get();
    }

}