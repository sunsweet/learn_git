<?php 
class Model
{
    public function create(array $data)
    {
        $model = new static($data);
        $model->save($data);
        return $model;
    }
    public function save()
    {
        echo "hello";
    }
}
