<?php

//moodleform is defined in formslib.php
require_once($CFG->libdir.'/formslib.php');
 
class contact_form extends moodleform {
    //Add elements to form
    public function definition() {
        global $CFG;
 
        $mform = $this->_form; // Don't forget the underscore! 

        //$mform->addElement('header', 'supplyinfo', get_string('acoainfo1','theme_aigne'),'');

        $mform->addElement('text', 'name',  get_string('name'), 'maxlength="100" size="35"');
        $mform->setType('name', PARAM_TEXT);
        $mform->addRule('name', get_string('missingname'), 'required', null, 'server');

        $mform->addElement('text', 'email', get_string('email'), 'maxlength="100" size="35"');
        $mform->setType('email', PARAM_NOTAGS);
        $mform->addRule('email', get_string('missingemail'), 'required', null, 'server');

        $country = get_string_manager()->get_list_of_countries();
        $default_country[''] = get_string('selectacountry');
        $country = array_merge($default_country, $country);
        $mform->addElement('select', 'country', get_string('country'), $country);

        if( !empty($CFG->country) ){
            $mform->setDefault('country', $CFG->country);
        }else{
            $mform->setDefault('country', '');
        }

        $mform->addElement('textarea', 'message', get_string('message', 'message'), 'rows="5" cols="35" class="messagesendbox"');
        $mform->addRule('message', get_string('missingmessage'), 'required', null, 'server');

        //if ($this->signup_captcha_enabled()) {
            //$mform->addElement('recaptcha', 'recaptcha_element', get_string('recaptcha', 'auth'), array('https' => $CFG->loginhttps));
            //$mform->addHelpButton('recaptcha_element', 'recaptcha', 'auth');
        //}

        $this->add_action_buttons($cancel = true, $submitlabel=get_string('sendmessage', 'message'));
        //$this->add_action_buttons(false, get_string('sendmessage', 'message'));
    }

    //Custom validation should be added here
    function validation($data, $files) {

        global $CFG;
        $errors = parent::validation($data, $files);

        if (! validate_email($data['email'])) {
            $errors['email'] = get_string('invalidemail');
        }

        if (!isset($errors['email'])) {
            if ($err = email_is_not_allowed($data['email'])) {
                $errors['email'] = $err;
            }
        }

        if ($this->signup_captcha_enabled()) {
            $recaptcha_element = $this->_form->getElement('recaptcha_element');
            if (!empty($this->_form->_submitValues['recaptcha_challenge_field'])) {
                $challenge_field = $this->_form->_submitValues['recaptcha_challenge_field'];
                $response_field = $this->_form->_submitValues['recaptcha_response_field'];
                if (true !== ($result = $recaptcha_element->verify($challenge_field, $response_field))) {
                    $errors['recaptcha'] = $result;
                }
            } else {
                $errors['recaptcha'] = get_string('missingrecaptchachallengefield');
            }
        }

        // Validate customisable profile fields. (profile_validation expects an object as the parameter with userid set)
        $dataobject = (object)$data;
        $dataobject->id = 0;
        $errors += profile_validation($dataobject, $files);

        return $errors;

        //return array();
    }
}

?>
