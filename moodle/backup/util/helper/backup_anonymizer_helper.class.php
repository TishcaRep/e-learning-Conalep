<?php

/**
 * @subpackage backup-helper
 * @copyright  2010 onwards Eloy Lafuente (stronk7) {@link http://stronk7.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class backup_anonymizer_helper {

    /**
     * Determine if the given user is an 'anonymous' user, based on their username, firstname, lastname
     * and email address.
     * @param stdClass $user the user record to test
     * @return bool true if this is an 'anonymous' user
     */
    public static function is_anonymous_user($user) {
        if (preg_match('/^anon\d*$/', $user->username)) {
            $match = preg_match('/^anonfirstname\d*$/', $user->firstname);
            $match = $match && preg_match('/^anonlastname\d*$/', $user->lastname);
            $match = $match && preg_match('/^anon\d*@doesntexist\.com$/', $user->email);
            if ($match) {
                return true;
            }
        }
        return false;
    }

    public static function process_user_auth($value) {
        return 'manual'; // Set them to manual always
    }

    public static function process_user_username($value) {
        static $counter = 0;
        $counter++;
        return 'anon' . $counter; // Just a counter
    }

    public static function process_user_idnumber($value) {
        return ''; // Just blank it
    }

    public static function process_user_firstname($value) {
        static $counter = 0;
        $counter++;
        return 'anonfirstname' . $counter; // Just a counter
    }

    public static function process_user_lastname($value) {
        static $counter = 0;
        $counter++;
        return 'anonlastname' . $counter; // Just a counter
    }

    public static function process_user_email($value) {
        static $counter = 0;
        $counter++;
        return 'anon' . $counter . '@doesntexist.com'; // Just a counter
    }

    public static function process_user_icq($value) {
        return ''; // Clean icq
    }

    public static function process_user_skype($value) {
        return ''; // Clean skype
    }

    public static function process_user_yahoo($value) {
        return ''; // Clean yahoo
    }

    public static function process_user_aim($value) {
        return ''; // Clean aim
    }

    public static function process_user_msn($value) {
        return ''; // Clean msn
    }

    public static function process_user_phone1($value) {
        return ''; // Clean phone1
    }

    public static function process_user_phone2($value) {
        return ''; // Clean phone2
    }

    public static function process_user_institution($value) {
        return ''; // Clean institution
    }

    public static function process_user_department($value) {
        return ''; // Clean department
    }

    public static function process_user_address($value) {
        return ''; // Clean address
    }

    public static function process_user_city($value) {
        return 'Perth'; // Set city
    }

    public static function process_user_country($value) {
        return 'AU'; // Set country
    }

    public static function process_user_lastip($value) {
        return '127.0.0.1'; // Set lastip to localhost
    }

    public static function process_user_picture($value) {
        return 0; // No picture
    }

    public static function process_user_url($value) {
        return ''; // No url
    }

    public static function process_user_description($value) {
        return ''; // No user description
    }

    public static function process_user_descriptionformat($value) {
        return 0; // Format moodle
    }

    public static function process_user_imagealt($value) {
        return ''; // No user imagealt
    }

    /**
     * Anonymises user's phonetic name field
     * @param string $value value of the user field
     * @return string anonymised phonetic name
     */
    public static function process_user_firstnamephonetic($value) {
        static $counter = 0;
        $counter++;
        return 'anonfirstnamephonetic' . $counter; // Just a counter.
    }

    /**
     * Anonymises user's phonetic last name field
     * @param string $value value of the user field
     * @return string anonymised last phonetic name
     */
    public static function process_user_lastnamephonetic($value) {
        static $counter = 0;
        $counter++;
        return 'anonlastnamephonetic' . $counter; // Just a counter.
    }

    /**
     * Anonymises user's middle name field
     * @param string $value value of the user field
     * @return string anonymised middle name
     */
    public static function process_user_middlename($value) {
        static $counter = 0;
        $counter++;
        return 'anonmiddlename' . $counter; // Just a counter.
    }

    /**
     * Anonymises user's alternate name field
     * @param string $value value of the user field
     * @return string anonymised alternate name
     */
    public static function process_user_alternatename($value) {
        static $counter = 0;
        $counter++;
        return 'anonalternatename' . $counter; // Just a counter.
    }
}
