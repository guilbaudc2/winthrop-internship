<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CareerConsultantForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
 use Symfony\Component\HttpFoundation\Response;

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
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {   
            return $this->redirectToRoute('studentformone_index');
        }else{
            $em = $this->getDoctrine()->getManager();
    
            //Ready for Approval
            $ccQuery = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one AND sfo.workAuthorization = 1 JOIN AppBundle:HRForm hrf WHERE sfo.id = hrf.student_form_one JOIN AppBundle:StudentFormTwo sft WHERE sfo.id = sft.student_form_one JOIN AppBundle:FacultyLiaisonForm fl WHERE sfo.id = fl.student_form_one LEFT JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one WHERE cc.student_form_one IS NULL");
            
        
            $noniostudentFormOnesReady = $ccQuery->getResult();
            
            $ccQueryIO = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one AND sfo.workAuthorization = 0 JOIN AppBundle:HRForm hrf WHERE sfo.id = hrf.student_form_one JOIN AppBundle:StudentFormTwo sft WHERE sfo.id = sft.student_form_one JOIN AppBundle:InternationalOfficeForm io WHERE sfo.id = io.student_form_one JOIN AppBundle:FacultyLiaisonForm fl WHERE sfo.id = fl.student_form_one LEFT JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one WHERE cc.student_form_one IS NULL"); 
            
            $ioStudentFormOnesReady = $ccQueryIO->getResult();
            
            $studentFormOnesReady = array_merge($noniostudentFormOnesReady, $ioStudentFormOnesReady);
            
            
            $ccQuery3 = $em->createQuery("SELECT cc.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, sfo.facultyLiaison, sfo.classEnrolled, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:Facultyliaisonform fl WHERE sfo.id = fl.student_form_one JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one"); 
            
            $careerConsultantForms = $ccQuery3->getResult();
            
            
            //Not Ready for Approval
                $ccQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName, sfo.submitDate as lastUpdated FROM AppBundle:StudentFormOne sfo LEFT JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one WHERE ssf.student_form_one IS NULL"); 
            
                $studentFormOnesOnly = $ccQuery2->getResult();
                
                    
                $studentFormOneCompleted = array();
                
                foreach($studentFormOnesOnly as $studentFormOneOnly){
                    $studentFormOneOnly["lastUser"] = "Student";
                    
                    $studentFormOneCompleted[] = $studentFormOneOnly;
                    
                }
                
                
                $ccQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName, ssf.submitDate as lastUpdated FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one AND sfo.workAuthorization = 1 LEFT JOIN AppBundle:HRForm hr WITH sfo.id = hr.student_form_one LEFT JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one WHERE (hr.student_form_one IS NULL AND sft.student_form_one IS NULL)"); 
            
                $siteSupervisorFormsOnly = $ccQuery2->getResult();
                
                    
                $siteSupervisorFormCompleted = array();
                
                foreach($siteSupervisorFormsOnly as $siteSupervisorFormOnly){
                    $siteSupervisorFormOnly["lastUser"] = "Site Supervisor";
                    
                    $siteSupervisorFormCompleted[] = $siteSupervisorFormOnly;
                    
                }
                
                $ccQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName, hr.approveDate as lastUpdated FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one INNER JOIN AppBundle:HRForm hr WITH sfo.id = hr.student_form_one LEFT JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one WHERE sft.student_form_one IS NULL"); 
            
                $hrFormsOnly = $ccQuery2->getResult();
                
                    
                $hrFormCompleted = array();
                
                foreach($hrFormsOnly as $hrFormOnly){
                    $hrFormOnly["lastUser"] = "Human Resources";
                    
                    $hrFormCompleted[] = $hrFormOnly;
                    
                }
                
                $ccQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName, sft.submitDate as lastUpdated FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one INNER JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one LEFT JOIN AppBundle:HRForm hr WITH sfo.id = hr.student_form_one WHERE hr.student_form_one IS NULL"); 
            
                $studentFormTwosOnly = $ccQuery2->getResult();
                
                    
                $studentFormTwoCompleted = array();
                
                foreach($studentFormTwosOnly as $studentFormTwoOnly){
                    $studentFormTwoOnly["lastUser"] = "Student (Form Two)";
                    
                    $studentFormTwoCompleted[] = $studentFormTwoOnly;
                    
                }
                
                $ccQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName, hr.approveDate, sft.submitDate as lastUpdated FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one AND sfo.workAuthorization = 0 INNER JOIN AppBundle:HRForm hr WITH sfo.id = hr.student_form_one INNER JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one LEFT JOIN AppBundle:InternationalOfficeForm io WITH sfo.id = io.student_form_one WHERE io.student_form_one IS NULL"); 
            
                $ioFormsOnly = $ccQuery2->getResult();
                    
                $ioFormCompleted = array();
                
                foreach($ioFormsOnly as $ioFormOnly){
                    if($ioFormOnly["approveDate"] > $ioFormOnly["lastUpdated"]){
                        $ioFormOnly["lastUpdated"] = $ioFormOnly["approveDate"];
                        $ioFormOnly["lastUser"] = "Human Resources";
                    }else {
                    
                        $ioFormOnly["lastUser"] = "Student (Form Two)";
                    }
                    
                    $ioFormCompleted[] = $ioFormOnly;
                    
                }
                
                $ccQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName, hr.approveDate, sft.submitDate, io.approveDate as lastUpdated FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one AND sfo.workAuthorization = 0 INNER JOIN AppBundle:HRForm hr WITH sfo.id = hr.student_form_one INNER JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one INNER JOIN AppBundle:InternationalOfficeForm io WITH sfo.id = io.student_form_one LEFT JOIN AppBundle:FacultyLiaisonForm fl WITH sfo.id = fl.student_form_one WHERE fl.student_form_one IS NULL"); 
            
                $flFormsOnly = $ccQuery2->getResult();
                
                    
                $flFormCompleted = array();
                
                foreach($flFormsOnly as $flFormOnly){
                    
                    if($flFormOnly["approveDate"] > $flFormOnly["lastUpdated"] && $flFormOnly["approveDate"] > $flFormOnly["submitDate"]){
                        $flFormOnly["lastUpdated"] = $flFormOnly["approveDate"];
                        $flFormOnly["lastUser"] = "Human Resources";
                    }elseif($flFormOnly["submitDate"] > $flFormOnly["lastUpdated"] && $flFormOnly["submitDate"] > $flFormOnly["approveDate"]){
                        $flFormOnly["lastUpdated"] = $flFormOnly["submitDate"];
                        $flFormOnly["lastUser"] = "Student (Form Two)";
                    }else{
                        $flFormOnly["lastUser"] = "International Office";
                    }
                    
                    $flFormCompleted[] = $flFormOnly;
                    
                }
                
                $ccQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName, hr.approveDate, sft.submitDate as lastUpdated FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one AND sfo.workAuthorization = 1 INNER JOIN AppBundle:HRForm hr WITH sfo.id = hr.student_form_one INNER JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one LEFT JOIN AppBundle:FacultyLiaisonForm fl WITH sfo.id = fl.student_form_one WHERE fl.student_form_one IS NULL"); 
            
                $nonioflFormsOnly = $ccQuery2->getResult();
                
                    
                $nonioflFormCompleted = array();
                
                foreach($nonioflFormsOnly as $nonioflFormOnly){
                    $nonioflFormOnly["lastUser"] = "International Office";
                    
                    if($nonioflFormOnly["approveDate"] > $nonioflFormOnly["lastUpdated"]){
                        $nonioflFormOnly["lastUpdated"] = $nonioflFormOnly["approveDate"];
                        $nonioflFormOnly["lastUser"] = "Human Resources";
                    } else{
                    
                        $nonioflFormOnly["lastUser"] = "Student (Form Two)";
                    }
                    
                    $nonioflFormCompleted[] = $nonioflFormOnly;
                    
                }
                
                $studentFormOnes = array_merge($studentFormOneCompleted, $siteSupervisorFormCompleted,$hrFormCompleted, $studentFormTwoCompleted, $ioFormCompleted, $flFormCompleted, $nonioflFormCompleted);
                
                usort($studentFormOnes, function ($a, $b) {
                    $a_val = $a['lastUpdated'];
                    $b_val = $b['lastUpdated'];
                    
                    if($a_val > $b_val) return 1;
                    if($a_val < $b_val) return -1;
                    return 0;
                });
            
            if ($this->getUser()) {
                return $this->render('careerconsultantform/index.html.twig', array(
                    'studentFormOnesReady' => $studentFormOnesReady,
                    'studentFormOnes' => $studentFormOnes,
                    'careerConsultantForms' => $careerConsultantForms,
                ));
            }else{
                return $this->redirectToRoute('homepage');
            
            }
        }
    }

    /**
     * Creates a new careerConsultantForm entity.
     *
     * @Route("/new", name="careerconsultantform_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, \Swift_Mailer $mailer)
    {
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {   
            return $this->redirectToRoute('studentformone_index');
        }else{
            if(isset($_GET["studentInfo"])){
                $studentID = $_GET["studentInfo"];
        
        
                $em = $this->getDoctrine()->getManager();
                    
                $query = $em->createQuery('SELECT u FROM AppBundle:StudentFormOne u WHERE u.id = :id')
                    ->setParameter('id', $studentID);
                $studentFormOneID = $query->getResult();
                
                $this->studentFormOne = $studentFormOneID[0];
                
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
    
                $query = $em->createQuery("SELECT io FROM AppBundle:StudentFormOne sfo JOIN AppBundle:InternationalOfficeForm io  WHERE sfo.id = io.student_form_one AND sfo.id = :id")
                    ->setParameter("id", $studentID);
            
                $ioFormArray = $query->getResult();
                
                if (empty($ioFormArray)) {
                     $ioForm = $ioFormArray;
                }else{
                    $ioForm = $ioFormArray[0];
                }            
                
            }
            
            
            $careerConsultantForm = new Careerconsultantform($this->studentFormOne);
            $form = $this->createForm('AppBundle\Form\CareerConsultantFormType', $careerConsultantForm);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($careerConsultantForm);
                $em->flush();
                
                
                $studentFName = $this->studentFormOne->getFirstName();
                $studentLName = $this->studentFormOne->getLastName();
                $studentEmail = $this->studentFormOne->getEmailAddress();
                
                $message = (new \Swift_Message('Successful Completion of Winthrop Internship Learning Agreement'))
                    ->setFrom('cce@winthrop.edu')
                    ->setTo($studentEmail)
                    ->setBody(
                        $this->renderView(
                            'emails/CCForm/student_notifcation.html.twig',
                            array('studentFName' => $studentFName
                            )
                        ),
                        'text/html'
                    )
                    ->addPart(
                        $this->renderView(
                            'emails/CCForm/student_notification.txt.twig',
                            array('studentFName' => $studentFName
                            )
                        ),
                        'text/plain'
                    );
                $mailer->send($message);
    
                return $this->redirectToRoute('careerconsultantform_show', array('id' => $careerConsultantForm->getId()));
            }
    
            return $this->render('careerconsultantform/new.html.twig', array(
                'studentFormOne' => $this->studentFormOne,
                'siteSupervisorForm' => $siteSupervisorForm,
                'hRForm' => $hrForm,
                'ioForm' => $ioForm,
                'studentFormTwo' => $studentFormTwo,
                'facultyLiaisonForm' => $facultyLiaisonForm,
                'careerConsultantForm' => $careerConsultantForm,
                'form' => $form->createView(),
            ));
        }
    }

    /**
     * Finds and displays a careerConsultantForm entity.
     *
     * @Route("/{id}", name="careerconsultantform_show")
     * @Method("GET")
     */
    public function showAction(CareerConsultantForm $careerConsultantForm)
    {
        $em = $this->getDoctrine()->getManager();

        $this->studentID = $careerConsultantForm->getStudentFormOne();
        
        $studentFormOne = $em->getRepository('AppBundle:StudentFormOne')->findOneById($this->studentID);

        $user = $this->getUser();
        
        $username = $user->getUsername();
        
        $name = $user->getFirstName() . " " . $user->getLastName();
        
        dump($name);
        dump($studentFormOne->getFacultyLiaison());
        
        
        if($name == $studentFormOne->getFacultyLiaison()){
            dump(true);
        }else{
            dump(false);
        }
        
        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') || $username == $studentFormOne->getUserName() || $name == $studentFormOne->getFacultyLiaison()) {   
                
            $em = $this->getDoctrine()->getManager();
        
        
            
            $query = $em->createQuery('SELECT u FROM AppBundle:StudentFormOne u WHERE u.id = :id')
                ->setParameter("id", $this->studentID);
            $studentFormOneID = $query->getResult();
            
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
            
            
            $query = $em->createQuery("SELECT io FROM AppBundle:StudentFormOne sfo JOIN AppBundle:InternationalOfficeForm io  WHERE sfo.id = io.student_form_one AND sfo.id = :id")
                ->setParameter("id", $this->studentID);
        
            $ioFormArray = $query->getResult();
            
            if (empty($ioFormArray)) {
                 $ioForm = $ioFormArray;
            }else{
                $ioForm = $ioFormArray[0];
            }            
        
            $deleteForm = $this->createDeleteForm($careerConsultantForm);
    
            return $this->render('careerconsultantform/show.html.twig', array(
                'studentFormOne' => $this->studentFormOne,
                'siteSupervisorForm' => $siteSupervisorForm,
                'hRForm' => $hrForm,
                'ioForm' => $ioForm,
                'studentFormTwo' => $studentFormTwo,
                'facultyLiaisonForm' => $facultyLiaisonForm,
                'careerConsultantForm' => $careerConsultantForm,
                'delete_form' => $deleteForm->createView(),
            ));
        }else{
            return $this->redirectToRoute('studentformone_index');
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
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {   
            return $this->redirectToRoute('studentformone_index');
        }else{
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
    }

    /**
     * Deletes a careerConsultantForm entity.
     *
     * @Route("/{id}", name="careerconsultantform_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CareerConsultantForm $careerConsultantForm)
    {
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {   
            return $this->redirectToRoute('studentformone_index');
        }else{
            $form = $this->createDeleteForm($careerConsultantForm);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($careerConsultantForm);
                $em->flush();
            }
    
            return $this->redirectToRoute('careerconsultantform_index');
        }
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
