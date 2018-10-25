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
        'Impact' => 'Text',
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
            ListboxField::create('Location', 'Location', JobLocation::get()->map()->toArray())->setMultiple(false),
            DateField::create('Date', 'Deadline')->setConfig('showcalendar', true),
            TextareaField::create('Teaser', 'Quick Summary of the Job'),
            HTMLEditorField::create('Requirements', 'Job Requirements')->setRows(10),
            TextareaField::create('Impact', 'Kingdom Impact'),
            TextField::create('Contact', 'Email address where applications can be sent')), 'Description');



        return $fields;
    }

    public function loc2class($id)
    {
        $locations = JobLocation::get()->map()->toArray();
        $location = strtolower($locations[$id]);
        $class = $location;
        return $class;
    }

    public function LocationName($id)
    {
        $locations = JobLocation::get()->map()->toArray();
        return $locations[$id];
    }
}

class JobPage_Controller extends Page_Controller
{

}