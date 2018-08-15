<?php
class BlogEntryPage extends Page{
    static $db = array(
        'Author' => 'Text',
        'ShowKeepReading' => 'Boolean',
        'Active' => 'Boolean',
        'Header' => 'HTMLText'
    );
    static $has_one = array(
        'Thumbnail' => 'Image'
    );

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
            UploadField::create('Thumbnail', 'Thumbnail Image'),
            TextField::create('Author', 'Author Name')->setMaxLength(50)), 'Description');
        $fields->replaceField('Description', HtmlEditorField::create('Header', 'Header text and/or media')->setRows(16));
        $showKeepReadingSection = FieldGroup::create('Keep Reading Section', array(CheckBoxField::create('ShowKeepReading', 'Show Keep Reading Section')));
        $fields->addFieldsToTab('Root.Main', array($showKeepReadingSection));
        $makePostActiveSection = FieldGroup::create('Activate Post', array(CheckBoxField::create('Active', 'Make Post Active')));
        $fields->addFieldsToTab('Root.Main', array($makePostActiveSection));


        return $fields;
    }

    public function getSettingsFields() {
		$fields = parent::getSettingsFields();
//		$fields->addFieldToTab("Root.Settings", new CheckBoxField('ShowKeepReading', 'Show Keep Reading Section?'));
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