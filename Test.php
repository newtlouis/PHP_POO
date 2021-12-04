<?php 


class Test
{
    public static const LOL = "Lil";

    static function register()
    {
        spl_autoload_register([
            __CLASS__, 'autoload'
        ]);
    }

    static function autoload($class)
    {
        // On récupère dans $class la totalité du namespace de la classe concernée (App\CLient\Compte)
        // on retire le namespace App\  
        
        $class = str_replace(__NAMESPACE__.'\\', '', $class);
        $class = str_replace('\\', '/', $class);
        $fichier = __DIR__ . '/' . $class . 'php';

        if(file_exists($fichier)){
            require_once $fichier;
        }
        else{
            echo 'loupé'
        }
    }
}

