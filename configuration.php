<?php
class AnSiteConfig {

   /* Server Settings */
   var $sitename = 'Anahita';
   var $client_domain = 'example.com';
   var $log_path = '/var/www/html/nectus/www/log';
   var $tmp_path = '/var/www/html/nectus/www/tmp';
   var $secret = '12d00d62088799fa5b0ca38f8bbd701568f7dea6a43f789cfc09582f105876d4';
   var $sef_rewrite = 1;

   /* Debuging Settings */
   var $debug = 1;
   var $error_reporting = 1;

   /* Database Settings */
   var $dbtype = 'mysql';
   var $host = 'localhost:3306';
   var $user = 'root';
   var $password = 'iloveu143';
   var $db = 'nectus';
   var $dbprefix = 'cn_';

   /* CORS Settings */
   var $cors_enabled = 0;
   var $cors_methods = 'POST, GET, DELETE, PUT, PATCH, OPTIONS';
   var $cors_headers = 'Content-Type';
   var $cors_credentials = 1;

   /* Mailer Settings */
   var $mailer = 'mail';
   var $mailfrom = 'noreply@example.com';
   var $fromname = 'Anahita Website';
   var $sendmail = '/usr/sbin/sendmail';

   /* SMTP Settings */
   var $smtp_user = '';
   var $smtp_pass = '';
   var $smtp_host = 'localhost';
   var $smtp_secure = 'ssl';
   var $smtp_port = 25;

}
