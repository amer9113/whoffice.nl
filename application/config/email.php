<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| Email configurations
| -------------------------------------------------------------------
*/
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'mail.whoffice.nl';
$config['smtp_user'] = 'no-reply@whoffice.nl';
$config['smtp_pass'] = 'noreply.asd123@#$';
$config['smtp_port'] = 25;
$config['validate'] = TRUE;
$config['mailtype'] = 'html';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'UTF-8';
$config['wordwrap'] = TRUE;
$config['smtp_timeout'] = 30;
$config['smtp_keepalive'] = TRUE;
$config['smtp_crypto'] = 'ssl';
$config['priority'] = 1;
$config['newline'] = "\r\n";