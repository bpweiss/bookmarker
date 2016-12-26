<?php
$mySqlHost="localhost";
$mySqlUserName="admin";
$mySqlPassword="password";
$mySqlDatabaseName="bkmkmgrone";

//grab random string from http://www.sethcardoza.com/tools/random-password-generator/
$pw_salt = "MUmM_T^Inxmx8fmg";
$pw_pepper = "cU!A_9qp";

// header includes. Any global resources (css stylesheets, javascript libraries) to be added to all pages
$global_header_includes = '<!-- load global resources -->';
 
$global_header_includes .= '<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>';
$global_header_includes .= '<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>';
$global_header_includes .= '<link rel="stylesheet" type"text/css" href="css/foundation.min.css">';
$global_header_includes .= '<script src="js/vendor/modernizr.js"></script>';
$global_header_includes .= '<script src="framework.js"></script> ';
$global_header_includes .= '<link rel="stylesheet" type"text/css" href="style.css">';
$global_header_includes .= '<link rel="stylesheet" type="text/css" href="css/style-dailyscorecard.css">';

?>