<?php  // Moodle configuration file

 unset($CFG);
 global $CFG;
 $CFG = new stdClass();
 
 $CFG->dbtype    = 'mysqli';
 $CFG->dblibrary = 'native';
 $CFG->dbhost    = 'mysql-69948-0.cloudclusters.net';
 $CFG->dbname    = 'moodle';
 $CFG->dbuser    = 'admin';
 $CFG->dbpass    = 'QEsPiaFo';
 $CFG->prefix    = 'mdl_';
 $CFG->dboptions = array (
   'dbpersist' => 0,
   'dbport' => 16516,
   'dbsocket' => '16516',
   'dbcollation' => 'utf8mb4_unicode_ci',
 );
 
 $CFG->wwwroot   = 'https://moodletest2.herokuapp.com';
 $CFG->dataroot  = '/tmp';
 $CFG->admin     = 'admin';
 
 $CFG->directorypermissions = 0777;
 
 require_once(__DIR__ . '/lib/setup.php');
 
 // There is no php closing tag in this file,
 // it is intentional because it prevents trailing whitespace problems!'
