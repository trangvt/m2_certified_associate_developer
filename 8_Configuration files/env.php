<?php
return array (
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => '63d409380ccb1182bfb27c231b732f05'
    ]
        'db' => 
        array (
            'connection' => 
            array (
      'indexer' => 
      array (
        'host' => 'localhost',
        'dbname' => 'urbanfox_malay',
        'username' => 'root',
        'password' => 'root',
        'active' => '1',
        'persistent' => NULL,
      ),
      'default' => 
      array (
        'host' => 'localhost',
        'dbname' => 'urbanfox_malay',
        'username' => 'root',
        'password' => 'root',
        'active' => '1',
        'profiler' => 1,
      ),
      'checkout' => 
      array (
        'host' => 'localhost',
        'dbname' => 'urbanfox_malay',
        'username' => 'root',
        'password' => 'root',
        'model' => 'mysql4',
        'engine' => 'innodb',
        'initStatements' => 'SET NAMES utf8;',
        'active' => '1',
      ),
      'sales' => 
      array (
        'host' => 'localhost',
        'dbname' => 'urbanfox_malay',
        'username' => 'root',
        'password' => 'root',
        'model' => 'mysql4',
        'engine' => 'innodb',
        'initStatements' => 'SET NAMES utf8;',
        'active' => '1',
      ),
    ),
    'table_prefix' => '',
  ),
  'crypt' => 
  array (
    'key' => '8610ff4b3e0d9b1c5abab97e45341383',
  ),
  'resource' => 
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
    'checkout' => 
    array (
      'connection' => 'checkout',
    ),
    'sales' => 
    array (
      'connection' => 'sales',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'developer',
  'session' => 
  array (
    'save' => 'files',
  ),
  'cache_types' => 
  array (
    'config' => 1,
    'layout' => 1,
    'block_html' => 0,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'customer_notification' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'target_rule' => 1,
    'full_page' => 0,
    'translate' => 1,
    'config_webservice' => 1,
    'amasty_shopby' => 1,
    'compiled_config' => 1,
  ),
  'install' => 
  array (
    'date' => 'Sat, 30 Dec 2017 04:46:47 +0000',
  ),
  'system' => 
  array (
    'default' => 
    array (
      'dev' => 
      array (
        'debug' => 
        array (
          'debug_logging' => '1',
        ),
      ),
    ),
  ),
);
