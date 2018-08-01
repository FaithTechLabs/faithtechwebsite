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

    private function getBanner(){
        $banner = $this->parent()->getField('Banner');
    }
}

class BlogEntryPage_Controller extends Page_Controller{

}