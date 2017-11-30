<?php
/*
Plugin Name: WP Swift: Security Fixes
Plugin URI: https://github.com/wp-swift-wordpress-plugins/wp-swift-security-fixes
Description: Various security fixes for WordPress
Version: 1
Author: Gary Swift
Author URI: https://github.com/wp-swift-wordpress-plugins
License: MIT
*/

/*
Plugins and themes file editor is a very convenient tool because it enables you to make quick changes without the need to use FTP. Unfortunately it's also a security issue because it not only shows PHP source but it also enables the attacker to inject malicious code in your site if he manages to gain access to the admin.
*/
define('DISALLOW_FILE_EDIT', true);


/*
By default on failed login attempts WordPress will tell you whether username or password is wrong. An attacker can use that to find out which usernames are active on your system and then use brute-force methods to hack the password.

Solution to this problem is simple. Whether user enters wrong username or wrong password we always tell him "wrong username or password" so that he doesn't know which of the two is wrong.
*/
function wrong_login() {
  return 'Wrong username or password.';
}
add_filter('login_errors', 'wrong_login');