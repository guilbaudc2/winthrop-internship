<?php

namespace AppBundle\Controller;

use AppBundle\Entity\InternationalOfficeForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Internationalofficeform controller.
 *
 * @Route("internationalofficeform")
 */
class InternationalOfficeFormController extends Controller
{
    /**
     * Lists all internationalOfficeForm entities.
     *
     * @Route("/", name="internationalofficeform_index")
     * @Method("GET")
     */
    public function indexAction()
    {

       $em = $this->getDoctrine()->getManager();
        
        $repo =  $this->getDoctrine()->getRepository('AppBundle:StudentFormOne');
        // $queryBuilder = $repo->createQueryBuilder("w");
        // $queryBuilder
        //     ->select('s.firstName', 's.lastName', 'h.completedTitleIX')
        //     ->from('student_form_one', 's')
        //     ->innerJoin('s', 'h_r_form', 'h', 's.id != h.student_form_one_id');
        
        $query = $em->createQuery("SELECT DISTINCT sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one AND NOT (sfo.legallyAuthorized = 1 AND sfo.futureWorkAuthorization = 0) JOIN AppBundle:InternationalOfficeForm io WHERE sfo.id != io.student_form_one");
        
        $studentFormOnes = $query->getResult();

        
        $ioQuery = $em->createQuery("SELECT sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:InternationalOfficeForm io WHERE sfo.id = io.student_form_one"); 
    
        $internationalOfficeForms = $ioQuery->getResult();
        

        
        if ($this->getUser()) {
            return $this->render('internationalofficeform/index.html.twig', array(
                'studentFormOnes' => $studentFormOnes,
                'internationalOfficeForms' => $internationalOfficeForms,
            ));
        }else{
            return $this->redirectToRoute('homepage');
        
        }
    }

    /**
     * Creates a new internationalOfficeForm entity.
     *
     * @Route("/new", name="internationalofficeform_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $internationalOfficeForm = new Internationalofficeform();
        $form = $this->createForm('AppBundle\Form\InternationalOfficeFormType', $internationalOfficeForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($internationalOfficeForm);
            $em->flush();

            return $this->redirectToRoute('internationalofficeform_show', array('id' => $internationalOfficeForm->getId()));
        }

        return $this->render('internationalofficeform/new.html.twig', array(
            'internationalOfficeForm' => $internationalOfficeForm,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a internationalOfficeForm entity.
     *
     * @Route("/{id}", name="internationalofficeform_show")
     * @Method("GET")
     */
    public function showAction(InternationalOfficeForm $internationalOfficeForm)
    {
        $deleteForm = $this->createDeleteForm($internationalOfficeForm);

        return $this->render('internationalofficeform/show.html.twig', array(
            'internationalOfficeForm' => $internationalOfficeForm,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing internationalOfficeForm entity.
     *
     * @Route("/{id}/edit", name="internationalofficeform_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, InternationalOfficeForm $internationalOfficeForm)
    {
        $deleteForm = $this->createDeleteForm($internationalOfficeForm);
        $editForm = $this->createForm('AppBundle\Form\InternationalOfficeFormType', $internationalOfficeForm);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('internationalofficeform_edit', array('id' => $internationalOfficeForm->getId()));
        }

        return $this->render('internationalofficeform/edit.html.twig', array(
            'internationalOfficeForm' => $internationalOfficeForm,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a internationalOfficeForm entity.
     *
     * @Route("/{id}", name="internationalofficeform_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, InternationalOfficeForm $internationalOfficeForm)
    {
        $form = $this->createDeleteForm($internationalOfficeForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($internationalOfficeForm);
            $em->flush();
        }

        return $this->redirectToRoute('internationalofficeform_index');
    }

    /**
     * Creates a form to delete a internationalOfficeForm entity.
     *
     * @param InternationalOfficeForm $internationalOfficeForm The internationalOfficeForm entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(InternationalOfficeForm $internationalOfficeForm)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('internationalofficeform_delete', array('id' => $internationalOfficeForm->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
