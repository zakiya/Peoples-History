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

require_once 'CRM/Core/Form.php';require_once 'CRM/Mailing/BAO/Mailing.php';
    /**
     * Build the form for disable mail feature 
     *
     * @param
     * @return void
     * @access public
     */
class CRM_Mailing_Form_Browse extends CRM_Core_Form
{

    /**
     * Heart of the viewing process. The runner gets all the meta data for
     * the contact and calls the appropriate type of page to view.
     *
     * @return void
     * @access public
     *
     */
    function preProcess( ) 
    { 
        $this->_mailingId = CRM_Utils_Request::retrieve('mid', 'Positive', $this);
        $this->_action = CRM_Utils_Request::retrieve('action', 'String', $this);
        
        require_once 'CRM/Mailing/BAO/Mailing.php';
        $mailing =& new CRM_Mailing_BAO_Mailing();
        $mailing->id = $this->_mailingId;
        if ($mailing->find(true)) {
            $this->assign('subject', $mailing->subject);
        }
    }

    /**
     * Function to actually build the form
     *
     * @return None
     * @access public
     */

    public function buildQuickForm( ) 
    {
        $this->addButtons( array(
                                 array ( 'type'      => 'next',
                                         'name'      => ts('Confirm'),
                                         'isDefault' => true   ),
                                 array ( 'type'       => 'cancel',
                                         'name'      => ts('Cancel') ),
                                 )
                                 
                           );
    }
    
    /**
     *
     * @access public
     * @return None
     */
    public function postProcess() 
    {    
        if ( $this->_action & CRM_Core_Action::DELETE ) {        
            CRM_Mailing_BAO_Mailing::del($this->_mailingId);
        } elseif ( $this->_action & CRM_Core_Action::DISABLE ) {
            CRM_Mailing_BAO_Job::cancel($this->_mailingId);
        }
    }//end of function

}
?>
