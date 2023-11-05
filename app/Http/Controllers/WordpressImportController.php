<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Spatie\Feed\Feed;

class WordpressImportController extends Controller
{
    public function import()
    {
        // $xmlFile =public_path('posts.xml');
        // $xml = simplexml_load_file($xmlFile);
        // foreach ($xml->channel->item as $item) {
        //     if(!Post::query()->where('title',$item->title)->exists() && $item->content){
        //         $post = new Post();
        //         $post->title = (string) $item->title;
        //         $post->content = $item->content;
        //         $post->save();
        //     }
        // }
    }   
}
