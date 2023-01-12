<?php

namespace Core;

class Render

{
    const TEST = 'test';
    public static function render( string $viewName,array $data = []): void
    {
        extract($data);
        include __DIR__ . '/../public/views/' . $viewName;
        //include '../public/views/' . $viewName;
    }
}

