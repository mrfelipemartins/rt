<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class IndexController extends Controller
{
    public function index() {
      return view ('site.index');
    }
    public function quemsomos() {
      $page = Page::where('slug', 'quem-somos')->first();
      return view('site.quemsomos')->with('page', $page);
    }
    public function trabalheconosco() {
      $page = Page::where('slug', 'trabalhe-conosco')->first();
      return view('site.trabalheconosco')->with('page', $page);
    }
    public function orcamento() {
      $page = Page::where('slug', 'orcamento')->first();
      return view('site.orcamento')->with('page', $page);
    }
    public function contato() {
      $page = Page::where('slug', 'contato')->first();
      return view('site.contato')->with('page', $page);
    }
}
