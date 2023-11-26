<?php

namespace Config;

use Kreait\Firebase\Factory;

class DB
{
    private static $database = null;

    public static function getConnection()
    {
        if (self::$database === null) {
            $factory = (new Factory())->withDatabaseUri('https://velocity-vibe-34bf4-default-rtdb.firebaseio.com/');
            self::$database = $factory->createDatabase();
        }

        return self::$database;
    }
}
