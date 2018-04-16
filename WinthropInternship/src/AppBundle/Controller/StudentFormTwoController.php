<?php

namespace AppBundle\Controller;

use AppBundle\Entity\StudentFormTwo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Studentformtwo controller.
 *
 * @Route("studentformtwo")
 */
class StudentFormTwoController extends Controller
{
    protected $studentFormTwosApp;
    
    /**
     * Lists all studentFormTwo entities.
     *
     * @Route("/", name="studentformtwo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        
        
        if(!$this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')){
            
            $user = $this->getUser();
            
            $username = $user->getUsername();
            
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT sfo FROM AppBundle:StudentFormOne sfo LEFT JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one WHERE sfo.userName = :userName AND sft.student_form_one IS NULL')
                ->setParameter('userName', $username);
            $studentFormOnes = $query->getResult();
            dump($studentFormOnes);
            
            $query = $em->createQuery('SELECT sft FROM AppBundle:StudentFormOne sfo JOIN AppBundle:StudentFormTwo sft WITH sfo.id = sft.student_form_one WHERE sfo.userName = :userName')
                ->setParameter('userName', $username);
            $studentFormTwos = $query->getResult();
            dump($studentFormTwos);
        } else{
            $em = $this->getDoctrine()->getManager();        
            $query = $em->createQuery("SELECT sft FROM AppBundle:StudentFormTwo sft JOIN AppBundle:StudentFormOne sfo WHERE sfo.id = sft.student_form_one");
            $studentFormTwos = $query->getResult();
        }
        
        return $this->render('studentformtwo/index.html.twig', array(
            'studentFormOnes' => $studentFormOnes,
            'studentFormTwos' => $studentFormTwos,
        ));
    }

    /**
     * Creates a new studentFormTwo entity.
     *
     * @Route("/new", name="studentformtwo_new")
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
        
        // $user = $this->getUser();
        
        // $username = $user->getUsername();
        
        // $em = $this->getDoctrine()->getManager();
        // $query = $em->createQuery('SELECT u.id FROM AppBundle:StudentFormOne u WHERE u.userName = :userName')
        //     ->setParameter('userName', $username);
        // $studentFormOneArray = $query->getResult();
        // $studentFormOneID = $studentFormOneArray[0]['id'];
        }
        
        $studentFormTwo = new Studentformtwo($this->studentFormOne);
        $form = $this->createForm('AppBundle\Form\StudentFormTwoType', $studentFormTwo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($studentFormTwo);
            $em->flush();

            return $this->redirectToRoute('studentformtwo_show', array('id' => $studentFormTwo->getId()));
        }

        return $this->render('studentformtwo/new.html.twig', array(
            'studentFormTwo' => $studentFormTwo,
            'form' => $form->createView(),
        ));
        
        //return $this->render('studentformtwo/new.html.twig');
    }

    /**
     * Finds and displays a studentFormTwo entity.
     *
     * @Route("/{id}", name="studentformtwo_show")
     * @Method("GET")
     */
    public function showAction(StudentFormTwo $studentFormTwo)
    {
        $deleteForm = $this->createDeleteForm($studentFormTwo);
        
        dump($studentFormTwo);

        return $this->render('studentformtwo/show.html.twig', array(
            'studentFormTwo' => $studentFormTwo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing studentFormTwo entity.
     *
     * @Route("/{id}/edit", name="studentformtwo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, StudentFormTwo $studentFormTwo)
    {
        $deleteForm = $this->createDeleteForm($studentFormTwo);
        $editForm = $this->createForm('AppBundle\Form\StudentFormTwoType', $studentFormTwo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('studentformtwo_edit', array('id' => $studentFormTwo->getId()));
        }

        return $this->render('studentformtwo/edit.html.twig', array(
            'studentFormTwo' => $studentFormTwo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a studentFormTwo entity.
     *
     * @Route("/{id}", name="studentformtwo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, StudentFormTwo $studentFormTwo)
    {
        $form = $this->createDeleteForm($studentFormTwo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($studentFormTwo);
            $em->flush();
        }

        return $this->redirectToRoute('studentformtwo_index');
    }

    /**
     * Creates a form to delete a studentFormTwo entity.
     *
     * @param StudentFormTwo $studentFormTwo The studentFormTwo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(StudentFormTwo $studentFormTwo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('studentformtwo_delete', array('id' => $studentFormTwo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
