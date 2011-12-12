<?php
$HOST = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DB = 'oxygen1.1';

$link = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB) or die(mysqli_connect_error());
function executeSelectQuery($query)
{
    $result = mysqli_query($GLOBALS['link'], $query) or die(mysqli_error($GLOBALS['link']));
    while($row=mysqli_fetch_array($result))
    {
        $returnArray[] = $row;
    }
    return $returnArray;
}
function executeInsertQuery($query)
{
    return mysqli_query($GLOBALS['link'], $query) or die(mysqli_error($GLOBALS['link']));
}
function executeDeleteQuery($query)
{
    return mysqli_query($GLOBALS['link'], $query) or die(mysqli_error($GLOBALS['link']));
}
function executeUpdateQuery($query)
{
    return mysqli_query($GLOBALS['link'], $query) or die(mysqli_error($GLOBALS['link']));
}
?>
