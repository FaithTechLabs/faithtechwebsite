<?php

class JobPage extends Page
{

    static $can_be_root = false;
    static $db = array(
        'Date' => 'Date',
        'Teaser' => 'Text',
        'Company' => 'Varchar',
        'Location' => 'Text',
        'Requirements' => 'HTMLText',
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->replaceField('Title', TextField::create('Title', 'Job Title'));
        $fields->removeByName('Content');
        $fields->removeByName('Banner');
        $fields->addFieldToTab('Root.Main', TextField::create('Company', 'Company Name')->setMaxLength(50), 'Description');
        $fields->addFieldToTab('Root.Main', TextField::create('Location', 'Job Location')->setMaxLength(50), 'Description');
        $fields->addFieldToTab('Root.Main', DateField::create('Date', 'Deadline')->setConfig('showcalendar',true), 'Description');
        $fields->addFieldToTab('Root.Main', TextareaField::create('Teaser', 'Quick Summary of the Job'), 'Description');
        $fields->addFieldToTab('Root.Main', HTMLEditorField::create('Requirements', 'Job Requirements')->setRows(10), 'Description');

        return $fields;
    }
}

class JobPage_Controller extends Page_Controller{

}