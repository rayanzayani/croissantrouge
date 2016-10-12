<?php

/* Site */
$registry->setSetting ( 'BASE_URL', 'http://localhost/croissant/' );
$registry->setSetting ( 'TIMEZONE', 'Africa/Tunis' );

/* Base */
$registry->setSetting ( 'DB_HOST', 'localhost' );
$registry->setSetting ( 'DB_NAME', 'croissant' );
$registry->setSetting ( 'DB_USER', 'root' );
$registry->setSetting ( 'DB_PASS', '' );
$registry->setSetting ( 'DB_PREFIX', '' );
$registry->setSetting ( 'LOGGING', true );

/* Core */
$registry->setSetting ( 'BASE_CONTROLLER', 'home' );
$registry->setSetting ( 'BASE_ACTION', 'index' );

/* Template */
$registry->setSetting ( 'SKIN', 'default' );
$registry->setSetting ( 'SKIN_ADMIN', 'admin' );
$registry->setSetting ( 'TPL_EXT', 'tpl.php' );
$registry->setSetting ( 'PHP_ENABLED', true );
$registry->setSetting ( 'DEBUG', true );
$registry->setSetting ( 'PATH_REPLACE', false );

/* Auth */
$registry->setSetting ( 'auth_md5', true );
$registry->setSetting ( 'auth_tablename', 'utilisateur');
$registry->setSetting ( 'username_col', 'login');
$registry->setSetting ( 'password_col', 'mdp');
$registry->setSetting ( 'session_prefix', 'auth_');


