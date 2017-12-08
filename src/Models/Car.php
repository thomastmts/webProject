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
    private $gps;
    private $sunroof;
    private $fridge;
    private $sport_line;
    private $lv;
    private $headed_seat;
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
   		public function setImg($img) {
            $this->max_speed = $img;
            return $this;
        }       
       
        public function getImg() {
            return $this->img;
        }

        public function setGps($gps) {
            $this->gps = $gps;
            return $this;
        }       
       
        public function getGps() {
            return $this->gps;
        }

        public function setSunroof($sunroof) {
            $this->sunroof = $sunroof;
            return $this;
        }       
       
        public function getSunroof() {
            return $this->sunroof;
        }
        public function setFridge($fridge) {
            $this->fridge = $fridge;
            return $this;
        }       
       
        public function getFridge() {
            return $this->fridge;
        }

        public function setSport_line($sport_line) {
            $this->sport_line = $sport_line;
            return $this;
        }       
       
        public function getSport_line() {
            return $this->sport_line;
        }
        public function setLv($lv) {
            $this->lv = $lv;
            return $this;
        }       
       
        public function getLv() {
            return $this->lv;
        }
        public function setHeaded_seat($headed_seat) {
            $this->headed_seat = $headed_seat;
            return $this;
        }       
       
        public function getHeaded_seat() {
            return $this->headed_seat;
        }

}
