<?php

namespace Setsis;

class Autoloader
{
    public $diretorios = array();
    
    public function register()
    {
        spl_autoload_register(array($this,'loader'));
    }

    private function loader($className)
    {
        $class = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
       
        if (!empty($this->diretorios)) {
            foreach ($this->diretorios as $diretorio) {
                 $classPath = rtrim($diretorio, '/') . DIRECTORY_SEPARATOR . $class;
                 if (file_exists($classPath)) {
                     return include_once $classPath;
                 }
            }
        }
        
        if (file_exists($class))
            return include_once $class;
        
        $classPath = stream_resolve_include_path($class);
        if ($classPath !== false) {
            return include_once $classPath;
        }
        
        throw new \Exception("Arquivo {$class} não encontrado");
    }
}
