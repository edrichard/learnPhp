<?php

/**
 * Description of LoggerFactory
 *
 * @author edrichard
 */
class LoggerFactory {
    public static function create($type)
    {
        if($type == "MySQL")
        {
            return MySQLLoger::getInstance();
        }
        else if($type == "File")
        {
            return FileLoger::getInstance();
        }
    }
}
