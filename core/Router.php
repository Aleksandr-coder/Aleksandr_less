<?php

//Создать роутер. Подключить контроллеры Home, About, Gallery. В случае отсутствия нужных контроллеров подключать контроллер 404 страницы. Разработать механизм подключения метода класса.

//Задание со звездочкой - разделить проект на зону админ и публичную зону

namespace Core;
use App\controllers\Error404;

class Router
{
    public function run()
    {
       $url = !empty($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : '/';
        $config = require '../config/routes.php';
        
        if(array_key_exists($url, $config)){
            $q = explode('@', $config[$url]);
            $className = $q[0];
            $methodName = $q[1];
        }else{
            $className = 'Error404()';
            $methodName = 'error';
        }

        $className = '\App\controllers\\' . $className;
        //Создание обьекта
        if(class_exists($className)){
            $classObj = new $className();
        }
        else{
            $classObj = new Error404();
        }
        //Вызов метода
        if(method_exists($classObj, $methodName)){
            $classMetod = $methodName;
        } else{
            $classMetod = 'error';
        }
        $classObj -> $classMetod();
    }
}
