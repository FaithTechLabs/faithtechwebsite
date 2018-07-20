<?php

class ContactSubmission extends DataObject{
    static $db = array(
        'Name' => 'Varchar(100)',
        'Email' => 'Varchar(100)',
        'Message' => 'Text'
    );

    static $default_sort = "ID DESC";

    public function getCMSFields(){
        return new FieldList(array(
            ReadonlyField::create('Name', 'Name'),
            ReadonlyField::create('Email', 'Email'),
            ReadonlyField::create('Message', 'Message'),
        ));
    }

    public function summaryFields(){
        return array(
            'Name' => 'Name',
            'Email' => 'Email',
            'Created' => 'Date-Time Submit'
        );
    }
}