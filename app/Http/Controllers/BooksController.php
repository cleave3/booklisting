<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function makeRequest($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }


    public function getBooks($pageno = 1)
    {
        $books = $this->makeRequest("https://www.anapioficeandfire.com/api/books?page=$pageno&pageSize=10");
        return $books ? success($books) : badRequest();
    }
}
