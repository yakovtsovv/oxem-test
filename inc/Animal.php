<?php

abstract class Animal{

    protected $id;

    public function __construct(){
        $this->id = uniqid();
    }

    public function getId(){
        return $this->id;
    }

    public abstract function getProducts();
}
