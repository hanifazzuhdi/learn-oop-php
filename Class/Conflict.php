<?php

// jika didalam file terdapat 2 class penulisan namespace seperti kode dibawah, tetapi biasanya dalam 1 file hanya ada satu class jadi namespace ditulis tanpa 

namespace Class\Conflict1 {
    class Conflict
    {
        public function __construct()
        {
            echo "ini conflict 1" . PHP_EOL;
        }
    }
}

namespace Class\Conflict2 {
    class Conflict
    {
        public function __construct()
        {
            echo "ini conflict 2" . PHP_EOL;
        }
    }
}
