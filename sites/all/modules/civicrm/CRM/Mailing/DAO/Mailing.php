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
class CRM_Mailing_DAO_Mailing extends CRM_Core_DAO
{
    /**
     * static instance to hold the table name
     *
     * @var string
     * @static
     */
    static $_tableName = 'civicrm_mailing';
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
     *
     * @var int unsigned
     */
    public $id;
    /**
     * Which Domain owns this mailing
     *
     * @var int unsigned
     */
    public $domain_id;
    /**
     * FK to the header component.
     *
     * @var int unsigned
     */
    public $header_id;
    /**
     * FK to the footer component.
     *
     * @var int unsigned
     */
    public $footer_id;
    /**
     * FK to the auto-responder component.
     *
     * @var int unsigned
     */
    public $reply_id;
    /**
     * FK to the unsubscribe component.
     *
     * @var int unsigned
     */
    public $unsubscribe_id;
    /**
     * FK to the opt-out component.
     *
     * @var int unsigned
     */
    public $optout_id;
    /**
     * Mailing Name.
     *
     * @var string
     */
    public $name;
    /**
     * From Header of mailing
     *
     * @var string
     */
    public $from_name;
    /**
     * From Email of mailing
     *
     * @var string
     */
    public $from_email;
    /**
     * Reply-To Email of mailing
     *
     * @var string
     */
    public $replyto_email;
    /**
     * Subject of mailing
     *
     * @var string
     */
    public $subject;
    /**
     * Body of the mailing in text format.
     *
     * @var text
     */
    public $body_text;
    /**
     * Body of the mailing in html format.
     *
     * @var text
     */
    public $body_html;
    /**
     * Is this object a mailing template?
     *
     * @var boolean
     */
    public $is_template;
    /**
     * Should we track URL click-throughs for this mailing?
     *
     * @var boolean
     */
    public $url_tracking;
    /**
     * Should we forward replies back to the author?
     *
     * @var boolean
     */
    public $forward_replies;
    /**
     * Should we enable the auto-responder?
     *
     * @var boolean
     */
    public $auto_responder;
    /**
     * Should we track when recipients open/read this mailing?
     *
     * @var boolean
     */
    public $open_tracking;
    /**
     * Has at least one job associated with this mailing finished?
     *
     * @var boolean
     */
    public $is_completed;
    /**
     * class constructor
     *
     * @access public
     * @return civicrm_mailing
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
                'domain_id' => 'civicrm_domain:id',
                'header_id' => 'civicrm_mailing_component:id',
                'footer_id' => 'civicrm_mailing_component:id',
                'reply_id' => 'civicrm_mailing_component:id',
                'unsubscribe_id' => 'civicrm_mailing_component:id',
                'optout_id' => 'civicrm_mailing_component:id',
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
                    'required' => true,
                ) ,
                'domain_id' => array(
                    'name' => 'domain_id',
                    'type' => CRM_Utils_Type::T_INT,
                    'required' => true,
                ) ,
                'header_id' => array(
                    'name' => 'header_id',
                    'type' => CRM_Utils_Type::T_INT,
                ) ,
                'footer_id' => array(
                    'name' => 'footer_id',
                    'type' => CRM_Utils_Type::T_INT,
                ) ,
                'reply_id' => array(
                    'name' => 'reply_id',
                    'type' => CRM_Utils_Type::T_INT,
                    'required' => true,
                ) ,
                'unsubscribe_id' => array(
                    'name' => 'unsubscribe_id',
                    'type' => CRM_Utils_Type::T_INT,
                    'required' => true,
                ) ,
                'optout_id' => array(
                    'name' => 'optout_id',
                    'type' => CRM_Utils_Type::T_INT,
                    'required' => true,
                ) ,
                'name' => array(
                    'name' => 'name',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Name') ,
                    'maxlength' => 128,
                    'size' => CRM_Utils_Type::HUGE,
                ) ,
                'from_name' => array(
                    'name' => 'from_name',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('From Name') ,
                    'maxlength' => 128,
                    'size' => CRM_Utils_Type::HUGE,
                ) ,
                'from_email' => array(
                    'name' => 'from_email',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('From Email') ,
                    'maxlength' => 128,
                    'size' => CRM_Utils_Type::HUGE,
                ) ,
                'replyto_email' => array(
                    'name' => 'replyto_email',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Replyto Email') ,
                    'maxlength' => 128,
                    'size' => CRM_Utils_Type::HUGE,
                ) ,
                'subject' => array(
                    'name' => 'subject',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Subject') ,
                    'maxlength' => 128,
                    'size' => CRM_Utils_Type::HUGE,
                ) ,
                'body_text' => array(
                    'name' => 'body_text',
                    'type' => CRM_Utils_Type::T_TEXT,
                    'title' => ts('Body Text') ,
                ) ,
                'body_html' => array(
                    'name' => 'body_html',
                    'type' => CRM_Utils_Type::T_TEXT,
                    'title' => ts('Body Html') ,
                ) ,
                'is_template' => array(
                    'name' => 'is_template',
                    'type' => CRM_Utils_Type::T_BOOLEAN,
                ) ,
                'url_tracking' => array(
                    'name' => 'url_tracking',
                    'type' => CRM_Utils_Type::T_BOOLEAN,
                    'title' => ts('Url Tracking') ,
                ) ,
                'forward_replies' => array(
                    'name' => 'forward_replies',
                    'type' => CRM_Utils_Type::T_BOOLEAN,
                    'title' => ts('Forward Replies') ,
                ) ,
                'auto_responder' => array(
                    'name' => 'auto_responder',
                    'type' => CRM_Utils_Type::T_BOOLEAN,
                    'title' => ts('Auto Responder') ,
                ) ,
                'open_tracking' => array(
                    'name' => 'open_tracking',
                    'type' => CRM_Utils_Type::T_BOOLEAN,
                    'title' => ts('Open Tracking') ,
                ) ,
                'is_completed' => array(
                    'name' => 'is_completed',
                    'type' => CRM_Utils_Type::T_BOOLEAN,
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
                        self::$_import['mailing'] = &$fields[$name];
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
                        self::$_export['mailing'] = &$fields[$name];
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