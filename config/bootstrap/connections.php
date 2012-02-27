<?php

use lithium\data\Connections;

/**
 * Sets up Sqlite3 database for searching.
 */
Connections::add('default', array(
  'type'     => 'database',
  'adapter'  => 'Sqlite3',
  'database' => dirname(dirname(dirname(__FILE__))) . '/resources/data/symbols.db',
));