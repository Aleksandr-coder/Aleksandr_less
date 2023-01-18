<?php

namespace App\controllers;

use App\models\Home as modelHome;
use Core\Render;

class Home extends Controller
{
    public string $tableName;
    public function index()
    {
        //$this->render('social/home.php');
        $model = new modelHome();
        $data['newKey'] = $model -> From();
        Render::render('social/home.php', $data);

    }
    public function addUsers()
    {   
        $data = $_POST;
        Render::render('social/registry.php');
         if(!empty($data['first_name']) && !empty($data['email']) && !empty($data['phone'])){
            try{
                $model = new modelHome();
                $model->addUsers($data);
                echo "<p class=\"successful\">user registration successful</p>";
                } catch(\Exception $e){
                    $errors[] = $e->getMessage();
                    $this->addUsers($errors);
                }
            }
            else{
                echo "<p class=\"error\">error registration</p>";
            } 
        }
    }