<?php
    class Unit
    {
        private $_primes = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157);

        public function getMaxPrime($limit)
        {
            foreach($this->_primes as $index => $value){
                if($value > $limit){
                    return $this->_primes[$index-1];
                }
            }
	    return 0;
        }

        public function getLargestPrimeFactor($value)
        {
            for($i = 1; $i < $value; $i++){
                $limit = $value/$i;
                $largestPrimeFactor = $this->getMaxPrime($limit);
                if($limit == $largestPrimeFactor){
                    return $largestPrimeFactor;
                }
            }
            
            return -1;
        }
    }
?>
