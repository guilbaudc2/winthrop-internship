<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FacultyLiaisonForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Facultyliaisonform controller.
 *
 * @Route("facultyliaisonform")
 */
class FacultyLiaisonFormController extends Controller
{
    private $flQuery;
    /**
     * Lists all facultyLiaisonForm entities.
     *
     * @Route("/", name="facultyliaisonform_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        
        if ($this->get('security.authorization_checker')->isGranted('ROLE_FL_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {        
            
            $em = $this->getDoctrine()->getManager();
        
            $repo =  $this->getDoctrine()->getRepository('AppBundle:StudentFormOne');
            
            if (!$this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {        
                
                $user = $this->getUser();
            
                $username = $user->getUsername();
            
        // $em = $this->getDoctrine()->getManager();

        // $facultyLiaisonForms = $em->getRepository('AppBundle:FacultyLiaisonForm')->findAll();

        // return $this->render('facultyliaisonform/index.html.twig', array(
        //     'facultyLiaisonForms' => $facultyLiaisonForms,
        // ));
    
        // ***********************************************************
        //  NEED TO CHANGE TO INCORP StudentFormTwo FORM AND OTHER TABS IF NEEDED
        //                          |
        //                          |
        //                          V
        // ***********************************************************
        
        
        //$query = $em->createQuery("SELECT DISTINCT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID FROM AppBundle:StudentFormOne sfo");
        
        //$studentFormOnes = $query->getResult();
        
        
        //Ready for Approval
                $flQuery = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one AND sfo.workAuthorization = 1 INNER JOIN AppBundle:HRForm hrf WITH sfo.id = hrf.student_form_one INNER JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one INNER JOIN AppBundle:FacultyLiaisonList fll WITH sfo.facultyLiaison = fll.name AND fll.username = :username LEFT JOIN AppBundle:FacultyLiaisonForm fl WITH sfo.id = fl.student_form_one WHERE fl.student_form_one IS NULL")
                    ->setParameter('username', $username);
            
                $noniostudentFormOnesReady = $flQuery->getResult();
                
                $flQueryIO = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one AND sfo.workAuthorization = 0 INNER JOIN AppBundle:HRForm hrf WITH sfo.id = hrf.student_form_one INNER JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one INNER JOIN AppBundle:InternationalOfficeForm io WITH sfo.id = io.student_form_one INNER JOIN AppBundle:FacultyLiaisonList fll WITH sfo.facultyLiaison = fll.name AND fll.username = :username LEFT JOIN AppBundle:FacultyLiaisonForm fl WITH sfo.id = fl.student_form_one WHERE fl.student_form_one IS NULL")
                    ->setParameter('username', $username); 
                
                $ioStudentFormOnesReady = $flQueryIO->getResult();
                
                $studentFormOnesReady = array_merge($noniostudentFormOnesReady, $ioStudentFormOnesReady);
                
                $flQuery3 = $em->createQuery("SELECT fl.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:Facultyliaisonform fl WHERE sfo.id = fl.student_form_one JOIN AppBundle:FacultyLiaisonList fll WHERE sfo.facultyLiaison = fll.name AND fll.username = :username")
                    ->setParameter('username', $username); 
        
                $facultyLiaisonForms = $flQuery3->getResult();
            
            } else{
                $flQuery = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, sfo.facultyLiaison, sfo.classEnrolled, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:HRForm hrf WHERE sfo.id = hrf.student_form_one JOIN AppBundle:StudentFormTwo sft WHERE sfo.id = sft.student_form_one");
                
                $noniostudentFormOnesReady = $flQuery->getResult();
                
                $flQueryIO = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, sfo.facultyLiaison, sfo.classEnrolled, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:HRForm hrf WHERE sfo.id = hrf.student_form_one JOIN AppBundle:StudentFormTwo sft WHERE sfo.id = sft.student_form_one JOIN AppBundle:InternationalOfficeForm io WHERE sfo.id = io.student_form_one"); 
                
                $ioStudentFormOnesReady = $flQueryIO->getResult();
                
                $studentFormOnesReady = array_merge($noniostudentFormOnesReady, $ioStudentFormOnesReady);    
                
                $flQuery3 = $em->createQuery("SELECT fl.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, sfo.facultyLiaison, sfo.classEnrolled, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:Facultyliaisonform fl WHERE sfo.id = fl.student_form_one"); 
        
                $facultyLiaisonForms = $flQuery3->getResult();
                
            }
            
        
        
        //Not Ready for Approval
            $flQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName, sfo.submitDate as lastUpdated FROM AppBundle:StudentFormOne sfo LEFT JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one WHERE ssf.student_form_one IS NULL"); 
        
            $studentFormOnesOnly = $flQuery2->getResult();
            
                
            $studentFormOneCompleted = array();
            
            foreach($studentFormOnesOnly as $studentFormOneOnly){
                $studentFormOneOnly["lastUser"] = "Student";
                
                $studentFormOneCompleted[] = $studentFormOneOnly;
                
            }
            
            
            $flQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName, ssf.submitDate as lastUpdated FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one AND sfo.workAuthorization = 1 LEFT JOIN AppBundle:HRForm hr WITH sfo.id = hr.student_form_one LEFT JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one WHERE hr.student_form_one IS NULL OR sft.student_form_one IS NULL"); 
        
            $siteSupervisorFormsOnly = $flQuery2->getResult();
            
                
            $siteSupervisorFormCompleted = array();
            
            foreach($siteSupervisorFormsOnly as $siteSupervisorFormOnly){
                $siteSupervisorFormOnly["lastUser"] = "Site Supervisor";
                
                $siteSupervisorFormCompleted[] = $siteSupervisorFormOnly;
                
            }
            
            $flQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName, hr.approveDate as lastUpdated FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one INNER JOIN AppBundle:HRForm hr WITH sfo.id = hr.student_form_one LEFT JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one WHERE sft.student_form_one IS NULL"); 
        
            $hrFormsOnly = $flQuery2->getResult();
            
                
            $hrFormCompleted = array();
            
            foreach($hrFormsOnly as $hrFormOnly){
                $hrFormOnly["lastUser"] = "Human Resources";
                
                $hrFormCompleted[] = $hrFormOnly;
                
            }
            
            $flQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName, sft.submitDate as lastUpdated FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one INNER JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one LEFT JOIN AppBundle:HRForm hr WITH sfo.id = hr.student_form_one WHERE hr.student_form_one IS NULL"); 
        
            $studentFormTwosOnly = $flQuery2->getResult();
            
                
            $studentFormTwoCompleted = array();
            
            foreach($studentFormTwosOnly as $studentFormTwoOnly){
                $studentFormTwoOnly["lastUser"] = "Student (Form Two)";
                
                $studentFormTwoCompleted[] = $studentFormTwoOnly;
                
            }
            
            $flQuery2 = $em->createQuery("SELECT sfo.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName, hr.approveDate as lastUpdated FROM AppBundle:StudentFormOne sfo INNER JOIN AppBundle:SiteSupervisorForm ssf WITH sfo.id = ssf.student_form_one AND sfo.workAuthorization = 0 INNER JOIN AppBundle:HRForm hr WITH sfo.id = hr.student_form_one INNER JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one LEFT JOIN AppBundle:InternationalOfficeForm io WITH sfo.id = io.student_form_one WHERE io.student_form_one IS NULL"); 
        
            $ioFormsOnly = $flQuery2->getResult();
            
                
            $ioFormCompleted = array();
            
            foreach($ioFormsOnly as $ioFormOnly){
                $ioFormOnly["lastUser"] = "Human Resources/Student";
                
                $ioFormCompleted[] = $ioFormOnly;
                
            }
            
            
            $studentFormOnes = array_merge($studentFormOneCompleted, $siteSupervisorFormCompleted,$hrFormCompleted, $studentFormTwoCompleted, $ioFormCompleted);
            
            // function cmp($a, $b)
            // {
            //     return strcmp($a["lastUpdated"], $b["lastupdated"]);
            // }
            
            usort($studentFormOnes, function ($a, $b) {
                $a_val = $a['lastUpdated'];
                $b_val = $b['lastUpdated'];
                
                if($a_val > $b_val) return 1;
                if($a_val < $b_val) return -1;
                return 0;
            });
            
            
            // $studentFormOnes = usort($studentFormOnesUnsorted, "cmp");
            
            
            
            
            dump($studentFormOnes);
            
            // $flQuery3 = $em->createQuery("SELECT fl.id, sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:Facultyliaisonform fl WHERE sfo.id = fl.student_form_one"); 
        
            // $facultyLiaisonForms = $flQuery3->getResult();
        
        
        // if ($this->getUser()) {
        return $this->render('facultyliaisonform/index.html.twig', array(
            'studentFormOnesReady' => $studentFormOnesReady,
            'studentFormOnes' => $studentFormOnes,
            'facultyLiaisonForms' => $facultyLiaisonForms,
        ));
        }else{
            return $this->redirectToRoute('studentformone_index');
        
        }
    }

    /**
     * Creates a new facultyLiaisonForm entity.
     *
     * @Route("/new", name="facultyliaisonform_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        // $facultyLiaisonForm = new Facultyliaisonform();
        // $form = $this->createForm('AppBundle\Form\FacultyLiaisonFormType', $facultyLiaisonForm);
        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     $em = $this->getDoctrine()->getManager();
        //     $em->persist($facultyLiaisonForm);
        //     $em->flush();

        //     return $this->redirectToRoute('facultyliaisonform_show', array('id' => $facultyLiaisonForm->getId()));
        // }

        // return $this->render('facultyliaisonform/new.html.twig', array(
        //     'facultyLiaisonForm' => $facultyLiaisonForm,
        //     'form' => $form->createView(),
        // ));
        
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
            dump($siteSupervisorForm);
            
            $query = $em->createQuery("SELECT hr FROM AppBundle:StudentFormOne sfo JOIN AppBundle:HRForm hr  WHERE sfo.id = hr.student_form_one AND sfo.id = :id")
                ->setParameter("id", $studentID);
        
            // dump($query);
            $hrFormArray = $query->getResult();
                        // dump($siteSupervisorFormArray);
            $hrForm = $hrFormArray[0];
            dump($hrForm);
            
            $query = $em->createQuery("SELECT sft FROM AppBundle:StudentFormOne sfo JOIN AppBundle:StudentFormTwo sft  WHERE sfo.id = sft.student_form_one AND sfo.id = :id")
                ->setParameter("id", $studentID);
        
            // dump($query);
            $studentFormTwoArray = $query->getResult();
                        // dump($siteSupervisorFormArray);
            dump($studentFormTwoArray);
            $studentFormTwo = $studentFormTwoArray[0];
            
            
        }
        
        $facultyLiaisonForm = new FacultyLiaisonForm($this->studentFormOne);
        $form = $this->createForm('AppBundle\Form\FacultyLiaisonFormType', $facultyLiaisonForm);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($facultyLiaisonForm);
            $em->flush();
            return $this->redirectToRoute('facultyliaisonform_show', array('id' => $facultyLiaisonForm->getId()));
        }
        return $this->render('facultyliaisonform/new.html.twig', array(
            'studentFormOne' => $this->studentFormOne,
            'siteSupervisorForm' => $siteSupervisorForm,
            'hRForm' => $hrForm,
            'studentFormTwo' => $studentFormTwo,
            'facultyLiaisonForm' => $facultyLiaisonForm,
            'form' => $form->createView(),
        ));
    
    }

    /**
     * Finds and displays a facultyLiaisonForm entity.
     *
     * @Route("/{id}", name="facultyliaisonform_show")
     * @Method("GET")
     */
    public function showAction(FacultyLiaisonForm $facultyLiaisonForm)
    {
        
        $this->studentID = $facultyLiaisonForm->getStudentFormOne();
        $user = $this->getUser();
        
        $username = $user->getUsername();
        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_FL_ADMIN')){
            
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
        
        
            $deleteForm = $this->createDeleteForm($facultyLiaisonForm);
    
            return $this->render('facultyliaisonform/show.html.twig', array(
                'studentFormOne' => $this->studentFormOne,
                'siteSupervisorForm' => $siteSupervisorForm,
                'hRForm' => $hrForm,
                'studentFormTwo' => $studentFormTwo,
                'facultyLiaisonForm' => $facultyLiaisonForm,
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing facultyLiaisonForm entity.
     *
     * @Route("/{id}/edit", name="facultyliaisonform_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FacultyLiaisonForm $facultyLiaisonForm)
    {
        $deleteForm = $this->createDeleteForm($facultyLiaisonForm);
        $editForm = $this->createForm('AppBundle\Form\FacultyLiaisonFormType', $facultyLiaisonForm);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('facultyliaisonform_edit', array('id' => $facultyLiaisonForm->getId()));
        }

        return $this->render('facultyliaisonform/edit.html.twig', array(
            'facultyLiaisonForm' => $facultyLiaisonForm,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a facultyLiaisonForm entity.
     *
     * @Route("/{id}", name="facultyliaisonform_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FacultyLiaisonForm $facultyLiaisonForm)
    {
        $form = $this->createDeleteForm($facultyLiaisonForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($facultyLiaisonForm);
            $em->flush();
        }

        return $this->redirectToRoute('facultyliaisonform_index');
    }

    /**
     * Creates a form to delete a facultyLiaisonForm entity.
     *
     * @param FacultyLiaisonForm $facultyLiaisonForm The facultyLiaisonForm entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FacultyLiaisonForm $facultyLiaisonForm)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('facultyliaisonform_delete', array('id' => $facultyLiaisonForm->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
