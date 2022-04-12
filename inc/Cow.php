<?php

class Cow extends Animal {

    public function getProducts(){
        return mt_rand(8, 12);
    }
}
