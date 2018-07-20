<?php

class ContactSubmissionAdmin extends ModelAdmin{
    static $managed_models = array('ContactSubmission');
    static $url_segment = 'contact-submissions-manager';
    static $menu_title = 'Submissions';

    public function getSearchContext()
    {
        $context = parent::getSearchContext();
        return $context;
    }

    public function getEditForm($id = null, $fields = null) {
        $form = parent::getEditForm($id, $fields);

        $gridFieldName = 'ContactSubmission';
        $gridField = $form->Fields()->fieldByName($gridFieldName);

        if ($gridField) {
            $cf = $gridField->getConfig();
            $cf->removeComponent($cf->getComponentByType('GridFieldAddNewButton'));
        }

        return $form;
    }
}