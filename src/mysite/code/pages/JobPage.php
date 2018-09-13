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
        'Contact' => 'Varchar'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->replaceField('Title', TextField::create('Title', 'Job Title'));
        $fields->removeByName('Content');
        $fields->removeByName('Banner');
        $fields->addFieldsToTab('Root.Main', array(
            TextField::create('Company', 'Company Name')->setMaxLength(50),
            TextField::create('Location', 'Job Location')->setMaxLength(50),
            DateField::create('Date', 'Deadline')->setConfig('showcalendar', true),
            TextareaField::create('Teaser', 'Quick Summary of the Job'),
            HTMLEditorField::create('Requirements', 'Job Requirements')->setRows(10),
            TextField::create('Contact', 'Email address where applications can be sent')), 'Description');


        return $fields;
    }
}

class JobPage_Controller extends Page_Controller
{

}