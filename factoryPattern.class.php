<?php
	
    /*
     * PHP Design Pattern——Simply introduce the factory model
     */

    //abstract -- Defining specifications
    abstract class FactoryPattern {
        
        abstract function selectTransport();
        
    }
    
    
    //Define a car factory
    class Car extends FactoryPattern {
        
        public function selectTransport() {
            
            return 'I choose to travel by car';
            
        }
    }
    
    //Define a train factory
    class Train extends FactoryPattern {
        
        public function selectTransport() {
            
            return 'I choose to travel by train';
            
        }
    }
    
    //Define a aircraft factory
    class Aircraft extends FactoryPattern {
        
        public function selectTransport() {
            
            return 'I choose to travel by aircraft';
            
        }
    }
    
    //Reflect the factory model
    class ShowFactory {
        
        public static function obj($param) {
            
            switch ($param) {
                case 'car':
                    return new Car();
                    break;
                case 'train':
                    return new Train();
                    break;
                case 'aircraft':
                    return new Aircraft();
                    break;
                default:
                    return new Car();
                    break;
            }
        }
    }
    
    $tran   = new ShowFactory();
    echo $tran->obj('train')->selectTransport();//You can not continue to deal with result,Strategy pattern can
    exit;
    
?>