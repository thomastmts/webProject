<?php


use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //protected $primaryKey ='id';    
    private $name;
    private $color;
    private $price;
    private $length;
    private $weight;
    private $max_peed;
    private $horsepower;
    private $option;
    private $img;

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

 		public function setHorsepower($horsepower) {
            $this->horsepower = $horsepower;
            return $this;
        }       
       
        public function getHorsepower() {
            return $this->horsepower;
        }
        public function setMax_speed($max_speed) {
            $this->max_speed = $max_speed;
            return $this;
        }       
       
        public function getMax_speed() {
            return $this->max_speed;
        }
        public function setOption($option) {
            $this->option = $option;
            return $this;
        }       
       
        public function getOption() {
            return $this->option;
        }
   		public function setImg($img) {
            $this->max_speed = $img;
            return $this;
        }       
       
        public function getImg() {
            return $this->img;
        }

}
