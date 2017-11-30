<?php
/*
As with the WordPress version it's not wise to disclose the exact PHP version you're using because it makes the job of attacking your site much easier. This issue is not directly WP related but it definitely affects your site.

You'll most probably have to ask your hosting company to configure the HTTP server not to show PHP version info but you can also try adding these directives to the .htacces file:

<IfModule mod_headers.c>
  Header unset X-Powered-By
  Header unset Server
</IfModule>
*/