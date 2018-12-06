<?php

class DatetimeTool {

        /**
        * @param str => $formato_final = formato de saída
        */
        public function now(string $formato_final = 'Y-m-d H:i:s'){
            return (new DateTime('now'))->format($formato_final);
        }
    }