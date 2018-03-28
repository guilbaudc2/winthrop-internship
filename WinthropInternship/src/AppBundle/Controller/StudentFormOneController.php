<?php

namespace AppBundle\Controller;

use AppBundle\Entity\StudentFormOne;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Studentformone controller.
 *
 * @Route("studentformone")
 */
class StudentFormOneController extends Controller
{
    /**
     * Lists all studentFormOne entities.
     *
     * @Route("/", name="studentformone_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        
        $username = $user->getUsername();
        
        $emailAddress = $username . "@winthrop.edu";
        
        $em = $this->getDoctrine()->getManager();
        
        // $query = $em->createQuery('SELECT u.id FROM AppBundle:StudentFormOne u WHERE u.userName = :userName')
        //     ->setParameter('userName', $username);
        
        // $em = $this->getDoctrine()->getManager();
        
        $studentFormOnes= $em->getRepository('AppBundle:StudentFormOne')->findBy(array('emailAddress' => $emailAddress));

        // $studentFormOnes = $em->getRepository('AppBundle:StudentFormOne')->findAll();
        
        if ($this->get('security.authorization_checker')->isGranted('ROLE_HR_ADMIN')) {
            return $this->redirectToRoute('hrform_index');
        }
        
        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {

                $studentFormOnes = $em->getRepository('AppBundle:StudentFormOne')->findAll();
                
                return $this->render('studentformone/index.html.twig', array(
                    'studentFormOnes' => $studentFormOnes,
            ));
        }
        
        if ($this->getUser()) {
        return $this->render('studentformone/index.html.twig', array(
            'studentFormOnes' => $studentFormOnes,
        ));
        }
        return $this->render('studentformone/index.html.twig');
    }
    
    //     public function indexAction()
    // {
    //     if ($this->getUser()) {

    //         $user = $this->getUser();
    //     }
    //     $username = $user->getUsername();
        
    //     $emailAddress = $username . "@winthrop.edu";
        
        
    //     $em = $this->getDoctrine()->getManager();
        
    //     if ($this->get('security.authorization_checker')->isGranted('ROLE_STUDENT') && $this->getUser) {
    //         $studentFormOnes= $em->getRepository('AppBundle:StudentFormOne')->findBy(array('emailAddress' => $emailAddress));
    //     }
    //     if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {
    //         $studentFormOnes = $em->getRepository('AppBundle:StudentFormOne')->findAll();
            
    //         return $this->render('studentformone/index.html.twig', array(
    //             'studentFormOnes' => $studentFormOnes,
    //         ));
    //     }
    
        // if ($this->get('security.authorization_checker')->isGranted('ROLE_HR_ADMIN')) {
        //     return $this->redirectToRoute('hrform');
        // }
        
    //     if $this->get('security.authorization_checker')->isGranted('ROLE_FL_ADMIN')) {
    //         $studentFormOnes= $em->getRepository('AppBundle:StudentFormOne')->findBy(array('emailAddress' => $emailAddress));
    //     }
    //     $query = $em->createQuery('SELECT u.id FROM AppBundle:StudentFormOne u WHERE u.userName = :userName')
    //         ->setParameter('userName', $username);


    //     return $this->render('studentformone/index.html.twig');
    // }

    /**
     * Creates a new studentFormOne entity.
     *
     * @Route("/new", name="studentformone_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, \Swift_Mailer $mailer)
    {
        $studentFormOne = new Studentformone();
        $form = $this->createForm('AppBundle\Form\StudentFormOneType', $studentFormOne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($studentFormOne);
            $em->flush();
            
            $studentFName = $form["firstName"]->getData();
            $studentLName = $form["lastName"]->getData();
            
            $siteSuperEmail = $form["siteSuperEmail"]->getData();
            $siteSuperName = $form["siteSuperName"]->getData();
            $accessCode = $studentFormOne->getSiteSuperAccessCode();
            
            $siteSuperFormURL = "http://54.90.69.105:8080/WinthropInternship/web/app_dev.php/sitesupervisorform";
            
            $message = (new \Swift_Message('Action Required for Winthrop Internship Form'))
                ->setFrom('cce@winthrop.edu')
                ->setTo($siteSuperEmail)
                // ->setBody($accessCode)
           ->setBody("Dear $siteSuperName,<br><br> You are receiving this email because you are listed as the Site Supervisor for $studentFName $studentLName's Winthrop Internship. To complete your portion of the application please visit <a href='$siteSuperFormURL'>$siteSuperFormURL</a> and enter your email address and the access code which will be provided separetely from this email. <br><br> If you do not receive the access code or have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at <a href='tel:1-803-323-2141'>(803)323-2141</a> or email at cce@winthrop.edu for assistance. <br><br> Sincerely, <br> Career & Civic Engagement<br> <a href='https://www.winthrop.edu/cce'>www.winthrop.edu/cce</a>", 'text/html')
            ->addPart("Dear $siteSuperName,\r\n\r\nYou are receiving this email because you are listed as the Site Supervisor for $studentFName $studentLName's Winthrop Internship. To complete your portion of the application please visit $siteSuperFormURL and enter your email address and the access code which will be provided separetely from this email.\r\n\r\nIf you do not receive the access code or have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at (803)323-2141 or email at cce@winthrop.edu for assistance.\r\n\r\nSincerely,\r\nCareer & Civic Engagement\r\nwww.winthrop.edu/cce", 'text/plain');
            $mailer->send($message);
            
            $message = (new \Swift_Message('Access Code for Winthrop Internship Form'))
                ->setFrom('cce@winthrop.edu')
                ->setTo($siteSuperEmail)
                // ->setBody($accessCode)
           ->setBody("Dear $siteSuperName,<br><br> You are receiving this email because you are listed as the Site Supervisor for $studentFName $studentLName's Winthrop Internship. To complete your portion of the application please enter the following access code in the email that included the Intership Form's URL. <br><br> Access Code: $accessCode <br><br> If you did not receive the Form URL or have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at <a href='tel:1-803-323-2141'>(803)323-2141</a> or email at cce@winthrop.edu for assistance. <br><br> Sincerely, <br> Career & Civic Engagement<br> <a href='https://www.winthrop.edu/cce'>www.winthrop.edu/cce</a>", 'text/html')
            ->addPart("Dear $siteSuperName,\r\n\r\nYou are receiving this email because you are listed as the Site Supervisor for $studentFName $studentLName's Winthrop Internship. To complete your portion of the application please enter the following access code in the email that included the Internship Form's URL.\r\n\r\nAccess Code: $accessCode\r\n\r\nIf you did not receive the Form URL or have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at (803)323-2141 or email at cce@winthrop.edu for assistance.\r\n\r\nSincerely,\r\nCareer & Civic Engagement\r\nwww.winthrop.edu/cce", 'text/plain');
            $mailer->send($message);

            return $this->redirectToRoute('studentformone_show', array('id' => $studentFormOne->getId()));
        }

        return $this->render('studentformone/new.html.twig', array(
            'studentFormOne' => $studentFormOne,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a studentFormOne entity.
     *
     * @Route("/{id}", name="studentformone_show")
     * @Method("GET")
     */
    public function showAction(StudentFormOne $studentFormOne)
    {
        $user = $this->getUser();
        
        $username = $user->getUsername();
        
        // if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') || in_array($username, $studentFormOne)){
        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') || $username == $studentFormOne->getUserName()){
            // $username == "$studentFormOne") {
            $deleteForm = $this->createDeleteForm($studentFormOne);
    
            return $this->render('studentformone/show.html.twig', array(
                'studentFormOne' => $studentFormOne,
                'delete_form' => $deleteForm->createView(),
            ));
        }else {
            return $this->redirectToRoute('studentformone_index');
        }
    }

    /**
     * Displays a form to edit an existing studentFormOne entity.
     *
     * @Route("/{id}/edit", name="studentformone_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, StudentFormOne $studentFormOne)
    {
        $deleteForm = $this->createDeleteForm($studentFormOne);
        $editForm = $this->createForm('AppBundle\Form\StudentFormOneType', $studentFormOne);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('studentformone_edit', array('id' => $studentFormOne->getId()));
        }

        return $this->render('studentformone/edit.html.twig', array(
            'studentFormOne' => $studentFormOne,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a studentFormOne entity.
     *
     * @Route("/{id}", name="studentformone_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, StudentFormOne $studentFormOne)
    {
        $form = $this->createDeleteForm($studentFormOne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($studentFormOne);
            $em->flush();
        }

        return $this->redirectToRoute('studentformone_index');
    }

    /**
     * Creates a form to delete a studentFormOne entity.
     *
     * @param StudentFormOne $studentFormOne The studentFormOne entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(StudentFormOne $studentFormOne)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('studentformone_delete', array('id' => $studentFormOne->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
