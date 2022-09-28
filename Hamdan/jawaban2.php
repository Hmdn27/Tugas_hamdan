<?php
    class tiket{
        public $harga="5000";

        public function __construct()
        {
            echo "ini berasal dari consrtuct warnet <br/>";
        }
        public function __destruct()
        {
            echo "ini berasal dari destruct warnet";
        }
    }
        $pesawat = new tiket();