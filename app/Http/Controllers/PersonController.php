<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //Memebuat attribute Name
    private $name = "Ruby Ilham Fadilah";
    private $nrp = "190914033";

    // Membuat Methode Index
    public function index() {
        //mengembalikan nilai attribute name
        return $this->name . " " . $this->nrp;
    }
    public function show($param){
        //Merubah Attribute name
        $this->name = $param;
        return @$this->name;
    }
}
