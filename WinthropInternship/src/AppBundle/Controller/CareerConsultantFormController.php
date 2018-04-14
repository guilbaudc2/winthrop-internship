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

        //Ready for Approval
        $ccQuery = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:HRForm hrf WHERE sfo.id = hrf.student_form_one JOIN AppBundle:StudentFormTwo sft WHERE sfo.id = sft.student_form_one JOIN AppBundle:FacultyLiaisonForm fl WHERE sfo.id = fl.student_form_one");
        
    
        $noniostudentFormOnesReady = $ccQuery->getResult();
        
        $ccQueryIO = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:HRForm hrf WHERE sfo.id = hrf.student_form_one JOIN AppBundle:StudentFormTwo sft WHERE sfo.id = sft.student_form_one JOIN AppBundle:InternationalOfficeForm io WHERE sfo.id = io.student_form_one JOIN AppBundle:FacultyLiaisonForm fl WHERE sfo.id = fl.student_form_one"); 
        
        $ioStudentFormOnesReady = $ccQueryIO->getResult();
        
        $studentFormOnesReady = array_merge($noniostudentFormOnesReady, $ioStudentFormOnesReady);
        
        
        //Not Ready for Approval
        $ccQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id != ssf.student_form_one "); 
    
        $studentFormOnes = $ccQuery2->getResult();
        
        $ccQuery3 = $em->createQuery("SELECT fl.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:Facultyliaisonform fl WHERE sfo.id = fl.student_form_one JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one"); 
    
        $careerConsultantForms = $ccQuery3->getResult();
        
        if ($this->getUser()) {
            return $this->render('careerconsultantform/index.html.twig', array(
                'studentFormOnesReady' => $studentFormOnesReady,
                'studentFormOnes' => $studentFormOnes,
                'careerConsultantForms' => $careerConsultantForms,
            ));
        }else{
            return $this->redirectToRoute('homepage');
        
        }


        // $careerConsultantForms = $em->getRepository('AppBundle:CareerConsultantForm')->findAll();

        // return $this->render('careerconsultantform/index.html.twig', array(
        //     'careerConsultantForms' => $careerConsultantForms,
        // ));
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
            
            $query = $em->createQuery("SELECT ssf FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf  WHERE sfo.id = ssf.student_form_one AND sfo.id = :id")
                ->setParameter("id", $studentID);
        
            $siteSupervisorFormArray = $query->getResult();
            $siteSupervisorForm = $siteSupervisorFormArray[0];
            
            $query = $em->createQuery("SELECT hr FROM AppBundle:StudentFormOne sfo JOIN AppBundle:HRForm hr  WHERE sfo.id = hr.student_form_one AND sfo.id = :id")
                ->setParameter("id", $studentID);

            $hrFormArray = $query->getResult();
            $hrForm = $hrFormArray[0];

            
            $query = $em->createQuery("SELECT sft FROM AppBundle:StudentFormOne sfo JOIN AppBundle:StudentFormTwo sft  WHERE sfo.id = sft.student_form_one AND sfo.id = :id")
                ->setParameter("id", $studentID);

            $studentFormTwoArray = $query->getResult();
            $studentFormTwo = $studentFormTwoArray[0];
            
            $query = $em->createQuery("SELECT fl FROM AppBundle:StudentFormOne sfo JOIN AppBundle:FacultyLiaisonForm fl  WHERE sfo.id = fl.student_form_one AND sfo.id = :id")
                ->setParameter("id", $studentID);
        
            $facultyLiaisonFormArray = $query->getResult();
            $facultyLiaisonForm = $facultyLiaisonFormArray[0];
            
            
        }
        
        
        $careerConsultantForm = new Careerconsultantform($this->studentFormOne);
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
            'siteSupervisorForm' => $siteSupervisorForm,
            'hRForm' => $hrForm,
            'studentFormTwo' => $studentFormTwo,
            'facultyLiaisonForm' => $facultyLiaisonForm,
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
      
        $this->studentID = $careerConsultantForm->getStudentFormOne();
        $user = $this->getUser();
        
        $username = $user->getUsername();
        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') || $username == $studentFormOne->getUserName() || $this->get('security.authorization_checker')->isGranted('ROLE_IO_ADMIN')){
            
            $em = $this->getDoctrine()->getManager();
        
        
            
            $query = $em->createQuery('SELECT u FROM AppBundle:StudentFormOne u WHERE u.id = :id')
                ->setParameter("id", $this->studentID);
            $studentFormOneID = $query->getResult();
            
            //$this->studentFormOneData = $studentFormOneID;
            $this->studentFormOne = $studentFormOneID[0];

            $query = $em->createQuery("SELECT ssf FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf  WHERE sfo.id = ssf.student_form_one AND sfo.id = :id")
                ->setParameter("id", $this->studentID);
        
            $siteSupervisorFormArray = $query->getResult();
            $siteSupervisorForm = $siteSupervisorFormArray[0];
            
            $query = $em->createQuery("SELECT hr FROM AppBundle:StudentFormOne sfo JOIN AppBundle:HRForm hr  WHERE sfo.id = hr.student_form_one AND sfo.id = :id")
                ->setParameter("id", $this->studentID);

            $hrFormArray = $query->getResult();
            $hrForm = $hrFormArray[0];

            
            $query = $em->createQuery("SELECT sft FROM AppBundle:StudentFormOne sfo JOIN AppBundle:StudentFormTwo sft  WHERE sfo.id = sft.student_form_one AND sfo.id = :id")
                ->setParameter("id", $this->studentID);

            $studentFormTwoArray = $query->getResult();
            $studentFormTwo = $studentFormTwoArray[0];
            
            $query = $em->createQuery("SELECT fl FROM AppBundle:StudentFormOne sfo JOIN AppBundle:FacultyLiaisonForm fl  WHERE sfo.id = fl.student_form_one AND sfo.id = :id")
                ->setParameter("id", $this->studentID);
        
            $facultyLiaisonFormArray = $query->getResult();
            $facultyLiaisonForm = $facultyLiaisonFormArray[0];
        
            $deleteForm = $this->createDeleteForm($careerConsultantForm);
    
            return $this->render('careerconsultantform/show.html.twig', array(
                'studentFormOne' => $this->studentFormOne,
                'siteSupervisorForm' => $siteSupervisorForm,
                'hRForm' => $hrForm,
                'studentFormTwo' => $studentFormTwo,
                'facultyLiaisonForm' => $facultyLiaisonForm,
                'careerConsultantForm' => $careerConsultantForm,
                'delete_form' => $deleteForm->createView(),
            ));
        }
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
