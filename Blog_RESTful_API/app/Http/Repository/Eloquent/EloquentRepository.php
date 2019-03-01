<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/02/2019
 * Time: 23:25
 */

namespace App\Http\Repository\Eloquent;


use App\Http\Repository\Repository;

Abstract class EloquentRepository implements Repository
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }
    abstract public function getModel();


    public function setModel(){
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }


    public function findById($id)
    {
        $result = $this->model->find($id);
        return $result;
    }

    public function create($data)
    {
        try{
            $object = $this->model->create($data);
        }catch (\Exception $e){
            return null;
        }
        return $object;
    }

    public function update($data, $object)
    {
        $object->update($data);
        return $object;
    }


    public function destroy($object)
    {
        $object->delete();
    }

}