<?php

namespace AppBundle\Controller;

use AppBundle\Entity\HRForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Hrform controller.
 *
 * @Route("hrform")
 */
class HRFormController extends Controller
{
    /**
     * Lists all hRForm entities.
     *
     * @Route("/", name="hrform_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

//        $hRForms = $em->getRepository('AppBundle:HRForm')->findAll();

        // return $this->render('hrform/index.html.twig', array(
        //     'hRForms' => $hRForms,
        // ));
        
        $em = $this->getDoctrine()->getManager();

        $studentFormOnes = $em->getRepository('AppBundle:StudentFormOne')->findAll();
        
        if ($this->getUser()) {
            return $this->render('hrform/index.html.twig', array(
                'studentFormOnes' => $studentFormOnes,
            ));
        }
    }

    /**
     * Creates a new hRForm entity.
     *
     * @Route("/new", name="hrform_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $hRForm = new Hrform();
        $form = $this->createForm('AppBundle\Form\HRFormType', $hRForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($hRForm);
            $em->flush();

            return $this->redirectToRoute('hrform_show', array('id' => $hRForm->getId()));
        }

        return $this->render('hrform/new.html.twig', array(
            'hRForm' => $hRForm,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a hRForm entity.
     *
     * @Route("/{id}", name="hrform_show")
     * @Method("GET")
     */
    public function showAction(HRForm $hRForm)
    {
        $deleteForm = $this->createDeleteForm($hRForm);

        return $this->render('hrform/show.html.twig', array(
            'hRForm' => $hRForm,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing hRForm entity.
     *
     * @Route("/{id}/edit", name="hrform_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, HRForm $hRForm)
    {
        $deleteForm = $this->createDeleteForm($hRForm);
        $editForm = $this->createForm('AppBundle\Form\HRFormType', $hRForm);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('hrform_edit', array('id' => $hRForm->getId()));
        }

        return $this->render('hrform/edit.html.twig', array(
            'hRForm' => $hRForm,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a hRForm entity.
     *
     * @Route("/{id}", name="hrform_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, HRForm $hRForm)
    {
        $form = $this->createDeleteForm($hRForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($hRForm);
            $em->flush();
        }

        return $this->redirectToRoute('hrform_index');
    }

    /**
     * Creates a form to delete a hRForm entity.
     *
     * @param HRForm $hRForm The hRForm entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HRForm $hRForm)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hrform_delete', array('id' => $hRForm->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
