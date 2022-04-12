<?php

class Chicken extends Animal {

    public function getProducts(){
        return mt_rand(0, 1);
    }
}
