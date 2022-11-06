<?php 
class Session {
    public static $singleton=null;
    public static function singleton() : Session
    {
         if (static::$singleton ===null) {
            static::$singleton = new Session;
         }
    }
     return static::$singleton;
}