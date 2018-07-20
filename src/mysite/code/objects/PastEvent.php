<?php

class PastEvent extends DataObject{
    static $db = array(
        'SortOrder' => 'Int',
        'Title' => 'Varchar(100)',
        'Description' => 'Text',
        'Display' => 'Enum("2,3,4", "2")'
    );

    static $default_sort = 'SortOrder';

    static $has_one = array(
        'Image' => 'Image'
    );

    public function getCMSFields(){
        $drop_data = array(
            '3' => 'Big Square',
            '2' => 'Small Square',
            '4' => 'Rectangle (Width = 800, Height = 400)',            
        );
        return new FieldList(array(
            UploadField::create('Image', 'Image (800x800 or 800x400)'),
            new TextField('Title', 'Title'),
            new TextareaField('Description', 'Description'),
            new DropdownField('Display', 'Display as', $drop_data)
        ));
    }

    public function summaryFields(){
        return array(
            'Image.CMSThumbnail' => 'Image',
            'Title' => 'Title',
            'Display' => 'Display as column'
        );
    }
}