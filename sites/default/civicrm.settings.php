<?php
/**
 * CiviCRM Configuration File - v1.8
 */

/**
 * Content Management System (CMS) Host:
 *
 * CiviCRM can be hosted in either Drupal or Joomla.
 * 
 * Settings for Drupal 5.1:
 *      define( 'CIVICRM_UF'        , 'Drupal' );
 *      define( 'CIVICRM_UF_VERSION', '5.1' );
 *      define( 'CIVICRM_UF_URLVAR' , 'q'  );
 *
 * For Drupal 4.7.x, same as above except
 *      define( 'CIVICRM_UF_VERSION', '4.7' );
 *
 * Settings for Joomla 1.0.x and 1.5.x:
 *      define( 'CIVICRM_UF'        , 'Joomla' );
 *      define( 'CIVICRM_UF_VERSION', '1' );
 *      define( 'CIVICRM_UF_URLVAR' , 'task'  );
 *
 * Settings for Standalone:
 *		define( 'CIVICRM_UF'	, 'Standalone');
 *		(Leave out CIVICRM_UF_VERSION.)
 *		define( 'CIVICRM_UF_URLVAR', 'q');
 *
 *
 */

define( 'CIVICRM_UF'               , 'Drupal'        );
define( 'CIVICRM_UF_VERSION'       , '5.1' );
define( 'CIVICRM_UF_URLVAR'        , 'q'  );

/**
 * Content Management System (CMS) Datasource:
 *
 * Update this setting with your CMS (Drupal or Joomla) database username, server and DB name. Comment it out if using CiviCRM standalone.
 * Datasource (DSN) format:
 *      define( 'CIVICRM_UF_DSN', 'mysql://cms_db_username:cms_db_password@db_server/cms_database?new_link=true');
 */

//define( 'CIVICRM_UF_DSN'           , 'mysql://DBUSER:PASSWORD@HOSTNAME/DATABASE?new_link=true' );
define( 'CIVICRM_UF_DSN'           , 'mysql://voir2admin:sql2Serv@db-mysql5.atof.net/voir2?new_link=true' );

/** 
 * Content Management System (CMS) User Table-name:
 *
 * Update the CIVICRM_UF_USERSTABLENAME if needed to match the name of the table
 * where the CMS user data is stored. Default for Drupal and Standalone installs is 'users'.
 * If you are using table-prefixing for the users table, you must enter the tablename
 * with the prefix. Default table name for Joomla - 'jos_users'. For Mambo - 'mos_users'.
 */

define( 'CIVICRM_UF_USERSTABLENAME', 'users' );

/**
 * CiviCRM Database Settings
 *
 * MySQL Version:
 * CiviCRM requires MySQL version 4.1 or greater.
 * IMPORTANT: Enter closest dot release to your installed version. 4.1, 5.0 are all valid examples. Do NOT
 * specify minor revision (second dot) - 4.1.2 is NOT a valid value for this setting. 
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
 
define( 'CIVICRM_MYSQL_VERSION', 4.1 );
define( 'CIVICRM_DSN'          , 'mysql://voir2admin:sql2Serv@db-mysql5.atof.net/voir2?new_link=true' );
define( 'CIVICRM_MYSQL_PATH', '/usr/bin/mysql' );

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
 * the CIVICRM_TEMPLATE_COMPILEDIR would be:
 *      define( 'CIVICRM_TEMPLATE_COMPILEDIR', '/var/www/htdocs/civicrm/templates_c/' );
 */

global $civicrm_root;

$civicrm_root = '/u/s/stu342/websites/https-www.peopleshistory.us/docroot/sites/all/modules/civicrm';
define( 'CIVICRM_TEMPLATE_COMPILEDIR', '/u/s/stu342/websites/https-www.peopleshistory.us/docroot/files/civicrm/templates_c/' );

/**
 * Site URLs:
 *
 * This section defines absolute and relative URLs to access the host CMS (Drupal or Joomla)
 * resources. Also you can use Standalone to access the host CMS resources. 
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
 
define( 'CIVICRM_UF_BASEURL'      , 'http://www.peopleshistory.us/' );

/**
 * SMTP Server Authentication Password:
 *
 * If your SMTP server requires authentication, you will enable that and enter the 
 * Username from Administer CiviCRM >> Global Settings >> SMTP. Then enter the
 * authentication Password below.
 *
 */
define( 'CIVICRM_SMTP_PASSWORD', '5th0fmay'    );

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
 * Joomla! Front-end Component Flag
 * If this configuration file is being used by a Joomla! front-end CiviCRM component
 * instance, set this value to 1.
 */

define( 'CIVICRM_UF_FRONTEND', 0 );

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

define( 'CIVICRM_SMARTYDIR'  , $civicrm_root . DIRECTORY_SEPARATOR . 'packages' . DIRECTORY_SEPARATOR . 'Smarty' . DIRECTORY_SEPARATOR );
define( 'CIVICRM_TEST_DIR'   , $civicrm_root . DIRECTORY_SEPARATOR . 'test-new'   . DIRECTORY_SEPARATOR );
define( 'CIVICRM_DAO_DEBUG'  , 0 );
define( 'CIVICRM_TEMPLATEDIR', $civicrm_root . DIRECTORY_SEPARATOR . 'templates'   );
define( 'CIVICRM_PLUGINSDIR' , $civicrm_root . DIRECTORY_SEPARATOR . 'CRM' . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'Smarty' . DIRECTORY_SEPARATOR . 'plugins' );

define( 'CIVICRM_GETTEXT_CODESET'    , 'utf-8'   );
define( 'CIVICRM_GETTEXT_DOMAIN'     , 'civicrm' );
define( 'CIVICRM_GETTEXT_RESOURCEDIR', $civicrm_root . DIRECTORY_SEPARATOR . 'l10n' );

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
