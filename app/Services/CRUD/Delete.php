<?php 

namespace App\Services\CRUD;


class Delete{
       
    public function delete_model($model, $id){
        if(!($model::whereId($id))){
            return redirect()->back();
        }

        $model::whereId($id)->delete();
        return redirect()->back();
    }

}