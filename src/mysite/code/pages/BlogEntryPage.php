<?php
class BlogEntryPage extends Page{
    static $db = array();
    static $has_one = array(
        'Thumbnail' => 'Image'
    );

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
            UploadField::create('Thumbnail', 'Thumbnail Image')), 'Description');

        return $fields;
    }

}

class BlogEntryPage_Controller extends Page_Controller{
    public function PrevNextPage($Mode = 'next') {

        if($Mode == 'next'){
            $nextPost = SiteTree::get()->filter(array("ParentID" => $this->ParentID, "Sort:GreaterThan" => $this->Sort))->sort("Sort ASC")->limit(1)->first();
            if ($nextPost) {
                return $nextPost;
            } else {
                return SiteTree::get()->filter(array("ParentID" => $this->ParentID))->limit(1)->first();
            }
        }
        elseif($Mode == 'prev'){
            $prevPost = SiteTree::get()->filter(array("ParentID" => $this->ParentID, "Sort:LessThan" => $this->Sort))->sort("Sort DESC")->limit(1)->first();
            if ($prevPost) {
                return $prevPost;
            } else {
                return SiteTree::get()->filter(array("ParentID" => $this->ParentID))->last();
            }
        }
        else{
            return false;
        }

    }
}