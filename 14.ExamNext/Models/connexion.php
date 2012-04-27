<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function dbconnect()
{
    static $connect = null;
    if ($connect === null) {
        $connect = mysql_connect('127.0.0.1', 'root', 'alonso');
        mysql_select_db('recette');
    }
    return $connect;
}
function dbclose($connect)
{
    mysql_close($connect);
}
?>
