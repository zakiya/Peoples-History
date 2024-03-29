<?php
/**
 * CiviCRM Configuration File - v2.0
 */

/**
 * Content Management System (CMS) Host:
 *
 * CiviCRM can be hosted in either Drupal or Joomla.
 * 
 * Settings for Drupal 5.1:
 *      define( 'CIVICRM_UF'        , 'Drupal' );
 *      define( 'CIVICRM_UF_VERSION', '5.1' );
 *
 * For Drupal 4.7.x, same as above except
 *      define( 'CIVICRM_UF_VERSION', '4.7' );
 *
 * Settings for Joomla 1.0.x and 1.5.x:
 *      define( 'CIVICRM_UF'        , 'Joomla' );
 *      define( 'CIVICRM_UF_VERSION', '1' );
 *
 * Settings for Standalone:
 *		define( 'CIVICRM_UF'	, 'Standalone');
 *		(Leave out CIVICRM_UF_VERSION.)
 *
 * You may have issues with images in CiviCRM. If this is the case, be sure
 * to update the CiviCRM Resource URL field (in Administer CRM: Global
 * Settings: Resource URLS) to your CiviCRM root directory.
 */

define( 'CIVICRM_UF'               , 'Drupal'        );

/**
 * Content Management System (CMS) Datasource:
 *
 * Update this setting with your CMS (Drupal or Joomla) database username, server and DB name. Comment it out if using CiviCRM standalone.
 * Datasource (DSN) format:
 *      define( 'CIVICRM_UF_DSN', 'mysql://cms_db_username:cms_db_password@db_server/cms_database?new_link=true');
 */

define( 'CIVICRM_UF_DSN'           , 'mysql://voices_admin:sql2Serv@localhost/voices?new_link=true' );

/**
 * CiviCRM Database Settings
 *
 * Database URL (CIVICRM_DSN) for CiviCRM Data:
 * Database URL format:
 *      define( 'CIVICRM_DSN', 'mysql://crm_db_username:crm_db_password@db_server/crm_database?new_link=true');
 *
 * Drupal and CiviCRM can share the same database, or can be installed into separate databases.
 *
 * EXAMPLE: Drupal and CiviCRM running in the same database...
 *      DB Name = drupal, DB User = drupal
 *      define( 'CIVICRM_DSN'         , 'mysql://drupal:YOUR_PASSWORD@localhost/drupal?new_link=true' );
 *
 * EXAMPLE: Drupal and CiviCRM running in separate databases...
 *      Drupal  DB Name = drupal, DB User = drupal
 *      CiviCRM DB Name = civicrm, CiviCRM DB User = civicrm
 *      define( 'CIVICRM_DSN'         , 'mysql://civicrm:YOUR_PASSWORD@localhost/civicrm?new_link=true' );
 *
 * MySQL Path:
 * This stores the installed path of mysql. You will need to verify and modify this value if you are
 * planning on using CiviCRMs built-in Database Backup utility. If you have shell access, you may be
 * able to query the path by using one of the following commands:
 * $ whereis mysql
 * $ type mysql
 *
 */
 
define( 'CIVICRM_DSN'          , 'mysql://voices_admin:sql2Serv@localhost/voices?new_link=true' );
define( 'CIVICRM_MYSQL_PATH', '%%mysqlPath%%' );

/**
 * File System Paths:
 *
 * $civicrm_root is the file system path on your server where the civicrm
 * code is installed. Use an ABSOLUTE path (not a RELATIVE path) for this setting.
 *
 * CIVICRM_TEMPLATE_COMPILEDIR is the file system path where compiled templates are stored.
 * These sub-directories and files are temporary caches and will be recreated automatically
 * if deleted.
 *
 * IMPORTANT: The COMPILEDIR directory must exist,
 * and your web server must have read/write access to these directories.
 *
 *
 * EXAMPLE - CivicSpace / Drupal:
 * If the path to the CivicSpace or Drupal home directory is /var/www/htdocs/civicspace
 * the $civicrm_root setting would be:
 *      $civicrm_root = '/var/www/htdocs/civicspace/modules/civicrm/';
 *
 * the CIVICRM_TEMPLATE_COMPILEDIR would be:
 *      define( 'CIVICRM_TEMPLATE_COMPILEDIR', '/var/www/htdocs/civicspace/files/civicrm/templates_c/' );
 *
 * EXAMPLE - Joomla Installations:
 * If the path to the Joomla home directory is /var/www/htdocs/joomla
 * the $civicrm_root setting would be:
 *      $civicrm_root = '/var/www/htdocs/joomla/administrator/components/com_civicrm/civicrm/';
 *
 * the CIVICRM_TEMPLATE_COMPILEDIR would be:
 *      define( 'CIVICRM_TEMPLATE_COMPILEDIR', '/var/www/htdocs/joomla/media/civicrm/templates_c/' );
 *
 * EXAMPLE - Standalone Installations:
 * If the path to the Standalone home directory is /var/www/htdocs/civicrm
 * the $civicrm_root setting would be:
 *      $civicrm_root = '/var/www/htdocs/civicrm/';
 *
 * the CIVICRM_TEMPLATE_COMPILEDIR might be:
 *      define( 'CIVICRM_TEMPLATE_COMPILEDIR', '/var/www/htdocs/civicrm/standalone/files/templates_c/' );
 */

