<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\CuartospController;



class RecepcionController extends AppController

{
//
var $Cuartos;

	public function index()
    {
    	$this->Cuartos->index();

    }

}
