<?php
//ArticleController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($page)
    {
        return ('Halaman artikel dengan id ').$page;
    }
}
