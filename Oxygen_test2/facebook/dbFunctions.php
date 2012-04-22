<!--
    Source     : Ariansah
    Description: Used to connect to Database and perform SQL query
-->
<?php

$HOST = 'localhost';
$USERNAME = 'oxygen';
$PASSWORD = 'uWrjTtuWNAzp9NtA';
$DB = 'oxygen';


$link = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DB) or die(mysqli_connect_error());

function executeSelectQuery($query) {
    // remove this comment and line 12 after troubleshooting
    //echo $query;

    $result = mysqli_query($GLOBALS['link'], $query) or die(mysqli_error($GLOBALS['link']));
    while ($row = mysqli_fetch_array($result)) {
        $returnArray[] = $row;
    }
    return $returnArray;
}

function executeInsertQuery($query) {
    // remove this comment and line 23 after troubleshooting
    //echo $query;

    return mysqli_query($GLOBALS['link'], $query) or die(mysqli_error($GLOBALS['link']));
}
function executeUpdateQuery($query) {
    // remove this comment and line 23 after troubleshooting
    //echo $query;

    return mysqli_query($GLOBALS['link'], $query) or die(mysqli_error($GLOBALS['link']));
}
?>
