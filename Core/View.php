<?php

namespace Core;

/**
 * View
 *
 */
class View
{

    /**
     * Render a view file
     *
     * @param string $view  The view file
     *
     * @return void
     */
    public static function render($view, $arg = [])
    {
        extract($arg, EXTR_SKIP); //  EXTR_SKIP : Lors d'une collision, ne pas réécrire la variable existante.

        $file = "../App/Views/$view";  // relative to Core directory

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }
}
