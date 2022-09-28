<?php
    class warnet{
        public $harga="6000";

        public function __construct()
        {
            echo "ini berasal dari consrtuct warnet <br/>";
        }
        public function __destruct()
        {
            echo "ini berasal dari destruct warnet";
        }
    }
        $warnet = new warnet();