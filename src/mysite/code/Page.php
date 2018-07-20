<?php

class Page extends SiteTree {

    private static $db = array(
        'Description' => 'HTMLText'
    );
    private static $has_one = array(
        'Banner' => 'Image'
    );
    private static $has_many = array();

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
            UploadField::create('Banner', 'Banner'),
            HtmlEditorField::create('Description', 'Description')->setRows(16)
        ), 'Content');

        return $fields;
    }

}

class Page_Controller extends ContentController {

    private static $allowed_actions = array(
        'ContactForm'
    );

    function ContactForm()
    {
        $fields = new FieldList(array());
        $actions = new FieldList(array(new FormAction('doContactForm', 'submit')));
        $form = new Form($this, 'ContactForm', $fields, $actions);

        return $form;
    }

    function doContactForm($data, $form){
        $contact = new ContactSubmission($data);
        $form->saveInto($contact);

        $contact->write();
        //insert update to pardot saleforce
        $SiteConfig = SiteConfig::current_site_config();
        $noReply = 'no-reply@' . $_SERVER['HTTP_HOST'];
        if ($SiteConfig->AdminEmail) {
            $MailTo = explode(',',$SiteConfig->AdminEmail);
            $adminMail = new RegisterSuccessEmail();
            $adminMail->setTemplate('ContactSubmissionEmail_admin');
            $data['Message'] = nl2br($data['Message']);
            $adminMail->populateTemplate($data);
            $adminMail->setFrom($noReply);
            $adminMail->setSubject('FaithTech Submission');

				foreach($MailTo as $m) {
            	$adminMail->setTo(trim($m));
            	$adminMail->send();
				}
        }

        $clientMail = new RegisterSuccessEmail();
        $clientMail->setFrom($noReply);
        $clientMail->setTo($contact->Email);
        $clientMail->setSubject($SiteConfig->EmailSubject);
        $clientMail->setBody($SiteConfig->EmailBody);
        $clientMail->setTemplate('SubmissionEmail_client');
        $clientMail->send();

        echo json_encode(array(
            "status" => "success"
        ));
    }

    public function getYear(){
       return date('Y', time());
    }

    public function checkMenuPos($Pos){
        if($Pos % 3 == 0) return true;
        return false;
    }

    public function topClass(){
        switch ($this->ClassName){
            case 'EventGalleryPage' : return 'padding-b-60';
        }

    }
}
