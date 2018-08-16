<?php

class HomePage extends Page {

    static $db = array(
        //Top Content
        'TopTitle' => 'Varchar(100)',
        'TopDescription' => 'HTMLText',
        'TopLabTitle' => 'Varchar(100)',
        'TopLabDescription' => 'Text',
        'TopWorkTitle' => 'Varchar(100)',
        'TopWorkDescription' => 'Text',
        'TopInstituteTitle' => 'Varchar(100)',
        'TopInstituteDescription' => 'Text',

        //Block1 Content
        'Block1Title' => 'Varchar(100)',
        'Block1Content' => 'HTMLText',

        //Block2 Content
        'Block2TopTitle' => 'Varchar(100)',
        'Block2TopContent' => 'HTMLText',
        'Block2MiddleTitle' => 'Varchar(100)',
        'Block2MiddleContent' => 'HTMLText',
        'Block2BottomTitle' => 'Varchar(100)',
        'Block2BottomContent' => 'HTMLText',

        //block3 quote
        'Block3Title' => 'Varchar(100)',
    );

    static $has_one = array(
        'Block2TopImage' => 'Image',
        'Block2MiddleImage' => 'Image',
        'Block2BottomImage' => 'Image',
        'TopBackground' => 'Image',
        'LabsLinkedPage' => 'SiteTree',
        'WorkLinkedPage' => 'SiteTree',
        'InstituteLinkedPage' => 'SiteTree',
    );

    function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeByName('Banner');
        $fields->removeByName('Content');
        $fields->removeByName('SubTitle');
        $fields->removeByName('SubTitleColor');
        $fields->removeByName('Description');

        /*Top Content*/
        $fields->addFieldsToTab('Root.Top', array(
            new TextField('TopTitle', 'Title'),
            HtmlEditorField::create('TopDescription', 'Description')->setRows(8),
            new UploadField('TopBackground', 'Background (1920x900)'),

            new HeaderField('Labs'),
            new TextField('TopLabTitle', 'Title'),
            TreeDropdownField::create('LabsLinkedPageID', 'Link to page', 'SiteTree', 'ID', 'MenuTitle'),
            new TextareaField('TopLabDescription', 'Description'),

            new HeaderField('Work'),
            new TextField('TopWorkTitle', 'Title'),
            TreeDropdownField::create('WorkLinkedPageID', 'Link to page', 'SiteTree', 'ID', 'MenuTitle'),
            new TextareaField('TopWorkDescription', 'Description'),

            new HeaderField('Institute'),
            new TextField('TopInstituteTitle', 'Title'),
            TreeDropdownField::create('InstituteLinkedPageID', 'Link to page', 'SiteTree', 'ID', 'MenuTitle'),
            new TextareaField('TopInstituteDescription', 'Description')
        ));
        /*End Top*/

        /*Block1*/
        $fields->addFieldsToTab('Root.Block1', array(
            new TextField('Block1Title', 'Title'),
            new HtmlEditorField('Block1Content', 'Description')
        ));
        /*End Block1*/

        /*Block2*/
        $fields->addFieldsToTab('Root.Block2.Top', array(
            new HeaderField('Top'),
            new UploadField('Block2TopImage', 'Image (1000x800)'),
            new TextField('Block2TopTitle', 'Title'),
            HtmlEditorField::create('Block2TopContent', 'Description')->setRows(10),

            new HeaderField('Middle'),
            new UploadField('Block2MiddleImage', 'Image (1000x800)'),
            new TextField('Block2MiddleTitle', 'Title'),
            HtmlEditorField::create('Block2MiddleContent', 'Description')->setRows(10),

            new HeaderField('Bottom'),
            new UploadField('Block2BottomImage', 'Image (1000x800)'),
            new TextField('Block2BottomTitle', 'Title'),
            HtmlEditorField::create('Block2BottomContent', 'Description')->setRows(10),
        ));
        /*End Block2*/

        /*Block3*/
        $cf = new GridFieldConfig_RecordEditor();
        $cf->addComponent(new GridFieldSortableRows('SortOrder'));
        $fields->addFieldsToTab('Root.Block3', array(
            new TextField('Block3Title', 'Title'),
            new GridField('Quotes', 'Quotes', Quote::get(), $cf)
        ));
        /*End Block3*/

        return $fields;
    }

}

class HomePage_Controller extends Page_Controller {

    private static $allowed_actions = array(
    );

    public function getQuotes(){
        return Quote::get();
    }

    public function checkPartnerPos($Pos){
        if($Pos % 5 == 0) return true;
        return false;
    }
}
