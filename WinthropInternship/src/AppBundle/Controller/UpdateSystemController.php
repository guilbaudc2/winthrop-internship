<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * About Controller
 * 
 * @Route("/updatesystem")
 * 
 */
class UpdateSystemController extends Controller
{
    /**
     * @Route("/", name="updatesystem")
     */
    public function indexAction(Request $request)
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {

            return $this->render('updatesystem/updatesystem.html.twig', array(
                'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            ));
        }else{
            return $this->redirectToRoute('studentformone_index');
        }
    }
}
