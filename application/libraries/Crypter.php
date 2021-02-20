<?php

class Crypter
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }
}
