<?php

use Illuminate\Support\Facades\DB;

function baseUrl()
{
    return "http://127.0.0.1:8000/";
}
function getCategories($parent_id)
{
    return DB::table('categories')->where('parent_id', $parent_id)->orderBy('category_order', 'ASC')->limit(14)->get();
}