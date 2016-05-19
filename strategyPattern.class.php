<?php
	
    /*
     * PHP Design Pattern——Simply introduce the strategy pattern
     */

    //interface -- Defining specifications
    interface StrategyPattern {
        
        function selectCar();
        function selectTrain();
        function selectAircraft();        
    }
    
    //Define class Tour
    class Tour implements StrategyPattern {
        
        public function selectCar() {
            
            return 'I choose to travel by car'; 
        }
        
        public function selectTrain() {
            
            return 'I choose to travel by train'; 
        }
        
        public function selectAircraft() {
            
            return 'I choose to travel by aircraft'; 
        }
    }
    
    //Define class 
    class Holidays implements StrategyPattern {
        
        public function selectCar() {
            
            return 'I chose to drive a car to go on vacation.';
        }
        
        public function selectTrain() {
            
            return 'I decided to go for a holiday on the train.';
        }
        
        public function selectAircraft() {
            
            return 'I decided to fly a plane to go on vacation.';
        }
    }
    
    //create obj
    class Go {
        
        private $obj    = '';
        
        public function obj($param) {
            
            $this->obj  = $param;
        }
        
        public function selectCar() {
            //You can continue to deal with result,Factory mode no
            return $this->obj->selectCar() .'====';
        }
        
        public function selectTrain() {
            //You can continue to deal with result,Factory mode no
            return $this->obj->selectTrain() .'====';
        }
        
        public function selectAircraft() {
            //You can continue to deal with result,Factory mode no
            return $this->obj->selectAircraft() .'====';
        }
    }
    
    $tran   = new Go();
    $tran->obj(new Holidays());
    echo $tran->selectTrain();echo "<br/>";
    
    $tran->obj(new Tour());
    echo $tran->selectAircraft();echo "<br/>";
    exit;
    
?>