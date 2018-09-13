<?php

class EventPage extends Page
{
    static $db = array();

    static $has_many = array(
        'Events' => 'Event'
    );

    static $allowed_children = array(
        'EventGalleryPage', 'RedirectorPage'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $cf = new GridFieldConfig_RecordEditor();
        $cf->addComponent(new GridFieldSortableRows('SortOrder'));
        $fields->addFieldsToTab('Root.Events', array(
            GridField::create('Events', 'Events', $this->Events(), $cf)
        ));

        $cf = new GridFieldConfig_RecordEditor();
        $cf->addComponent(new GridFieldSortableRows('SortOrder'));
        $fields->addFieldsToTab('Root.Event Categories', array(
            GridField::create('EventCategories', 'Event Categories', EventCategory::get(), $cf)
        ));

        return $fields;
    }
}

class EventPage_Controller extends Page_Controller
{

    public function getEventGalleryPages()
    {
        return EventGalleryPage::get()->filter('ParentID', $this->ID);
    }

    public function getEventCategories()
    {
        return EventCategory::get();
    }
}
