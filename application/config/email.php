<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| Email configurations
| -------------------------------------------------------------------
*/
$config['protocol'] = 'mail';
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_user'] = 'noreply.whoffice@gmail.com';
$config['smtp_pass'] = 'asdqwe123@#$';
$config['smtp_port'] = '465';
$config['validate'] = TRUE;
$config['mailtype'] = 'html';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'UTF-8';
$config['wordwrap'] = TRUE;
$config['smtp_timeout'] = 30;
$config['smtp_keepalive'] = TRUE;
$config['smtp_crypto'] = 'tls';
$config['newline'] = "\r\n";
$config['crlf'] = "\r\n";