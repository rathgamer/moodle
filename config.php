<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-54-166-114-48.compute-1.amazonaws.com');
$CFG->dbname    = getenv('d8of24vrcadi2k');
$CFG->dbuser    = getenv('cgdwzsxuormssg');
$CFG->dbpass    = getenv('8cbb3be04137d5b5ae4acd97003c2d3b7805039c56de219cc0b472d60abf6ba0');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('/tmp');
$CFG->dataroot  = getenv('http://psg-infinity.herokuapp.com');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
