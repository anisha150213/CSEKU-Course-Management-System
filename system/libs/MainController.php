<?php

class MainController
{
    protected $load = array();
    public function __construct()
    {
        $this->load = new Load();
    }
}