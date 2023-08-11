<?php 

namespace App\Services\CRUD;


class Create{
       
    public function create_model($model, $data){
        $model::create($data);
        return redirect()->back();
    }

}