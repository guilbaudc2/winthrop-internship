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
    private $studentFormOne;
    private $studentFormOneID;
    private $studentID;
    
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
        
        $query = $em->createQuery("SELECT DISTINCT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one AND NOT (sfo.legallyAuthorized = 1 AND sfo.futureWorkAuthorization = 0) JOIN AppBundle:InternationalOfficeForm io WHERE sfo.id != io.student_form_one");
        
        $studentFormOnes = $query->getResult();

        
        $ioQuery = $em->createQuery("SELECT io.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:InternationalOfficeForm io WHERE sfo.id = io.student_form_one"); 
    
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
        
         if(isset($_GET["studentInfo"])){
             $studentID = $_GET["studentInfo"];
    
    
            $em = $this->getDoctrine()->getManager();
                
            $query = $em->createQuery('SELECT u FROM AppBundle:StudentFormOne u WHERE u.id = :id')
                ->setParameter('id', $studentID);
            $studentFormOneID = $query->getResult();
            
            //$this->studentFormOneData = $studentFormOneID;

            $this->studentFormOne = $studentFormOneID[0];
            dump($studentFormOneID);
            
            $query = $em->createQuery("SELECT ssf FROM AppBundle:SiteSupervisorForm ssf JOIN AppBundle:StudentFormOne sfo WHERE sfo.id = ssf.student_form_one AND sfo.id = :id");
            $query->setParameter("id", $studentID);
        
            $siteSupervisorFormArray = $query->getResult();
            
            $siteSupervisorForm = $siteSupervisorFormArray[0];
            
            
            
        }
        
        $internationalOfficeForm = new Internationalofficeform($this->studentFormOne);
        $form = $this->createForm('AppBundle\Form\InternationalOfficeFormType', $internationalOfficeForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($internationalOfficeForm);
            $em->flush();

            return $this->redirectToRoute('internationalofficeform_show', array('id' => $internationalOfficeForm->getId()));
        }

        return $this->render('internationalofficeform/new.html.twig', array(
            'studentFormOne' => $this->studentFormOne,
            'siteSupervisorForm' => $siteSupervisorForm,
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
        $this->studentID = $internationalOfficeForm->getStudentFormOne();
        $user = $this->getUser();
        
        $username = $user->getUsername();
        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') || $username == $studentFormOne->getUserName() || $this->get('security.authorization_checker')->isGranted('ROLE_IO_ADMIN')){
            
            $em = $this->getDoctrine()->getManager();
            
            $query = $em->createQuery("SELECT sfo JOIN AppBundle:StudentFormOne sfo WHERE sfo.id = :id");
            $query->setParameter("id", $this->studentID);
        
            $studentFormOneArray = $query->getResult();
            
            $studentFormOne = $studentFormOneArray[0];

            $query = $em->createQuery("SELECT ssf FROM AppBundle:SiteSupervisorForm ssf JOIN AppBundle:StudentFormOne sfo WHERE sfo.id = ssf.student_form_one AND sfo.id = :id");
            $query->setParameter("id", $this->studentID);
        
            $siteSupervisorFormArray = $query->getResult();
            
            $siteSupervisorForm = $siteSupervisorFormArray[0];
            $deleteForm = $this->createDeleteForm($internationalOfficeForm);
        
            return $this->render('internationalofficeform/show.html.twig', array(
                'studentFormOne' => $studentFormOne,
                'siteSupervisorForm' => $siteSupervisorForm,
                'internationalOfficeForm' => $internationalOfficeForm,
                'delete_form' => $deleteForm->createView(),
            ));
        }else {
            return $this->redirectToRoute('internationalofficeform_index');
        }
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
