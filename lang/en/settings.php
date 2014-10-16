<?php

$lang['simplesaml_path']     			= 'The path of the simpleSAMLphp folder. Example: /var/www/simplesamlphp';
$lang['simplesaml_authsource']  	= 'The name of the authentication source you want to use. Example: default-sp (Set up authentication sources in simplesamlphp/config/authsources.php)';
$lang['simplesaml_uid'] 					= 'The SAML attribute that will be mapped to the Dokuwiki username. Example: uid';
$lang['simplesaml_mail']     			= 'The SAML attribute that will be mapped to the Dokuwiki mail. Example: mail';
$lang['simplesaml_name']     			= 'The SAML attribute that will be mapped to the Dokuwiki name. Example: name';
$lang['simplesaml_grps']        	= 'The SAML attribute that will be mapped to the Dokuwiki groups. Example: roles';
$lang['use_internal_user_store']  = 'Manage users in a separate file? This should be set to true if you are only using SAML for authentication.';
$lang['force_saml_login']  				= 'Hide the normal login form and redirect to the IdP?';