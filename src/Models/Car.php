<?php


use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    private $name;
    private $color;
    private $price;
    private $length;
    private $weight;
    private $max_peed;


        public function setName($name) {
            $this->name = $name;
            return $this;
        }

        public function getName() {
            return $this->name;
        }
       
        public function setColor($color) {
            $this->color = $color;
            return $this;
        }       
       
        public function getColor() {
            return $this->color;
        }

        public function setPrice($price) {
            $this->price = $price;
            return $this;
        }       
       
        public function getPrice() {
            return $this->price;
        }

         public function setLength($length) {
            $this->length = $length;
            return $this;
        }

        public function getLength() {
            return $this->length;
        }
       
        public function setWeight($weight) {
            $this->weight = $weight;
            return $this;
        }       
       
        public function getWeight() {
            return $this->weight;
        }

        public function setMax_speed($max_speed) {
            $this->max_speed = $max_speed;
            return $this;
        }       
       
        public function getMax_speed() {
            return $this->max_speed;
        }


}
