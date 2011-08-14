<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 1.8                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2007                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the Affero General Public License Version 1,    |
| March 2002.                                                        |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the Affero General Public License for more details.            |
|                                                                    |
| You should have received a copy of the Affero General Public       |
| License along with this program; if not, contact CiviCRM LLC       |
| at info[AT]civicrm[DOT]org.  If you have questions about the       |
| Affero General Public License or the licensing  of CiviCRM,        |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2007
 * $Id$
 *
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Event_DAO_Participant extends CRM_Core_DAO
{
    /**
     * static instance to hold the table name
     *
     * @var string
     * @static
     */
    static $_tableName = 'civicrm_participant';
    /**
     * static instance to hold the field values
     *
     * @var array
     * @static
     */
    static $_fields = null;
    /**
     * static instance to hold the FK relationships
     *
     * @var string
     * @static
     */
    static $_links = null;
    /**
     * static instance to hold the values that can
     * be imported / apu
     *
     * @var array
     * @static
     */
    static $_import = null;
    /**
     * static instance to hold the values that can
     * be exported / apu
     *
     * @var array
     * @static
     */
    static $_export = null;
    /**
     * static value to see if we should log any modifications to
     * this table in the civicrm_log table
     *
     * @var boolean
     * @static
     */
    static $_log = false;
    /**
     * Participant Id
     *
     * @var int unsigned
     */
    public $id;
    /**
     * FK to Contact ID
     *
     * @var int unsigned
     */
    public $contact_id;
    /**
     * FK to Event ID
     *
     * @var int unsigned
     */
    public $event_id;
    /**
     * Participant status ID. Implicit FK to civicrm_option_value where option_group = participant_status. Default of 1 should map to status = Registered.
     *
     * @var int unsigned
     */
    public $status_id;
    /**
     * Participant role ID. Implicit FK to civicrm_option_value where option_group = participant_role.
     *
     * @var int unsigned
     */
    public $role_id;
    /**
     * When did contact register for event?
     *
     * @var datetime
     */
    public $register_date;
    /**
     * Source of this event registration.
     *
     * @var string
     */
    public $source;
    /**
     * Populate with the label (text) associated with a fee level for paid events with multiple levels. Note that we store the label value and not the key
     *
     * @var string
     */
    public $event_level;
    /**
     *
     * @var boolean
     */
    public $is_test;
    /**
     * class constructor
     *
     * @access public
     * @return civicrm_participant
     */
    function __construct() 
    {
        parent::__construct();
    }
    /**
     * return foreign links
     *
     * @access public
     * @return array
     */
    function &links() 
    {
        if (!(self::$_links)) {
            self::$_links = array(
                'contact_id' => 'civicrm_contact:id',
                'event_id' => 'civicrm_event:id',
            );
        }
        return self::$_links;
    }
    /**
     * returns all the column names of this table
     *
     * @access public
     * @return array
     */
    function &fields() 
    {
        if (!(self::$_fields)) {
            self::$_fields = array(
                'id' => array(
                    'name' => 'id',
                    'type' => CRM_Utils_Type::T_INT,
                    'title' => ts('Participant ID') ,
                    'required' => true,
                ) ,
                'participant_contact_id' => array(
                    'name' => 'contact_id',
                    'type' => CRM_Utils_Type::T_INT,
                    'title' => ts('Contact ID (match to contact)') ,
                    'import' => true,
                    'where' => 'civicrm_participant.contact_id',
                    'headerPattern' => '/contact(.?id)?/i',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'event_id' => array(
                    'name' => 'event_id',
                    'type' => CRM_Utils_Type::T_INT,
                    'title' => ts('Event') ,
                    'import' => true,
                    'where' => 'civicrm_participant.event_id',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'participant_status_id' => array(
                    'name' => 'status_id',
                    'type' => CRM_Utils_Type::T_INT,
                    'title' => ts('Participant Status') ,
                    'import' => true,
                    'where' => 'civicrm_participant.status_id',
                    'headerPattern' => '/^status$/i',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'participant_role_id' => array(
                    'name' => 'role_id',
                    'type' => CRM_Utils_Type::T_INT,
                    'title' => ts('Participant Role') ,
                    'import' => true,
                    'where' => 'civicrm_participant.role_id',
                    'headerPattern' => '/^role$/i',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'participant_register_date' => array(
                    'name' => 'register_date',
                    'type' => CRM_Utils_Type::T_DATE+CRM_Utils_Type::T_TIME,
                    'title' => ts('Register date') ,
                    'import' => true,
                    'where' => 'civicrm_participant.register_date',
                    'headerPattern' => '/^(r(egister\s)?date)$/i',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'participant_source' => array(
                    'name' => 'source',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Participant Source') ,
                    'maxlength' => 128,
                    'size' => CRM_Utils_Type::HUGE,
                    'import' => true,
                    'where' => 'civicrm_participant.source',
                    'headerPattern' => '/^source$/i',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'event_level' => array(
                    'name' => 'event_level',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Fee level') ,
                    'maxlength' => 255,
                    'size' => CRM_Utils_Type::HUGE,
                    'import' => true,
                    'where' => 'civicrm_participant.event_level',
                    'headerPattern' => '/^(f(ee\s)?level)$/i',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'participant_is_test' => array(
                    'name' => 'is_test',
                    'type' => CRM_Utils_Type::T_BOOLEAN,
                    'title' => ts('Test') ,
                    'import' => true,
                    'where' => 'civicrm_participant.is_test',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
            );
        }
        return self::$_fields;
    }
    /**
     * returns the names of this table
     *
     * @access public
     * @return string
     */
    function getTableName() 
    {
        return self::$_tableName;
    }
    /**
     * returns if this table needs to be logged
     *
     * @access public
     * @return boolean
     */
    function getLog() 
    {
        return self::$_log;
    }
    /**
     * returns the list of fields that can be imported
     *
     * @access public
     * return array
     */
    function &import($prefix = false) 
    {
        if (!(self::$_import)) {
            self::$_import = array();
            $fields = &self::fields();
            foreach($fields as $name => $field) {
                if (CRM_Utils_Array::value('import', $field)) {
                    if ($prefix) {
                        self::$_import['participant'] = &$fields[$name];
                    } else {
                        self::$_import[$name] = &$fields[$name];
                    }
                }
            }
        }
        return self::$_import;
    }
    /**
     * returns the list of fields that can be exported
     *
     * @access public
     * return array
     */
    function &export($prefix = false) 
    {
        if (!(self::$_export)) {
            self::$_export = array();
            $fields = &self::fields();
            foreach($fields as $name => $field) {
                if (CRM_Utils_Array::value('export', $field)) {
                    if ($prefix) {
                        self::$_export['participant'] = &$fields[$name];
                    } else {
                        self::$_export[$name] = &$fields[$name];
                    }
                }
            }
        }
        return self::$_export;
    }
}
?>