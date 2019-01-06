<?php
    namespace OpenNetworkTools\OpenConfig\Interfaces\Unit\Family\Inet;
        
    class Address {
    
        private $vrrpGroup;

        public function __construct(){
        }

        /**
         * @param $id
         * @return \OpenNetworkTools\OpenConfig\Interfaces\Unit\Family\Inet\Address\vrrpGroup
         */
        public function addVrrpGroup($id){
            $this->vrrpGroup[$id] = new \OpenNetworkTools\OpenConfig\Interfaces\Unit\Family\Inet\Address\vrrpGroup();
            return $this->vrrpGroup[$id];
        }

    }
?>