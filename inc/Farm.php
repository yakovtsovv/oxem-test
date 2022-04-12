<?php

require 'inc/Animal.php';

class Farm {

    public $animalsArray = [];
    public $productStorage = [];

    //Добавление животных
    public function addAnimal($animalsArray){
        foreach ($animalsArray as $name => $countAnimal) {
            $animalLowercaseName = strtolower($name);
            $animal = ucfirst($animalLowercaseName);
            for ($i = 1; $i <= $countAnimal; $i++) {
                $this->animalsArray["$animalLowercaseName"][] = new $animal();
            }
        }
    }

    //Получаем все существующие объекты животных
    public function getCountAnimal(){
        echo "Количество животных на ферме:";
        echo '<pre>';
        print_r($this->animalsArray);
        echo '</pre>';
    }

    //Производим сборку продукции
    public function collectProducts($time){
        for($i = 0; $i < $time; $i++){
            foreach ($this->animalsArray as $key => $item) {
                $productStorage = 0;
                foreach ($item as $value) {
                    $productStorage += $value->getProducts();
                }
                $this->productStorage["$key"] = $productStorage;
            }
        }
    }
}
