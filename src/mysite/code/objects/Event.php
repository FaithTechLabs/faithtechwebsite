<?php

class Event extends DataObject
{
    static $db = array(
        'SortOrder' => 'Int',
        'Title' => 'Varchar(100)',
        'Description' => 'Text',
        'Date' => 'Date',
        'Link' => 'Text',
    );

    static $default_sort = 'SortOrder';

    static $has_one = array(
        'Image' => 'Image',
        'EventPage' => 'EventPage',
    );

    static $many_many = array(
        'EventCategories' => 'EventCategory'
    );

    public function getCMSFields()
    {

        $fields = new FieldList(array(
            UploadField::create('Image', 'Image(800x600)'),
            TextField::create('Title', 'Title'),
            TextareaField::create('Description', 'Description'),
            DateField::create('Date', 'Date')->setConfig('showcalendar', true),
            TextField::create('Link', 'Eventbrite Link'),
            ListboxField::create('EventCategories', 'Categories', EventCategory::get()->map()->toArray())->setMultiple(true),
        ));

        return $fields;
    }

    public function summaryFields(){
        return array(
            'getThumbnail' => 'Image',
            'Title' => 'Title',
            'Description' => 'Description',
            'Date' => 'Date',
            'Link' => 'Link'
        );
    }

    public function getThumbnail() {
        return $this->Image()->Fit(120,120);
    }

    public function cat2class(){
        $class = '';
        foreach($this->EventCategories() as $item)   $class .= "$item->URLSegment ";

        return $class;
    }


}