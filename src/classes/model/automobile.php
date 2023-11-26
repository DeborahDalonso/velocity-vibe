<?php

namespace Model;

use Config\DB;

class Automobile
{
    private $table = 'automobiles';
    private $db;

    public $img;
    public $brand;
    public $model;
    public $plate;
    public $color;
    public $km;
    public $year;

    public function __construct()
    {
        $this->db = DB::getConnection();
    }

    public function getAll()
    {
        $automobiles = $this->db->getReference($this->table)->getSnapshot();
        $data = $automobiles->getValue();

        $automobiles = [];

        if ($data) {
            foreach ($data as $key => $value) {

                $automobile = new Automobile();
                $automobile->img = $value['img'];
                $automobile->brand = $value['brand'];
                $automobile->model = $value['model'];
                $automobile->plate = $value['plate'];
                $automobile->color = $value['color'];
                $automobile->km = $value['km'];
                $automobile->year = $value['year'];

                array_push($automobiles, $automobile);
            }
        }

        return $automobiles;
    }

    public function getById($plate)
    {
        $automobiles = $this->db->getReference($this->table . '/' . $plate)->getSnapshot();
        $data = $automobiles->getValue();

        if ($data) {

            $this->img = $data['img'];
            $this->brand = $data['brand'];
            $this->model = $data['model'];
            $this->plate = $data['plate'];
            $this->color = $data['color'];
            $this->km = $data['km'];
            $this->year = $data['year'];
        }

        return;
    }

    public function create($data)
    {
        $this->db->getReference($this->table . '/' . $data['plate'])->set($data);
        return true;
    }

    public function delete($plate)
    {
        $this->db->getReference($this->table . '/' . $plate)->remove();
        return true;
    }
}
