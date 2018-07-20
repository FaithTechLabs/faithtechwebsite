<?php

class EventPage extends Page{
    static $db = array(
    );

    static $allowed_children = array(
        'EventGalleryPage','RedirectorPage'
    );

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        return $fields;
    }
}

class EventPage_Controller extends Page_Controller{

    public function getEventGalleryPages(){
        return EventGalleryPage::get()->filter('ParentID', $this->ID);
    }
}
