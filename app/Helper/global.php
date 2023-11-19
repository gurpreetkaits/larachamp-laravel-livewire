<?php

use App\Models\Category;
use Illuminate\Support\Facades\Date;

function categories(){
    return (new Category())->getAll();
}

function formatDate($date){
    return date('d M Y', strtotime($date));
}