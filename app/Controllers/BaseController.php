<?php

namespace App\Controllers;

class BaseController {
    
    public function __construct($vars=[]) {
		foreach ($vars as $key => $value) {
			$this->$key= $value;
		}
	}
	
}