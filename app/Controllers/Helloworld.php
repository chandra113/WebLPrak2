<?php namespace App\Controllers;

class Helloworld extends BaseController {
    
    public function index($name, $npm){
        // echo $this->name;
        echo $name ."<br>";
        echo $npm ."<br>";
        // echo "Hello Chandra"
    }

    public function show(){
        echo "Achmad Kurnia Chandra" ."<br>";
        echo "1817051070";
    }
}