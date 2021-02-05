<?php

namespace App\Http\Controllers;

use App\Content;
use App\Field;
use App\MyTranslator;
use App\Work;

class PageController extends Controller
{
    public function index($locale = null)
    {
        if (!$locale)
            $locale = 'ru';

        app()->setLocale($locale);
        $data['locale'] = $locale;

        $content = [];
        $contents = Content::all();
        if ($locale == 'en') {
            $translation = MyTranslator::where('table_name', 'contents')->get();
            foreach ($contents as $item) {
                $tr = $translation->where('foreign_key', $item->id)->first();
                $content[$item->key] = $tr ? $tr->value : null;
            }
        } else
            $content = $contents->pluck('value', 'key')->all();

        $data['content'] = $content;


        $worksAll = Work::all();
        $i = 0;
        $works = [];
        $chunk = [];
//        ['download_link']
        foreach ($worksAll as $item) {
            $i++;
            $chunk[] = (object)[
                'link' => $item->link ? json_decode($item->link)[0]->download_link : null,
                'name' => $item->name,
                'description' => $item->description,
            ];

            if($i > 8) {
                $i = 0;
                $works[] = $chunk;
                $chunk = [];
            }
        }
        $data['works'] = $works;
        return view("pages.index", $data);
    }
}
