<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SiteSupervisorForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Sitesupervisorform controller.
 *
 * @Route("sitesupervisorform")
 */
class SiteSupervisorFormController extends Controller
{
<<<<<<< HEAD
=======
    private $accessCode;
    private $studentFormOneData;
    private $studentFormOne;
    private $studentFormOneID;
>>>>>>> 208698d3de4018b25ac7a739a8efa9cf1440693d
    /**
     * Lists all siteSupervisorForm entities.
     *
     * @Route("/", name="sitesupervisorform_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $siteSupervisorForms = $em->getRepository('AppBundle:SiteSupervisorForm')->findAll();

        return $this->render('sitesupervisorform/index.html.twig', array(
            'siteSupervisorForms' => $siteSupervisorForms,
        ));
    }

    /**
     * Creates a new siteSupervisorForm entity.
     *
     * @Route("/new", name="sitesupervisorform_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
<<<<<<< HEAD
        $siteSupervisorForm = new Sitesupervisorform();
=======
        if(isset($_GET["accessCodeSS"])){
    
            $this->accessCode = $_GET["accessCodeSS"];
    
            $accessCode = $this->accessCode;
            $em = $this->getDoctrine()->getManager();
                
            $query = $em->createQuery('SELECT u FROM AppBundle:StudentFormOne u WHERE u.siteSuperAccessCode = :accessCode')
                ->setParameter('accessCode', $accessCode);
            $studentFormOneID = $query->getResult();
            
            $this->studentFormOneData = $studentFormOneID;

            $this->studentFormOne = $studentFormOneID[0];
            
        }
        var_dump($this->studentFormOneData);
        
        $siteSupervisorForm = new SiteSupervisorForm($this->studentFormOne);

>>>>>>> 208698d3de4018b25ac7a739a8efa9cf1440693d
        $form = $this->createForm('AppBundle\Form\SiteSupervisorFormType', $siteSupervisorForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($siteSupervisorForm);
            $em->flush();

            return $this->redirectToRoute('sitesupervisorform_show', array('id' => $siteSupervisorForm->getId()));
        }

        return $this->render('sitesupervisorform/new.html.twig', array(
            'siteSupervisorForm' => $siteSupervisorForm,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a siteSupervisorForm entity.
     *
     * @Route("/{id}", name="sitesupervisorform_show")
     * @Method("GET")
     */
    public function showAction(SiteSupervisorForm $siteSupervisorForm)
    {
        $deleteForm = $this->createDeleteForm($siteSupervisorForm);

        return $this->render('sitesupervisorform/show.html.twig', array(
            'siteSupervisorForm' => $siteSupervisorForm,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing siteSupervisorForm entity.
     *
     * @Route("/{id}/edit", name="sitesupervisorform_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SiteSupervisorForm $siteSupervisorForm)
    {
        $deleteForm = $this->createDeleteForm($siteSupervisorForm);
        $editForm = $this->createForm('AppBundle\Form\SiteSupervisorFormType', $siteSupervisorForm);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sitesupervisorform_edit', array('id' => $siteSupervisorForm->getId()));
        }

        return $this->render('sitesupervisorform/edit.html.twig', array(
            'siteSupervisorForm' => $siteSupervisorForm,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a siteSupervisorForm entity.
     *
     * @Route("/{id}", name="sitesupervisorform_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, SiteSupervisorForm $siteSupervisorForm)
    {
        $form = $this->createDeleteForm($siteSupervisorForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($siteSupervisorForm);
            $em->flush();
        }

        return $this->redirectToRoute('sitesupervisorform_index');
    }

    /**
     * Creates a form to delete a siteSupervisorForm entity.
     *
     * @param SiteSupervisorForm $siteSupervisorForm The siteSupervisorForm entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SiteSupervisorForm $siteSupervisorForm)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sitesupervisorform_delete', array('id' => $siteSupervisorForm->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
