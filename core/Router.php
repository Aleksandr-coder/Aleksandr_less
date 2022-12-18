<?php

//Создать роутер. Подключить контроллеры Home, About, Gallery. В случае отсутствия нужных контроллеров подключать контроллер 404 страницы. Разработать механизм подключения метода класса.

//Задание со звездочкой - разделить проект на зону админ и публичную зону

namespace Core;
use App\controllers\Error404;

class Router
{
    public function run()
    {
        $arr = explode( '/', $_SERVER["REQUEST_URI"]);
        if (empty($arr[1])) {
            $arr[1] = 'home';
        }
        $className = '\App\controllers\\' . ucfirst($arr[1]);
            switch($arr[1]){
                case 'admin':
                    $className = '\App\controllers\admin\\' . ucfirst($arr[1]); 
                    if(class_exists($className)){
                        $classObj = new $className();
                    } else{
                        $classObj = new Error404();
                    }
                    if(empty($arr[2])){
                    $arr[2] = 'index';
                    }
                    if(method_exists($classObj, $arr[2])){
                        $classMetod = $arr[2];
                    } else{
                        $classMetod = 'error';
                    }
                break;
                case 'user':
                    $className = '\App\controllers\users\\' . ucfirst($arr[1]); 
                    if(class_exists($className)){
                        $classObj = new $className();
                    } else{
                        $classObj = new Error404();
                    }
                    if(empty($arr[2])){
                    $arr[2] = 'index';
                    }
                    if(method_exists($classObj, $arr[2])){
                        $classMetod = $arr[2];
                    } else{
                        $classMetod = 'error';
                    }
                break;
               default:
                    $className = '\App\controllers\\' . ucfirst($arr[1]);
                    if(class_exists($className)){
                        $classObj = new $className();
                    } else{
                        $classObj = new Error404();
                    }
                    if(empty($arr[2])){
                    $arr[2] = 'index';
                    }
                    if(method_exists($classObj, $arr[2])){
                        $classMetod = $arr[2];
                    } else{
                        $classMetod = 'error';
                    }
                break;
                }  
        $classObj -> $classMetod();
    }
}
