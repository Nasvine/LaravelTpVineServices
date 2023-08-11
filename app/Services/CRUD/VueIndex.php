<?php 

namespace App\Services\CRUD;


class VueIndex{
       
    public function index_vue_model($model, $vue_url){
        $variables = $model;

        return view($vue_url, compact('variables'));
    }

}