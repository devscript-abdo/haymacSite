<?php

namespace App\Traits;

trait InterfaceHandler
{


    public function getModel($modelName)
    {
        return app("App\\Repository\\{$modelName}\\{$modelName}Interface");
    }
}
