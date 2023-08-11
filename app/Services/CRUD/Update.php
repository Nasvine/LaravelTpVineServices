<?php 

namespace App\Services\CRUD;


class Update{
       
    public function update_model($model,$id, $data){
        if(!($model::whereId($id))){
            return redirect()->back();
        }

        $model::whereId($id)->update($data);
        return redirect()->back();
    }

}