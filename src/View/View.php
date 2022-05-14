<?php

namespace Mvcnan\View;

class View{

    public static function make($view, $params = []){
        $baseContent = self::getBaseContent();
        $viewContent = self::getViewContent($view, params: $params);

        echo str_replace('{{ content }}', $viewContent, $baseContent);

    }


    protected static function getBaseContent(){
        ob_start();
        include base_path(). 'views/layouts/main.php';
        return ob_get_clean();
    }

    protected static function getViewContent($view, $isError = false, $params = []){
        $path = $isError ? view_path(). '/errors': view_path();

        if(str_contains($view, '.')){
            $views = explode('.', $view);

            foreach ($views as $view) {
                if (is_dir($path . $view)) {
                    $path = $path. $view. '/';
                }
            }

            return $view = $path. end($views). '.php';
        }
    }
}