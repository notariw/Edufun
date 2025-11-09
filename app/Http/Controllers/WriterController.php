<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    //
    public function index()
    {
        $writers = Writer::all();

        return view('writers', [
            'title' => 'Our Writers',
            'writers' => $writers
        ]);
    }

    public function showDetail(Writer $writer)
    {
        return view('writer_detail', [
            'title' => 'Articles by ' . $writer->name,
            'writer' => $writer,
            'articles' => $writer->articles 
        ]);
    }
}
