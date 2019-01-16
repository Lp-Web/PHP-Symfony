<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller {

    /**
     * @Route("/helloworld/{name}", name="app.default.index")
     *
     * @param Request $request
     * @param string $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request, $name = "bob") {
        return $this -> render('default/index.html.twig', ["name" => $name]);
    }

}
