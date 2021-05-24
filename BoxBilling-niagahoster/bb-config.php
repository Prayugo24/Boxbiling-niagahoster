<?php 
return array (
  'debug' => false,
  'salt' => 'f44369b2cdcfb5493580464f4dd4d05d',
  'url' => 'http://boxbiling.loc/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => true,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/usr/local/var/www/kerja/projeck_self/BoxBilling/bb-data',
  'path_logs' => '/usr/local/var/www/kerja/projeck_self/BoxBilling/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'localhost',
    'name' => 'niagahoster',
    'user' => 'root',
    'password' => 'qwerty12345',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/usr/local/var/www/kerja/projeck_self/BoxBilling/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);