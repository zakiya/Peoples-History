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

require_once 'CRM/Core/Form.php';
require_once 'CRM/Core/BAO/CustomGroup.php';
/**
 * This class is to build the form for Deleting Group
 */
class CRM_Custom_Form_DeleteGroup extends CRM_Core_Form {

    /**
     * the group id
     *
     * @var int
     */
    protected $_id;

    /**
     * The title of the group being deleted
     *
     * @var string
     */
    protected $_title;

    /**
     * set up variables to build the form
     *
     * @return void
     * @acess protected
     */
    function preProcess( ) {
        $this->_id    = $this->get( 'id' );
        
       
        $defaults = array( );
        $params   = array( 'id' => $this->_id );
        CRM_Core_BAO_CustomGroup::retrieve( $params, $defaults );
        $this->_title = $defaults['title'];
        $this->assign( 'name' , $this->_title );
        
        CRM_Utils_System::setTitle( ts('Confirm Custom Group Delete') );
    }

    /**
     * Function to actually build the form
     *
     * @return None
     * @access public
     */
    public function buildQuickForm( ) {

        $this->addButtons( array(
                                 array ( 'type'      => 'next',
                                         'name'      => ts('Delete Custom Group'),
                                         'isDefault' => true   ),
                                 array ( 'type'       => 'cancel',
                                         'name'      => ts('Cancel') ),
                                 )
                           );
    }

    /**
     * Process the form when submitted
     *
     * @return void
     * @access public
     */
    public function postProcess( ) {
        $group = & new CRM_Core_DAO_CustomGroup();
        $group->id = $this->_id;
        $group->find();
        $group->fetch();
        $wt = CRM_Utils_Weight::delWeight('CRM_Core_DAO_CustomGroup', $this->_id);
        if (CRM_Core_BAO_CustomGroup::deleteGroup( $this->_id)) {
            CRM_Core_Session::setStatus( ts('The Group "%1" has been deleted.', array(1 => $group->title)) );        
        } else {
            CRM_Core_Session::setStatus( ts('The Group "%1" has not been deleted! You must Delete all custom fields in this group prior to deleting the group', array(1 => $group->title)) ); 
            CRM_Utils_Weight::correctDuplicateWeights('CRM_Core_DAO_CustomGroup');       
        }
   }
}

?>
