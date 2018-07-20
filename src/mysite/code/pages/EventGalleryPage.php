<?php

class EventGalleryPage extends Page{
    static $db = array();
    static $has_one = array(
        'Thumbnail' => 'Image'
    );
    static $has_many = array(
        'GalleryItems' => 'GalleryItem'
    );

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Thumbnail', array(
            UploadField::create('Thumbnail', 'Thumbnail (255x160)')
        ));

        $cf = new GridFieldConfig_RecordEditor();
        $cf->addComponent(new GridFieldSortableRows('SortOrder'));
        $fields->addFieldsToTab('Root.Gallery', array(
            GridField::create('GalleryItems', 'Gallery', $this->GalleryItems(), $cf),
        ));

        return $fields;
    }
}

class EventGalleryPage_Controller extends Page_Controller{

}