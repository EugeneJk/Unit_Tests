<?php
    class Unit{
        private $_fibonacciSequense = array();

        public function getFibonacciSequense($amount){
            $this->_fibonacciSequense = array();
            for($i = 0; $i < $amount; $i++){
                switch($i){
                    case 0: $this->_fibonacciSequense[] = 1; break;
                    case 1: $this->_fibonacciSequense[] = 2; break;
                    default: $this->_fibonacciSequense[] = $this->_fibonacciSequense[$i-1] + $this->_fibonacciSequense[$i-2];break;
                }
            }
            return $this->_fibonacciSequense;
        }
        public function getFibonacciEvenSum($amount){
            $this->getFibonacciSequense($amount);
            $sum = 0;
            foreach($this->_fibonacciSequense as $value){
                if($value % 2 == 0){
                    $sum += $value;
                }
            }
            return $sum;
        }
    }
?>
