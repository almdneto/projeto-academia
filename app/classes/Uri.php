<?php

namespace app\classes;



class Uri{
    public static function uri(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // pega a uri sem pegar oq é passado pelo get
    }
}