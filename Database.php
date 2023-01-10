<?php

class Database {
    const DATABASE_HOST = 'database:3306';
    const DATABASE_USERNAME = 'advertisementsUser';
    const DATABASE_PASSWORD = 'advertisementsPassword';
    const DATABASE_DB = 'advertisements';


    public static function connection(): mysqli
    {
        return new mysqli(self::DATABASE_HOST, self::DATABASE_USERNAME, self::DATABASE_PASSWORD, self::DATABASE_DB );
    }
}
