#!/usr/bin/env php
<?php

/** 
 *  The MIT License (MIT)
 *  Copyright (c) 2015 Mohannad Chebib
 *	Documentation & Credits on Github
 *	https://github.com/mchebib/git-dyno-htaccess
 */

define('ROOTPATH', __DIR__);
$data  = "";

//  Start editing here
//  Add a DOT "." then your PHP string .. and end the line with line break "\n" <-- this is important!

$data .=  "# RewriteEngine on\n"
		. "# RewriteCond %{HTTP_HOST} ^example\.com [NC]\n"
		. "# RewriteRule ^(.*)$ http://www.example.com/$1 [L,R=301,NC]\n"
		. "# php_value auto_prepend_file " . ROOTPATH . "/prepend.php\n"

; // Don't forget to end the statement, so things don't get REALLY wrong.

//  Stop editing here

/** 
 *	That's it.. Don't edit below this line.
 *	The below function will re-create the .htaccess file
 */

file_put_contents('.htaccess', $data);
