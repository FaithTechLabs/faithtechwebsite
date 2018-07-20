<?php

class Resource extends DataObject{
    static $db = array(
        'SortOrder' => 'Int',
        'Title' => 'Varchar(100)',
        'Description' => 'Text',
        'Link' => 'Text',
        'LinkType' => 'Enum("ex, in", "in")'
    );

    static $default_sort = 'SortOrder';

    static $has_one = array(
        'Image' => 'Image',
        'ResourcesPage' => 'ResourcesPage',
        'ExternalBlog' => 'BlogEntryPage'
    );

    static $many_many = array(
        'ResourceCategories' => 'ResourceCategory'
    );

    public function getCMSFields(){
        $arr = array(
            'in' => 'Internal - Blog',
            'ex' => 'External Link'
        );

        $fields = new FieldList(array(
            UploadField::create('Image', 'Image(800x600)'),
            TextField::create('Title', 'Title'),
            TextareaField::create('Description', 'Description'),
            TextField::create('Link', 'External Link'),
            DropdownField::create('ExternalBlogID', 'Internal - Blog', BlogEntryPage::get()->map()->toArray()),
            DropdownField::create('LinkType', 'Link Type', $arr),
            ListboxField::create('ResourceCategories', 'Categories', ResourceCategory::get()->map()->toArray())->setMultiple(true),
        ));
        /*
        if($this->LinkType == "ex"){
            $fields->removeByName('ExternalBlogID');
        }else{
            $fields->removeByName('Image');
            $fields->removeByName("Title");
            $fields->removeByName("Link");
        }
        */

        return $fields;
    }

    public function summaryFields(){
        return array(
            'getThumbnail.CMSThumbnail' => 'Image',
            'Title' => 'Title',
            'Description' => 'Description',
            'LinkbyType' => 'Link'
        );
    }

    public function getThumbnail(){
        if($this->LinkType == "in"){
            return $this->ExternalBlog()->Thumbnail();
        }else{
            return $this->Image();
        }
    }

    public function LinkbyType(){
        if($this->LinkType == "in"){
            return $this->ExternalBlog()->Link();
        }else{
            return $this->Link;
        }
    }

    public function cat2class(){
        $class = '';
        foreach($this->ResourceCategories() as $item)   $class .= "$item->URLSegment ";

        return $class;
    }
}