<?php
namespace App\Error;

use Cake\Error\ErrorRendererInterface;
use Cake\Error\PhpError;

class CustomErrorRenderer implements ErrorRendererInterface
{
    public function write(string $out): void
    {
        // output the rendered error to the appropriate output stream
        echo 'test';
        exit;
    }

    public function render(PhpError $error, bool $debug): string
    {
        // Convert the error into the output string.

        $response = $response->withStatus(500)
            ->withStringBody('An error occurred. Please try again later.');
        return $response;
    }
}