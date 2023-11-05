<?php

use App\Models\Category;

function categories(){
    return (new Category())->getAll();
}