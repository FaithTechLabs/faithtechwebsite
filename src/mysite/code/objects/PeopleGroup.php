<?php

class PeopleGroup extends DataObject
{
    private static $db = array(
        'SortOrder' => 'Int',
        'Title' => 'Varchar'
    );

    private static $defautl_sort = 'SortOrder';

    private static $has_many = array(
        'People' => 'PersonalPage'
    );

    public function getCMSFields()
    {
        return new FieldList(array(
            new TextField('Title', 'Title')
        ));
    }

    public function summaryFields()
    {
        return array(
            'Title' => 'Title'
        );
    }
}