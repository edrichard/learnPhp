<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function dbconnect()
{
    static $connect = null;
    if ($connect === null) {
        $connect = mysql_connect('localhost', 'root', '');
        mysql_select_db('recette');
    }
    return $connect;
}
function dbclose($connect)
{
    mysql_close($connect);
}
?>
