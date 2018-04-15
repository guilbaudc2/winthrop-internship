<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ClassList;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Classlist controller.
 *
 * @Route("classlist")
 */
class ClassListController extends Controller
{
    /**
     * Lists all classList entities.
     *
     * @Route("/", name="classlist_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $classLists = $em->getRepository('AppBundle:ClassList')->findAll();

        return $this->render('classlist/index.html.twig', array(
            'classLists' => $classLists,
        ));
    }

    /**
     * Creates a new classList entity.
     *
     * @Route("/new", name="classlist_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $classList = new Classlist();
        $form = $this->createForm('AppBundle\Form\ClassListType', $classList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($classList);
            $em->flush();

            return $this->redirectToRoute('classlist_show', array('id' => $classList->getId()));
        }

        return $this->render('classlist/new.html.twig', array(
            'classList' => $classList,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a classList entity.
     *
     * @Route("/{id}", name="classlist_show")
     * @Method("GET")
     */
    public function showAction(ClassList $classList)
    {
        $deleteForm = $this->createDeleteForm($classList);

        return $this->render('classlist/show.html.twig', array(
            'classList' => $classList,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing classList entity.
     *
     * @Route("/{id}/edit", name="classlist_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ClassList $classList)
    {
        $deleteForm = $this->createDeleteForm($classList);
        $editForm = $this->createForm('AppBundle\Form\ClassListType', $classList);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('classlist_edit', array('id' => $classList->getId()));
        }

        return $this->render('classlist/edit.html.twig', array(
            'classList' => $classList,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a classList entity.
     *
     * @Route("/{id}", name="classlist_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ClassList $classList)
    {
        $form = $this->createDeleteForm($classList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($classList);
            $em->flush();
        }

        return $this->redirectToRoute('classlist_index');
    }

    /**
     * Creates a form to delete a classList entity.
     *
     * @param ClassList $classList The classList entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ClassList $classList)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('classlist_delete', array('id' => $classList->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
