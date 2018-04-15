<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FacultyLiaisonList;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Facultyliaisonlist controller.
 *
 * @Route("facultyliaisonlist")
 */
class FacultyLiaisonListController extends Controller
{
    /**
     * Lists all facultyLiaisonList entities.
     *
     * @Route("/", name="facultyliaisonlist_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $facultyLiaisonLists = $em->getRepository('AppBundle:FacultyLiaisonList')->findAll();

        return $this->render('facultyliaisonlist/index.html.twig', array(
            'facultyLiaisonLists' => $facultyLiaisonLists,
        ));
    }

    /**
     * Creates a new facultyLiaisonList entity.
     *
     * @Route("/new", name="facultyliaisonlist_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $facultyLiaisonList = new Facultyliaisonlist();
        $form = $this->createForm('AppBundle\Form\FacultyLiaisonListType', $facultyLiaisonList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($facultyLiaisonList);
            $em->flush();

            return $this->redirectToRoute('facultyliaisonlist_show', array('id' => $facultyLiaisonList->getId()));
        }

        return $this->render('facultyliaisonlist/new.html.twig', array(
            'facultyLiaisonList' => $facultyLiaisonList,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a facultyLiaisonList entity.
     *
     * @Route("/{id}", name="facultyliaisonlist_show")
     * @Method("GET")
     */
    public function showAction(FacultyLiaisonList $facultyLiaisonList)
    {
        $deleteForm = $this->createDeleteForm($facultyLiaisonList);

        return $this->render('facultyliaisonlist/show.html.twig', array(
            'facultyLiaisonList' => $facultyLiaisonList,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing facultyLiaisonList entity.
     *
     * @Route("/{id}/edit", name="facultyliaisonlist_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FacultyLiaisonList $facultyLiaisonList)
    {
        $deleteForm = $this->createDeleteForm($facultyLiaisonList);
        $editForm = $this->createForm('AppBundle\Form\FacultyLiaisonListType', $facultyLiaisonList);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('facultyliaisonlist_edit', array('id' => $facultyLiaisonList->getId()));
        }

        return $this->render('facultyliaisonlist/edit.html.twig', array(
            'facultyLiaisonList' => $facultyLiaisonList,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a facultyLiaisonList entity.
     *
     * @Route("/{id}", name="facultyliaisonlist_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FacultyLiaisonList $facultyLiaisonList)
    {
        $form = $this->createDeleteForm($facultyLiaisonList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($facultyLiaisonList);
            $em->flush();
        }

        return $this->redirectToRoute('facultyliaisonlist_index');
    }

    /**
     * Creates a form to delete a facultyLiaisonList entity.
     *
     * @param FacultyLiaisonList $facultyLiaisonList The facultyLiaisonList entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FacultyLiaisonList $facultyLiaisonList)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('facultyliaisonlist_delete', array('id' => $facultyLiaisonList->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
