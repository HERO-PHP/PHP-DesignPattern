<?php
	
    /*
     * PHP Design Pattern——Singleton Pattern
     */

    class SingletonPattern {

        private static $_obj;

        //Create object not allowed
        private function __construct() {
            //[private -> public] You can choose a friendly reminder
        }
        
        //Clone object is not allowed
        private function __clone() {
            //[private -> public] You can choose a friendly reminder
        }

        public static function obj() {
            //Reference instdnceof usage
            if(!(self::$_obj instanceof self))
            {
                self::$_obj = new self;
            }
            
            return self::$_obj;
            
        }
        
        public function test() {
            return 'TEST';
        }
        
    }
    
    $obj    = SingletonPattern::obj();
    $res    = $obj->test();
    var_dump($res);exit;
    
?>