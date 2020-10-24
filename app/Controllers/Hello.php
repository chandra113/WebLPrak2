<?php namespace App\Controllers;

class Hello extends BaseController
{
	public function index($name, $npm)
	{
        //echo $this->name; #BaseController
        
        echo $name. "<br>";
        echo $npm. "<br>";
	}
    
	//--------------------------------------------------------------------
    // public function show()
    // {
    //     echo "Chan". "<br>";
    //     echo "dra";
    // }

    // public function global()
    // {
    //     echo ""
    // }
}