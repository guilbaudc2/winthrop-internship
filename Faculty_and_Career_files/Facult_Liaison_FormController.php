<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Facult_Liaison_Form;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Facult_liaison_form controller.
 *
 * @Route("facult_liaison_form")
 */
class Facult_Liaison_FormController extends Controller
{
   
    private $studentFormOne;
    private $studentFormOneID;
    private $studentID;
   
    /**
     * Lists all facult_Liaison_Form entities.
     *
     * @Route("/", name="facult_liaison_form_index")
     * @Method("GET")
     */
    public function indexAction()
    {
                //$em = $this->getDoctrine()->getManager();

        //$facult_Liaison_Forms = $em->getRepository('AppBundle:Facult_Liaison_Form')->findAll();

        //return $this->render('facult_liaison_form/index.html.twig', array(
        //    'facult_Liaison_Forms' => $facult_Liaison_Forms,
        //));
    
        // ***********************************************************
        //  NEED TO CHANGE TO INCORP StudentFormTwo FORM AND OTHER TABS IF NEEDED
        //                          |
        //                          |
        //                          V
        // ***********************************************************
        
       $em = $this->getDoctrine()->getManager();
        
        $repo =  $this->getDoctrine()->getRepository('AppBundle:StudentFormOne');
        
        //$query = $em->createQuery("SELECT DISTINCT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID FROM AppBundle:StudentFormOne sfo");
        
        //$studentFormOnes = $query->getResult();
        
        
        //Ready for Approval
        $flQuery = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:HRForm hrf WHERE sfo.id = hrf.student_form_one"); 
    
        $studentFormOnesReady = $flQuery->getResult();
        
        //Not Ready for Approval
        $flQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id != ssf.student_form_one "); 
    
        $studentFormOnes = $flQuery2->getResult();
        
        //$internationalOfficeForms = $ioQuery->getResult();
        
        
        if ($this->getUser()) {
            return $this->render('facult_liaison_form/index.html.twig', array(
                'studentFormOnesReady' => $studentFormOnesReady,
                'studentFormOnes' => $studentFormOnes,
                //'internationalOfficeForms' => $internationalOfficeForms,
            ));
        }else{
            return $this->redirectToRoute('homepage');
        
        }
    }

    /**
     * Creates a new facult_Liaison_Form entity.
     *
     * @Route("/new", name="facult_liaison_form_new")
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

            
            dump($studentID);
            $query = $em->createQuery("SELECT ssf FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf  WHERE sfo.id = ssf.student_form_one AND sfo.id = :id")
                ->setParameter("id", $studentID);
        
            // dump($query);
            $siteSupervisorFormArray = $query->getResult();
                        // dump($siteSupervisorFormArray);
            $siteSupervisorForm = $siteSupervisorFormArray[0];


            dump($siteSupervisorForm);}
        
        $facult_Liaison_Form = new Facult_liaison_form();
        $form = $this->createForm('AppBundle\Form\Facult_Liaison_FormType', $facult_Liaison_Form);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($facult_Liaison_Form);
            $em->flush();

            return $this->redirectToRoute('facult_liaison_form_show', array('id' => $facult_Liaison_Form->getId()));
        }

        return $this->render('facult_liaison_form/new.html.twig', array(
            'studentFormOne' => $this->studentFormOne,
            'siteSupervisorForm' => $siteSupervisorForm,
            'facult_Liaison_Form' => $facult_Liaison_Form,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a facult_Liaison_Form entity.
     *
     * @Route("/{id}", name="facult_liaison_form_show")
     * @Method("GET")
     */
    public function showAction(Facult_Liaison_Form $facult_Liaison_Form)
    {
        $deleteForm = $this->createDeleteForm($facult_Liaison_Form);

        return $this->render('facult_liaison_form/show.html.twig', array(
            'facult_Liaison_Form' => $facult_Liaison_Form,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing facult_Liaison_Form entity.
     *
     * @Route("/{id}/edit", name="facult_liaison_form_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Facult_Liaison_Form $facult_Liaison_Form)
    {
        $deleteForm = $this->createDeleteForm($facult_Liaison_Form);
        $editForm = $this->createForm('AppBundle\Form\Facult_Liaison_FormType', $facult_Liaison_Form);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('facult_liaison_form_edit', array('id' => $facult_Liaison_Form->getId()));
        }

        return $this->render('facult_liaison_form/edit.html.twig', array(
            'facult_Liaison_Form' => $facult_Liaison_Form,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a facult_Liaison_Form entity.
     *
     * @Route("/{id}", name="facult_liaison_form_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Facult_Liaison_Form $facult_Liaison_Form)
    {
        $form = $this->createDeleteForm($facult_Liaison_Form);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($facult_Liaison_Form);
            $em->flush();
        }

        return $this->redirectToRoute('facult_liaison_form_index');
    }

    /**
     * Creates a form to delete a facult_Liaison_Form entity.
     *
     * @param Facult_Liaison_Form $facult_Liaison_Form The facult_Liaison_Form entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Facult_Liaison_Form $facult_Liaison_Form)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('facult_liaison_form_delete', array('id' => $facult_Liaison_Form->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
