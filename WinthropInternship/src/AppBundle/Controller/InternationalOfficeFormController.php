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
        
        if ($this->get('security.authorization_checker')->isGranted('ROLE_IO_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {        

            $em = $this->getDoctrine()->getManager();
            
            $repo =  $this->getDoctrine()->getRepository('AppBundle:StudentFormOne');
        
// Initial Query - Inner Joins Student Form One and Site Supervisor Form where there exists a site supervisor form that matches a student form. Left Join that with the international office form. If there is no id that connects the
// student form one with the io form, it is added to the $studentFormOnes array
        // $query = $em->createQuery("SELECT DISTINCT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one AND NOT (sfo.legallyAuthorized = 1 AND sfo.futureWorkAuthorization = 0) INNER JOIN AppBundle:InternationalOfficeForm io WHERE sfo.id != io.student_form_one");
// Modified query to match below's working query
            $query = $em->createQuery("SELECT DISTINCT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one AND NOT (sfo.workAuthorization = 1) LEFT JOIN AppBundle:InternationalOfficeForm io WITH sfo.id = io.student_form_one WHERE io.student_form_one IS NULL");

// Below is working MySQL query to get entries that do not exist already in the table.        
//SELECT DISTINCT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM student_form_one sfo INNER JOIN site_supervisor_form ssf ON sfo.id = ssf.student_form_one_id AND NOT (sfo.legallyAuthorized = 1 AND sfo.futureWorkAuthorization = 0) LEFT JOIN international_office_form io ON sfo.id = io.student_form_one_id WHERE io.student_form_one_id IS NULL
        
            $studentFormOnes = $query->getResult();

// Second Query - Inner Joins Student Form One and Site Supervisor Form where there exists a site supervisor form that matches a student form. Inner Join that with the international office form, where if an id exists, it will
// be added to the "completed" international office forms.
            $ioQuery = $em->createQuery("SELECT io.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:InternationalOfficeForm io WHERE sfo.id = io.student_form_one"); 
        
            $internationalOfficeForms = $ioQuery->getResult();
        
        
            return $this->render('internationalofficeform/index.html.twig', array(
                'studentFormOnes' => $studentFormOnes,
                'internationalOfficeForms' => $internationalOfficeForms,
            ));
        }else{
            return $this->redirectToRoute('studentformone_index');
        
        }
    }

    /**
     * Creates a new internationalOfficeForm entity.
     *
     * @Route("/new", name="internationalofficeform_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, \Swift_Mailer $mailer)
    {

//  In twig file, each row is a form with a hidden input. The hidden input is the student form one id which will add the id to a global variable $_GET. It is pulled from the global variable below. This is used to generate an
// international office form with the related student form one object (To prevent selection at random)


         if(isset($_GET["studentInfo"])){
             $studentID = $_GET["studentInfo"];
    
    
            $em = $this->getDoctrine()->getManager();
            
//  The student ID is used here to query from the database where the student form one ID equals the one from the hidden input.


            $query = $em->createQuery('SELECT u FROM AppBundle:StudentFormOne u WHERE u.id = :id')
                ->setParameter('id', $studentID);
            $studentFormOneID = $query->getResult();
            
            $this->studentFormOne = $studentFormOneID[0];

// The student ID is used here to query from the database where the site supervisor form is joined with the student form one and where the student form one ID again equals the one from the hidden input     

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
            
            $studentFName = $this->studentFormOne->getFirstName();
            $studentLName = $this->studentFormOne->getLastName();
            $studentEmail = $this->studentFormOne->getEmailAddress();
            $studentFormTwoURL = "http://18.233.91.151:8080/WinthropInternship/web/app_dev.php/studentformtwo";
                
            $message = (new \Swift_Message('Successful Submission of Winthrop Internship International Office Form'))
                ->setFrom('cce@winthrop.edu')
                ->setTo($studentEmail)
                ->setBody(
                    $this->renderView(
                        'emails/IOForm/student_notifcation.html.twig',
                        array('studentFName' => $studentFName,
                              'studentFormTwoURL' => $studentFormTwoURL,
                        )
                    ),
                    'text/html'
                )
                ->addPart(
                    $this->renderView(
                        'emails/IOForm/student_notification.txt.twig',
                        array('studentFName' => $studentFName,
                              'studentFormTwoURL' => $studentFormTwoURL,
                        )
                    ),
                    'text/plain'
                );
            $mailer->send($message);

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
        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_IO_ADMIN')){
            
            $em = $this->getDoctrine()->getManager();
        
// Same Student Form One query as above.

            $query = $em->createQuery("SELECT sfo JOIN AppBundle:StudentFormOne sfo WHERE sfo.id = :id");
            $query->setParameter("id", $this->studentID);
        
            $studentFormOneArray = $query->getResult();
            
            $studentFormOne = $studentFormOneArray[0];

// Same Site Supervisor Form query as above.

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
