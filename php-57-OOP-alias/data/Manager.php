<?php

namespace Data\One {

    class Manager
    {
        var $nama;
        function sayHello(?string $name)
        {
            echo "Hi, $name i'am " . $this->nama . "\n\n";
        }
    }
}

namespace Data\Two {

    class Manager
    {
    }
}

// namespace tidak boleh mix dengan tanpa bracket / {}