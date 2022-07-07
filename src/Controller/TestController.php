<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index()
    {
        dd('ça marche');
    }

    public function test(Request $request, $age)
    {
        // $age = $request->attributes->get('age');

        return new Response("vous avez $age ans");
    }
}
