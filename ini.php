<?php
/*
It's not wise to disclose the exact PHP version you're using because it makes the job of attacking your site much easier.

If you have access to php.ini file locate

expose_php = on
and change it to:

expose_php = off
*/

/*
Allowing anyone to view all files in the uploads folder just by point the browser to it will allow them to easily download all your uploaded files. It's a security and a copyright issue.

To fix the problem open .htaccess and add this directive into it:

Stop users being able to list directories

Options -Indexes
*/