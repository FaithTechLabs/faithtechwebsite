<?php

class LabPage extends Page{
    static $db = array(
        'BottomContent' => 'HTMLText',
        'MiddleTitle' => 'Varchar(100)',
        'MiddleBox1' => 'Varchar(100)',
        'MiddleBox2' => 'Varchar(100)',
        'MiddleBox3' => 'Varchar(100)',
        'ProjectsTitle' => 'Varchar(100)'
    );

    static $has_many = array(
        'Projects' => 'Project'
    );

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        $fields->removeByName('Content');

        $fields->addFieldsToTab('Root.Top', array(
            HtmlEditorField::create('Content', 'Content'),
        ));

        $fields->addFieldsToTab('Root.Middle', array(
            TextField::create('MiddleTitle', 'Title'),
            TextField::create('MiddleBox1', 'Box1 Title'),
            TextField::create('MiddleBox2', 'Box2 Title'),
            TextField::create('MiddleBox3', 'Box3 Title'),
        ));

        $fields->addFieldsToTab('Root.Bottom', array(
            HtmlEditorField::create('BottomContent', 'Content'),
        ));

        $cf = new GridFieldConfig_RecordEditor();
        $cf->addComponent(new GridFieldSortableRows('SortOrder'));
        $fields->addFieldsToTab('Root.Projects', array(
            TextField::create('ProjectsTitle', 'Title'),
            GridField::create('Projects', 'Projects', $this-> Projects(), $cf),
        ));

        return $fields;
    }
}

class LabPage_Controller extends Page_Controller{
    
}