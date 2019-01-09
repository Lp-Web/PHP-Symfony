<?php
/**
 * Created by PhpStorm.
 * User: lebonnet5
 * Date: 09/01/19
 * Time: 08:42
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends Controller
{
    /**
     * @Route("/hello")
     */
    public function helloWorld(){
        return $this->render('hello/helloWorld.html.twig');
    }
}