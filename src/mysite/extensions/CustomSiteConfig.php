<?php

class CustomSiteConfig extends DataExtension {

    public static $db = array(
        'AdminEmail' => 'Varchar(100)',
        'CompletionMessage' => 'HTMLText',
        'EmailSubject' => 'Text',
        'EmailBody' => 'HTMLText',

        'Facebook'  => 'Varchar(100)',
        'Meetup'    => 'Varchar(100)',
        'Slack'     => 'Varchar(100)',
        'Instagram' => 'Varchar(100)'
    );

    public static $has_one = array(
        'Logo'      => 'Image',
        'FavIcon'   => 'Image'
    );


    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldsToTab('Root.Main', array(
            new UploadField('Logo', 'Logo(218x45)'),
            TextField::create('AdminEmail', 'Admin Email')->setRightTitle('Contact mails will send to this email'),
            new HeaderField('Socials'),
            new TextField('Facebook', 'Facebook'),
            new TextField('Meetup', 'Meetup'),
            new TextField('Slack', 'Slack'),
            new TextField('Instagram', 'Instagram')
        ));

        $fields->addFieldsToTab('Root.EmailConfig', array(
            HeaderField::create('Email send to Client'),
            TextField::create('EmailSubject', 'Email Subject'),
            HtmlEditorField::create('EmailBody', 'Email Body')->setRows(10),
        ));
    }

}