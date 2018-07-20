<?php

class BlogPage extends Page{
    static $db = array(
        'ListSubPageTitle' => 'Varchar'
    );

    static $allowed_children = array(
        'BlogEntryPage'
    );

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
            TextField::create('ListSubPageTitle', 'List SubPage Title')
        ), 'Description');

        return $fields;
    }
}

class BlogPage_Controller extends Page_Controller{
    public function getBlogEntryPages(){
        return BlogEntryPage::get()->filter('ParentID', $this->ID);
    }
}