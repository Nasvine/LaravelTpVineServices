<?php 

namespace App\Services\CRUD;


class VueCreate{
       
    public function create_vue_model($vue_url){
        #$variable = $model::all();

        return view($vue_url);
    }

}