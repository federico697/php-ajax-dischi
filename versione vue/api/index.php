<?php 
// realizzo la struttura dell'api

//includo il database in questo file
include_once __DIR__ . '/../db/index.php';

header( 'Content-type: application/json' );

echo json_encode( $database );
?>