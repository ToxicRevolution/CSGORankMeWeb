<?php
require_once('../../config.php');
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */


// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'name', 'dt' => 0 ),
    array( 'db' => 'steam', 'dt' => 1 ),
    array( 'db' => 'score', 'dt' => 2 ),
    array( 'db' => 'deaths', 'dt' => NULL),
    array( 'db' => 'kills', 'dt' => 3,
    'formatter' => function($d, $row){
      $deaths = $row['deaths'];
      if($deaths == 0){
        $deaths = 1;
      }
      $kd = round($row['kills']/$deaths, 2);
      return $kd;
      }
     ),
    array( 'db' => 'rounds_tr', 'dt' => NULL),
    array( 'db' => 'rounds_ct', 'dt' => NULL),
    array( 'db' => 'damage', 'dt' => 4,
    'formatter' => function($d, $row){
      $roundsTotal = $row['rounds_ct'];
      $roundsTotal += $row["rounds_tr"];
      if($roundsTotal == 0){
        return 0;
      }else{
        $damageTotal = $row["damage"];
        $ADR = round($damageTotal / $roundsTotal, 2);
        return $ADR;
      }
      }
    ),
    array( 'db' => 'steam', 'dt' => 5,
    'formatter' => function($d, $row){
          $button = "<a href='profile.php?steamID=" . $row['steam'] . "'><button type='button' class='btn btn-success'>Profile</button></a>";
          return $button;
      }
   )
);



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );
//var_dump($columns);
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
