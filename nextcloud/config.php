<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'oc1g1gjz2t5g',
  'passwordsalt' => 'McIAWKqrLEGU7Ma6yDHJ0dKrAySwPz',
  'secret' => 'YAnCz2OjNrs9+EN3YOhsvoncgWqyzXD9yWTeP3ieM8mdZzCZ',
  'trusted_domains' => 
  array (
    0 => 'localhost:8080',
	  1 => 'files.localserver.net',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'sqlite3',
  'version' => '14.0.4.2',
  'overwrite.cli.url' => 'http://localhost:8080',
  'dbname' => 'nextcloud',
  'dbhost' => 'localhost',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'installed' => true,
);
