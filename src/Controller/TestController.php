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

    /**
     * @Route("/test/{age<\d+>?0}" , name="test" , methode={"GET", "POST"}, host="localhost", schemes={"https" , "http"}) 
     */
    public function test(Request $request, $age)
    {
        // $age = $request->attributes->get('age');

        return new Response("vous avez $age ans");
    }
}
