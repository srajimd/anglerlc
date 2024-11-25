<?php
namespace App\Error;

use Cake\Error\Renderer\WebExceptionRenderer;


class AppExceptionRenderer extends WebExceptionRenderer
{
    public function missingWidget($error)
    {
        $response = $this->controller->getResponse();

        return $response->withStringBody('Oops the page is missing.');
    }
}