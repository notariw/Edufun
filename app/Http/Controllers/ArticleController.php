<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Writer;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){
        $articles = Article::latest()->take(6)->get();

        return view('home', [
            'title' => 'Home',
            'articles' => $articles
        ]);
    }

    public function showCategories()
    {
        return view('categories', [
            'title' => 'Categories',
            'categories' => ['Interactive Multimedia', 'Software Engineering']
        ]);
    }

    public function showByCategory($categoryName)
    {
        $articles = Article::where('category', $categoryName)->get();

        return view('category_articles', [
            'title' => $categoryName,
            'articles' => $articles
        ]);
    }

    public function showDetail(Article $article)
    {
        return view('detail', [
            'title' => $article->title,
            'article' => $article
        ]);
    }
}
