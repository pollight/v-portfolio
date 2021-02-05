<?php

namespace App\Http\Controllers;

use App\Content;

class PageController extends Controller
{
    public function index($locale = "ru")
    {
//        if (!$locale)
//            $locale = 'ru';
//
//        if(!in_array($locale, ["ru", "en"]))
//            return redirect()->to("/");
//
//        app()->setLocale($locale);
//
//        $content = Content::withTranslation($locale)->get();
//        dd($content);
//        $data['content'] = $content;
        return view("pages.index", []);
    }
}
