<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * About Controller
 * 
 * @Route("/generatereports")
 * 
 */
class ReportController extends Controller
{
    
    /**
    * @Route("/", name="generatereports")
    */
    public function indexAction(Request $request)
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {
            // replace this example code with whatever you need
            return $this->render('generatereports/generatereports.html.twig', array(
                'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            ));
        }else{
            return $this->redirectToRoute('studentformone_index');
        }
    }
    
    /**
     * @Route("/report/bannerCompletedForms.csv", name="banner_export_file")
     */
    public function bannerExportAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $ccQuery3 = $em->createQuery("SELECT sfo FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one");
        
        // $ccQuery3 = $em->createQuery("SELECT sfo, ssf, sft, hr, fl, cc FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:StudentFormTwo sft WHERE sfo.id = sft.student_form_one JOIN AppBundle:HRForm hr WHERE sfo.id = hr.student_form_one JOIN AppBundle:Facultyliaisonform fl WHERE sfo.id = fl.student_form_one JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one");
        
        $students = $ccQuery3->getResult();
        
        $rows = array();
        
        $headers = array("SEM,NO,MAJ,WID#, INTERN NAME (Last, First), Student EMAIL, Student TELEPHONE,AGREEMENT DATE,AGREE, BEGIN, END, FACULTY, PAID,	COURSE ID,IND SEC,	Hours, Organization Name, Direct Internship Supervisor,Physical Address,Supervisor Phone, Supervisor Email");
        $rows[] = implode(',', $headers);
        
        foreach ($students as $event) {
            $innerQuery = $em->createQuery("SELECT ssf FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $siteSupervisorForm = $innerQuery->getResult();
            
            $innerQuery = $em->createQuery("SELECT sft FROM AppBundle:StudentFormOne sfo JOIN AppBundle:StudentFormTwo sft WHERE sfo.id = sft.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $studentFormTwo = $innerQuery->getResult();
            $innerQuery = $em->createQuery("SELECT hr FROM AppBundle:StudentFormOne sfo JOIN AppBundle:HRForm hr WHERE sfo.id = hr.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $hrForm = $innerQuery->getResult();
            
            $innerQuery = $em->createQuery("SELECT fl FROM AppBundle:StudentFormOne sfo JOIN AppBundle:FacultyLiaisonForm fl WHERE sfo.id = fl.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $flForm = $innerQuery->getResult();
            
            $innerQuery = $em->createQuery("SELECT cc FROM AppBundle:StudentFormOne sfo JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $ccForm = $innerQuery->getResult();
            
            // var_dump($siteSupervisorForm[0]->getForProfit());

            $forProfit = $siteSupervisorForm[0]->getForProfit() ? 'Yes' : 'No';
            $paid = $siteSupervisorForm[0]->getPaid() ? 'Yes' : 'No';
            $approved = $ccForm[0]->getApprove() ? 'Yes' : 'No';
            
            $subject = (string)$siteSupervisorForm[0]->getPhysicalAddress();
            
            $pattern = '/,|,"/';
            $t2=preg_replace ('/,|(".*")/','$0*',$subject);
            $t2=str_replace(',','*',$t2);
            $physicalAddress =str_replace('*',',',$t2);
            
            $data = array($event->getSemesterEnrolled(), $event->getYearEnrolled()->format('Y'), $event->getMajor(), $event->getCWID(), "{$event->getLastName()}, {$event->getFirstName()}", $event->getEmailAddress(), (string)$event->getPhoneNumber(), $ccForm[0]->getApproveDate()->format("m/d/Y"), $approved, $siteSupervisorForm[0]->getInternshipProjectedStartDate()->format("m/d/Y"), $siteSupervisorForm[0]->getInternshipProjectedEndDate()->format("m/d/Y"), $event->getFacultyLiaison(), $paid, $event->getClassEnrolled(),$event->getClassEnrolled(), $siteSupervisorForm[0]->getEstimatedHours(), $siteSupervisorForm[0]->getOrganizationName(), $siteSupervisorForm[0]->getDirectInternshipSupervisor(),$physicalAddress,$siteSupervisorForm[0]->getSupervisorPhone(), $siteSupervisorForm[0]->getSupervisorEmail());
            
    
            $rows[] = implode(',', $data);
        }
    
        $content = implode("\n", $rows);
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv');
    
        return $response;
    }
    
    /**
     * @Route("/report/completedForms.csv", name="complete_forms_export_file")
     */
    public function completedFormsAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $ccQuery3 = $em->createQuery("SELECT sfo FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one");
        
        // $ccQuery3 = $em->createQuery("SELECT sfo, ssf, sft, hr, fl, cc FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:StudentFormTwo sft WHERE sfo.id = sft.student_form_one JOIN AppBundle:HRForm hr WHERE sfo.id = hr.student_form_one JOIN AppBundle:Facultyliaisonform fl WHERE sfo.id = fl.student_form_one JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one");
        
        $students = $ccQuery3->getResult();
        
        $rows = array();
        foreach ($students as $event) {
            $innerQuery = $em->createQuery("SELECT ssf FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $siteSupervisorFormArray = $innerQuery->getResult();
            $siteSupervisorForm = $siteSupervisorFormArray[0];
            
            $innerQuery = $em->createQuery("SELECT sft FROM AppBundle:StudentFormOne sfo JOIN AppBundle:StudentFormTwo sft WHERE sfo.id = sft.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $studentFormTwo = $innerQuery->getResult();
            $innerQuery = $em->createQuery("SELECT hr FROM AppBundle:StudentFormOne sfo JOIN AppBundle:HRForm hr WHERE sfo.id = hr.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $hrForm = $innerQuery->getResult();
            
            $innerQuery = $em->createQuery("SELECT fl FROM AppBundle:StudentFormOne sfo JOIN AppBundle:FacultyLiaisonForm fl WHERE sfo.id = fl.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $flForm = $innerQuery->getResult();
            
            $innerQuery = $em->createQuery("SELECT cc FROM AppBundle:StudentFormOne sfo JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $ccForm = $innerQuery->getResult();
            
            $data = array($event->getClassEnrolled(), $event->getSemesterEnrolled(), $event->getYearEnrolled()->format('Y'), $event->getCWID(), $event->getFirstName(), $event->getLastName(),  $event->getFacultyLiaison(), $paid, $siteSupervisorForm[0]->getEstimatedHours(), $siteSupervisorForm[0]->getOrganizationName(), $siteSupervisorForm[0]->getDirectInternshipSupervisor(),$physicalAddress,$siteSupervisorForm[0]->getSupervisorPhone(), $siteSupervisorForm[0]->getSupervisorEmail());
            
    
            $rows[] = implode(',', $data);
        }
    
        $content = implode("\n", $rows);
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv');
    
        return $response;
    }
    
    /**
     * @Route("/report/unpaid.csv", name="unpaid_export_file")
     */
    public function unpaidInternshipsAction()
    {
        $user = $this->getUser();
                    
        $name = $user->getFirstName() . " " . $user->getLastName();
        $em = $this->getDoctrine()->getManager();
        
        $ccQuery3 = $em->createQuery("SELECT sfo FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one AND ssf.paid = 0 JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one ORDER BY sfo.classEnrolled ASC");
        
        // $ccQuery3 = $em->createQuery("SELECT sfo, ssf, sft, hr, fl, cc FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:StudentFormTwo sft WHERE sfo.id = sft.student_form_one JOIN AppBundle:HRForm hr WHERE sfo.id = hr.student_form_one JOIN AppBundle:Facultyliaisonform fl WHERE sfo.id = fl.student_form_one JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one");
        
        $students = $ccQuery3->getResult();
        
        $rows = array();

        $headers = array("Course Prefix and Number, Semester Enrolled, Year Enrolled, Student WID#, Intern First Name, Intern Last Name, Number of Student's Hours worked per week, Organization Name, Course Description, Student's Supervised by (Faculty Liaison), Form Prepared By, Date Collected");
        $rows[] = implode(',', $headers);
        foreach ($students as $event) {
            $innerQuery = $em->createQuery("SELECT ssf FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $siteSupervisorForm = $innerQuery->getResult();
            
            $innerQuery = $em->createQuery("SELECT sft FROM AppBundle:StudentFormOne sfo JOIN AppBundle:StudentFormTwo sft WHERE sfo.id = sft.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $studentFormTwo = $innerQuery->getResult();
            $innerQuery = $em->createQuery("SELECT hr FROM AppBundle:StudentFormOne sfo JOIN AppBundle:HRForm hr WHERE sfo.id = hr.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $hrForm = $innerQuery->getResult();
            
            $innerQuery = $em->createQuery("SELECT fl FROM AppBundle:StudentFormOne sfo JOIN AppBundle:FacultyLiaisonForm fl WHERE sfo.id = fl.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $flForm = $innerQuery->getResult();
            
            $innerQuery = $em->createQuery("SELECT cc FROM AppBundle:StudentFormOne sfo JOIN AppBundle:CareerConsultantForm cc WHERE sfo.id = cc.student_form_one AND sfo.id = :id");
            $innerQuery->setParameter("id", $event->getId());
            
            $ccForm = $innerQuery->getResult();
            
            $perWeekHoursWorked = $siteSupervisorForm[0]->getEstimatedHours()/$siteSupervisorForm[0]->getTotalWeeks();
            
            // dump($event);
            
            $data = array($event->getClassEnrolled(), $event->getSemesterEnrolled(), $event->getYearEnrolled()->format('Y'), $event->getCWID(), $event->getFirstName(), $event->getLastName(), $perWeekHoursWorked, $siteSupervisorForm[0]->getOrganizationName(), " ", $event->getFacultyLiaison(), $name, date("Y/m/d"));
            
    
            $rows[] = implode(',', $data);
        }
    
        $content = implode("\n", $rows);
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv');
    
        return $response;
    }

}