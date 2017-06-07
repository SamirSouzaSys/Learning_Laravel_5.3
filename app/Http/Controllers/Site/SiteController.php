<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
  public function __construct()
  {
//    $this->middleware('auth');
//    $this->middleware('auth')
//      ->only([
//        'contato',
//        'categoria'
//    ]);
//    $this->middleware('auth')
//                    ->except([
//                      'index',
//                      'contato'
//                    ]);
  }

  public function index()
  {
    $title = 'Titulo teste';

    $xss = '<script> alert("Ataque XSS")</script>';
//    return view('teste',["teste" => $teste]);
    return view('site.home.index',compact('title','xss') );
  }

  public function contato()
  {
    return view('site.contact.index');
  }

  public function categoria($id)
  {
    return "Listagem dos posts da categoria: $id";
  }

  public function categoriaOp($id = 1)
  {
    return "Listagem dos posts da categoria OPCIONAL: $id";
  }
}
