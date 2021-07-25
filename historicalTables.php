<?php
include('config.php');
$historicalTable = mysqli_query($link, "SELECT att_id, att_name, att_loc, att_date FROM attraction_logger;");
$tableRows = array();
while($i = mysqli_fetch_array($historicalTable) ) {
    $tableRows[] = $i ;
}
$historicalData = array(
    "data"            => $tableRows   // total data array
);
$fp = fopen('historicalTables.json', "w");
fwrite($fp, json_encode($historicalData));
fclose($fp);
?>