<?php

class EventCategory extends DataObject
{
    static $db = array(
        'SortOrder' => 'Int',
        'Title' => 'Varchar(100)',
        'URLSegment' => 'Varchar(100)'
    );

    static $default_sort = 'SortOrder';

    static $belong_many_many = array(
        'Events' => 'Event'
    );

    public function getCMSFields(){
        return new FieldList(array(
            TextField::create('Title', 'Title')
        ));
    }

    public function summaryFields(){
        return array(
            'Title' => 'Title',
        );
    }

    public function onBeforeWrite(){
        if(isset($this->Title))
            $this->URLSegment = SiteTree::singleton()->generateURLSegment($this->Title);

        parent::onBeforeWrite();
    }
}