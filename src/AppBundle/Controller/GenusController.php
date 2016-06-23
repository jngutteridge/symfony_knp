<?php
/**
 * Created by PhpStorm.
 * User: Jack Gutteridge
 * Date: 23/06/2016
 * Time: 15:29
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        $templating = $this->container->get('templating');
        $html = $templating->render('genus/show.html.twig', array(
            'name' => $genusName
        ));
        return new Response($html);
    }
}