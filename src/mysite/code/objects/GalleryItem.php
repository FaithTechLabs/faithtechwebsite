<?php

class GalleryItem extends DataObject{
    static $db = array(
        'SortOrder' => 'Int',
        'Title' => 'Varchar(100)',
        'Description' => 'Text',
        'Link' => 'Text'
    );

    static $default_sort = 'SortOrder';

    static $has_one = array(
        'Image' => 'Image',
        'EventGalleryPage' => 'EventGalleryPage'
    );

    public function getCMSFields(){
        return new FieldList(array(
            UploadField::create('Image', 'Image(1200x800)'),
            TextField::create('Title', 'Title'),
            TextareaField::create('Description', 'Description'),
            TextField::create('Link', 'Link'),
        ));
    }

    public function summaryFields(){
        return array(
            'Image.CMSThumbnail' => 'Image',
            'Title' => 'Title',
            'Link' => 'Link'
        );
    }
}