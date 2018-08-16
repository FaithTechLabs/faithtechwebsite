<?php

class JobBoardPage extends Page {
    static $allowed_children = array('JobPage');

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        $fields->removeByName("Content");

        return $fields;
    }
}

class JobBoardPage_Controller extends Page_Controller{

}