<?php
class BlogEntryPage extends Page{
    static $db = array();
    static $has_one = array(
        'Thumbnail' => 'Image'
    );

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
            UploadField::create('Thumbnail', 'Blog Post Image (760x477)')
        ), 'Description');

        return $fields;
    }

}

class BlogEntryPage_Controller extends Page_Controller{
    public function PrevNextPage($Mode = 'next') {

        if($Mode == 'next'){
            return SiteTree::get()->filter(array("ParentID" => $this->ParentID, "Sort:GreaterThan" => $this->Sort))->sort("Sort ASC")->limit(1)->first();
        }
        elseif($Mode == 'prev'){
            return SiteTree::get()->filter(array("ParentID" => $this->ParentID, "Sort:LessThan" => $this->Sort))->sort("Sort DESC")->limit(1)->first();
        }
        else{
            return false;
        }

    }
}