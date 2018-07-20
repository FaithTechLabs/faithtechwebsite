<?php

class PersonalPage extends Page{
    static $db = array(
        'Biography' => 'Text',
    );
    static $has_one = array(
        'Image' => 'Image',
        'PeopleGroup' => 'PeopleGroup'
    );

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        $fields->removeByName('SubTitle');
        $fields->removeByName('SubTitleColor');
        $groups = PeopleGroup::get()->map('ID', 'Title')->toArray();
        $fields->replaceField('Description', TextareaField::create('Description', 'Description')->setRows(10));
        $fields->addFieldsToTab('Root.Information', array(
            UploadField::create('Image', "Image (300x300)"),
            DropdownField::create('PeopleGroupID', 'Choose group', $groups),
            TextareaField::create('Biography', 'Biography')->setRows(10)->setDescription('This field shows on People Listing page')
        ));
        return $fields;
    }
}

class PersonalPage_Controller extends Page_Controller{

}