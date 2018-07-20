<?php

class Quote extends DataObject{
    static $db = array(
        'SortOrder' => 'Int',
        'Author' => 'Varchar(50)',
        'AuthorDescription' => 'Text',
        'Quote' => 'Text'
    );

    static $default_sort = 'SortOrder';

    public function getCMSFields(){
        return new FieldList(array(
            new TextField('Author', 'Author'),
            TextareaField::create('AuthorDescription', 'Description')->setRows(3),
            TextareaField::create('Quote', 'Quote')->setRows(8)
        ));
    }

    public function summaryFields(){
        return array(
            'Author' => 'Author',
            'Quote' => 'Quote'
        );
    }
}