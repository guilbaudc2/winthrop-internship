<?php
// Autotmatically generated by Symfony. Adjusted by Catherine Guilbaud

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
        
        $studentFormOnes = $em->getRepository('AppBundle:StudentFormOne')->findBy(array('emailAddress' => $emailAddress));

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
            $studentEmail = $form["emailAddress"]->getData();
            
            $siteSuperEmail = $form["siteSuperEmail"]->getData();
            $siteSuperName = $form["siteSuperName"]->getData();
            $accessCode = $studentFormOne->getSiteSuperAccessCode();
            
            $siteSuperFormURL = "http://18.233.91.151:8080/WinthropInternship/web/app_dev.php/sitesupervisorform";
            $studentFormTwoURL = "http://18.233.91.151:8080/WinthropInternship/web/app_dev.php/studentformtwo";
            
            $message = (new \Swift_Message('Success Submission of Winthrop Internship Form Part 1'))
                ->setFrom('cce@winthrop.edu')
                ->setTo($studentEmail)
                ->setBody(
                    $this->renderView(
                        'emails/StudentFormOne/student_notification.html.twig',
                        array('studentFName' => $studentFName,
                              'studentFormTwoURL' => $studentFormTwoURL,
                        )
                    ),
                    'text/html'
                )
                ->addPart(
                    $this->renderView(
                        'emails/StudentFormOne/student_notification.txt.twig',
                        array('studentFName' => $studentFName,
                              'studentFormTwoURL' => $studentFormTwoURL,
                        )
                    ),
                    'text/plain'
                );
            $mailer->send($message);
            
            $message = (new \Swift_Message('Access Code for Winthrop Internship Form'))
                ->setFrom('cce@winthrop.edu')
                ->setTo($siteSuperEmail)
           ->setBody(
                    $this->renderView(
                        'emails/StudentFormOne/site_super_url.html.twig',
                        array('siteSuperName' => $siteSuperName,
                              'studentFName' => $studentFName,
                              'studentLName' => $studentLName,
                              'siteSuperFormURL' => $siteSuperFormURL,
                        )
                    ),
                    'text/html'
                )
                ->addPart(
                    $this->renderView(
                        'emails/StudentFormOne/site_super_url.txt.twig',
                        array('siteSuperName' => $siteSuperName,
                              'studentFName' => $studentFName,
                              'studentLName' => $studentLName,
                              'siteSuperFormURL' => $siteSuperFormURL,
                        )
                    ),
                    'text/plain'
                );
            $mailer->send($message);
            
            $message = (new \Swift_Message('Action Required for Winthrop Internship Form'))
                ->setFrom('cce@winthrop.edu')
                ->setTo($siteSuperEmail)
           ->setBody(
                    $this->renderView(
                        'emails/StudentFormOne/site_super_access_code.html.twig',
                        array('siteSuperName' => $siteSuperName,
                              'studentFName' => $studentFName,
                              'studentLName' => $studentLName,
                              'accessCode' => $accessCode,
                        )
                    ),
                    'text/html'
                )
                ->addPart(
                    $this->renderView(
                        'emails/StudentFormOne/site_super_access_code.txt.twig',
                        array('siteSuperName' => $siteSuperName,
                              'studentFName' => $studentFName,
                              'studentLName' => $studentLName,
                              'accessCode' => $accessCode,
                        )
                    ),
                    'text/plain'
                );
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
            
            $em = $this->getDoctrine()->getManager();
        
            // $repo =  $this->getDoctrine()->getRepository('AppBundle:SiteSupervisorForm');

            $query = $em->createQuery("SELECT ssf FROM AppBundle:SiteSupervisorForm ssf JOIN AppBundle:StudentFormOne sfo WHERE sfo.id = ssf.student_form_one AND sfo.id = :id");
            $query->setParameter("id", $studentFormOne->getId());
        
            $siteSupervisorForm = $query->getResult();
            // var_dump($studentInfo);
            $deleteForm = $this->createDeleteForm($studentFormOne);
    
            return $this->render('studentformone/show.html.twig', array(
                // 'siteSuperForm' => $siteSupervisorForm,
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
