<?php

class Partner extends DataObject{
    static $db = array(
        'SortOrder' => 'Int',
        'Link' => 'Varchar(100)'
    );

    static $default_sort = 'SortOrder';

    static $has_one = array(
        'Image' => 'Image'
    );

    public function getCMSFields(){
        return new FieldList(array(
            UploadField::create('Image', 'Image'),
            TextareaField::create('Link', 'Link')
        ));
    }

    public function summaryFields(){
        return array(
            'Image.CMSThumbnail' => 'Image',
            'Link'  => 'Link'
        );
    }
}