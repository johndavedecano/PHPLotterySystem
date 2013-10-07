<?php
class Twig {
    protected static $twig;
    public function __construct(){
        Twig_Autoloader::register();
    }
    public static function get()
    {
        
        $loader = new Twig_Loader_Filesystem(BASE_PATH.'/views');
        self::$twig = new Twig_Environment($loader, array(
            'cache' => BASE_PATH.'/cache',
            'debug' => true,
        ));
        self::$twig->addGlobal("base_url",BASE_URL);
        self::$twig->addGlobal("assets_url",ASSETS_URL);
        self::$twig->addGlobal("flash",$_SESSION['slim.flash']);
        return self::$twig;
    }
}