<?php

class PeopleListingPage extends Page{
    static $db = array(
      
    );
    public function getCMSFields(){
        $fields = parent::getCMSFields();
        $fields->removeByName('SubTitle');
        $fields->removeByName('SubTitleColor');
        $fields->removeByName('Description');

        $gf_pG_cf = new GridFieldConfig_RecordEditor();
        $gf_pG_cf->addComponent(new GridFieldSortableRows('SortOrder'));
        $fields->addFieldToTab('Root.Group', new GridField('Groups', 'Groups', PeopleGroup::get(), $gf_pG_cf));
        
        return $fields;
    }
}

class PeopleListingPage_Controller extends Page_Controller{
    
    function getAllPeople(){
        return PersonalPage::get();
    }
    
    function getAllGroups(){
        return PeopleGroup::get();
    }
}