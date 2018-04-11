<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CareerConsultantForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Careerconsultantform controller.
 *
 * @Route("careerconsultantform")
 */
class CareerConsultantFormController extends Controller
{
    /**
     * Lists all careerConsultantForm entities.
     *
     * @Route("/", name="careerconsultantform_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $repo =  $this->getDoctrine()->getRepository('AppBundle:StudentFormOne');

        //$careerConsultantForms = $em->getRepository('AppBundle:CareerConsultantForm')->findAll();

        //return $this->render('careerconsultantform/index.html.twig', array(
        //    'careerConsultantForms' => $careerConsultantForms,
        //));
        
        $query = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:HRForm hrf WHERE sfo.id = hrf.student_form_one");
        
        $studentFormOnesReady = $query->getResult();
        
                //Not Ready for Approval
        $flQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id != ssf.student_form_one "); 
    
        $studentFormOnes = $flQuery2->getResult();
        
        if ($this->getUser()) {
            return $this->render('careerconsultantform/index.html.twig', array(
                'studentFormOneReady' => $studentFormOnesReady,
                'studentFormOnes' => $studentFormOnes,
                //'internationalOfficeForms' => $internationalOfficeForms,
            ));
        }else{
            return $this->redirectToRoute('homepage');
        
        }
        
    }

    /**
     * Creates a new careerConsultantForm entity.
     *
     * @Route("/new", name="careerconsultantform_new")
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
            //$query = $em->createQuery("SELECT ssf FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf  WHERE sfo.id = ssf.student_form_one AND sfo.id = :id")
            //    ->setParameter("id", $studentID);
        
            // dump($query);
            //$siteSupervisorFormArray = $query->getResult();
                        // dump($siteSupervisorFormArray);
            //$siteSupervisorForm = $siteSupervisorFormArray[0];


            //dump($siteSupervisorForm);
            }
        
        
        
        $careerConsultantForm = new Careerconsultantform();
        $form = $this->createForm('AppBundle\Form\CareerConsultantFormType', $careerConsultantForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($careerConsultantForm);
            $em->flush();

            return $this->redirectToRoute('careerconsultantform_show', array('id' => $careerConsultantForm->getId()));
        }

        return $this->render('careerconsultantform/new.html.twig', array(
            'studentFormOne' => $this->studentFormOne,
            'careerConsultantForm' => $careerConsultantForm,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a careerConsultantForm entity.
     *
     * @Route("/{id}", name="careerconsultantform_show")
     * @Method("GET")
     */
    public function showAction(CareerConsultantForm $careerConsultantForm)
    {
        $deleteForm = $this->createDeleteForm($careerConsultantForm);

        return $this->render('careerconsultantform/show.html.twig', array(
            'careerConsultantForm' => $careerConsultantForm,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing careerConsultantForm entity.
     *
     * @Route("/{id}/edit", name="careerconsultantform_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CareerConsultantForm $careerConsultantForm)
    {
        $deleteForm = $this->createDeleteForm($careerConsultantForm);
        $editForm = $this->createForm('AppBundle\Form\CareerConsultantFormType', $careerConsultantForm);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('careerconsultantform_edit', array('id' => $careerConsultantForm->getId()));
        }

        return $this->render('careerconsultantform/edit.html.twig', array(
            'careerConsultantForm' => $careerConsultantForm,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a careerConsultantForm entity.
     *
     * @Route("/{id}", name="careerconsultantform_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CareerConsultantForm $careerConsultantForm)
    {
        $form = $this->createDeleteForm($careerConsultantForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($careerConsultantForm);
            $em->flush();
        }

        return $this->redirectToRoute('careerconsultantform_index');
    }

    /**
     * Creates a form to delete a careerConsultantForm entity.
     *
     * @param CareerConsultantForm $careerConsultantForm The careerConsultantForm entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CareerConsultantForm $careerConsultantForm)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('careerconsultantform_delete', array('id' => $careerConsultantForm->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
