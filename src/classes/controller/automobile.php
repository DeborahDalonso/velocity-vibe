<?php

namespace Controller;

use Model\Automobile as ModelAutomobile;
use Utils\View;
use Utils\Session;

class Automobile
{

    public function index()
    {
        try {
            $automobile = new ModelAutomobile();
            $automobiles = $automobile->getAll();

            $status = Session::retrieveAndClear();

            $view = "automobile/index";

            View::forge(
                $view,
                [
                    'automobiles' => $automobiles,
                    'status' => $status,
                    'title' => 'Home',
                    'jsFiles' => ['/assets/js/automobile/main.js'],
                    'cssFiles' => ['/assets/css/automobile/main.css']
                ]
            );
        } catch (\Error $e) {
            echo "<pre>";
            print_r($e);
            die;
        }
    }

    public function create()
    {
        $view = "automobile/create";
        View::forge($view, [
            'title' => 'Criar',
            'jsFiles' => ['/assets/js/automobile/form.js'],
            'cssFiles' => ['/assets/css/automobile/form.css']
        ]);
    }

    public function store()
    {
        try {
            $automobile = new ModelAutomobile();
            $automobile->create($_POST);

            Session::status('201', 'Item criado com sucesso!');
        } catch (\Error $e) {
            Session::status('402', 'Não foi possivel editar!');
        }

        header("Location: /automobile");
        exit;
    }

    public function edit($plate)
    {
        $automobile = new ModelAutomobile();
        $automobile->getById($plate);

        $view = "automobile/edit";
        View::forge(
            $view,
            [
                'automobile' => $automobile,
                'title' => 'Editar',
                'jsFiles' => ['/assets/js/automobile/form.js'],
                'cssFiles' => ['/assets/css/automobile/form.css']
            ]
        );
    }

    public function update()
    {
        try {
            $automobile = new ModelAutomobile();
            $automobile->create($_POST);

            Session::status('201', 'Item editado com sucesso!');
        } catch (\Error $e) {
            Session::status('402', 'Não foi possivel editar!');
        }

        header("Location: /automobile");
        exit;
    }

    public function delete($plate)
    {
        try {
            $automobile = new ModelAutomobile();
            $automobile->delete($plate);

            Session::status('201', 'Item deletado com sucesso!');
        } catch (\Error $e) {
            Session::status('402', 'Não foi possivel editar!');
        }

        header("Location: /automobile");
        exit();
    }
}