global $civicrm_root;

#$civicrm_root = '/srv/www/sites/voices/dev/docroot/sites/all/modules/civicrm';
$civicrm_root = '/srv/www/clients/voices/dev/docroot/sites/all/modules/civicrm';
define( 'CIVICRM_TEMPLATE_COMPILEDIR', '/srv/www/clients/voices/dev/docroot/files/civicrm/templates_c/' );

/**
 * Site URLs:
 *
 * This section defines absolute and relative URLs to access the host CMS (Drupal or Joomla) resources.
 *
 * IMPORTANT: Trailing slashes should be used on all URL settings.
 * 
 *
 * EXAMPLE - Drupal Installations:
 * If your site's home url is http://www.example.com/drupal/
 * these variables would be set as below. Modify as needed for your install. 
 *
 * CIVICRM_UF_BASEURL - home URL for your site:
 *      define( 'CIVICRM_UF_BASEURL' , 'http://www.example.com/drupal/' );
 *
 * EXAMPLE - Joomla Installations:
 * If your site's home url is http://www.example.com/joomla/
 *
 * CIVICRM_UF_BASEURL - home URL for your site:
 * Administration site:
 *      define( 'CIVICRM_UF_BASEURL' , 'http://www.example.com/joomla/administrator/' );
 * Front-end site:
 *      define( 'CIVICRM_UF_BASEURL' , 'http://www.example.com/joomla/' );
 *
 * EXAMPLE - Standalone Installations:
 * If your site's home url is http://www.examle.com/civicrm/
 *
 * CIVICRM_UF_BASEURL - home URL for your site:
 *      define( 'CIVICRM_UF_BASEURL' , 'http://www.example.com/civicrm/standalone/' );
 */
 
define( 'CIVICRM_UF_BASEURL'      , 'http://voices/' );

/**
 * Multi-site Support
 *
 * CiviCRM uses Domain ID keys to allow you to store separate data sets for multiple sites
 * using the same codebase.
 *
 * Refer to the 'Multi-site Support' section of the Installation Guide for more info.
 */

define('CIVICRM_DOMAIN_ID' , 1 );

/**
 * 
 * Do not change anything below this line. Keep as is
 *
 */

$include_path = '.'        . PATH_SEPARATOR .
                $civicrm_root . PATH_SEPARATOR . 
                $civicrm_root . DIRECTORY_SEPARATOR . 'packages' . PATH_SEPARATOR .
                get_include_path( );
set_include_path( $include_path );

define( 'CIVICRM_TEST_DIR'   , $civicrm_root . DIRECTORY_SEPARATOR . 'test-new'   . DIRECTORY_SEPARATOR );

if ( function_exists( 'variable_get' ) && variable_get('clean_url', '0') != '0' ) {
    define( 'CIVICRM_CLEANURL', 1 );
} else {
    define( 'CIVICRM_CLEANURL', 0 );
}

// force PHP to auto-detect Mac line endings
ini_set('auto_detect_line_endings', '1');

// make sure the memory_limit is at least 32 MiB
$memLimitString = trim(ini_get('memory_limit'));
$memLimitUnit   = strtolower(substr($memLimitString, -1));
$memLimit       = (int) $memLimitString;
switch ($memLimitUnit) {
    case 'g': $memLimit *= 1024;
    case 'm': $memLimit *= 1024;
    case 'k': $memLimit *= 1024;
}
if ($memLimit >= 0 and $memLimit < 33554432) {
    ini_set('memory_limit', '32M');
}

?>