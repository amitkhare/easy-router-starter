<?php

namespace App\Controllers;

use App\Models\User;

class PageController extends BaseController {


   public function home(){
      // dd(User::find(1));
      echo $this->view->render('home.twig',[]);

   }


}