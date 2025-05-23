<?php
// design pattern singleton
class Connexion
{

    private static ?PDO $connection = null;
    private static string $host = 'localhost';
    private static string $user = 'root';
    private static string $pass = ' ';
    private static string $base = 'pretphp';


    private function __construct() {}

    public static function getInstance(): PDO
    {
        if (self::$connection == null) {
            try {

                self::$connection = new PDO("mysql:host=" . self::$host . ";port=3306; dbname=" . self::$base . ";charset=utf8", self::$user, self::$pass, array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_CASE => PDO::CASE_LOWER,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ));
            } catch (Exception $e) {
                die("Database connection failed" . $e->getMessage());
            }
        }
        return self::$connection;
 
    }
}
