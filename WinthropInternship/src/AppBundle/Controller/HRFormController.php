<?php

namespace AppBundle\Controller;

use AppBundle\Entity\HRForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Hrform controller.
 *
 * @Route("hrform")
 */
class HRFormController extends Controller
{
    /**
     * Lists all hRForm entities.
     *
     * @Route("/", name="hrform_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $repo =  $this->getDoctrine()->getRepository('AppBundle:StudentFormOne');
        // $queryBuilder = $repo->createQueryBuilder("w");
        // $queryBuilder
        //     ->select('s.firstName', 's.lastName', 'h.completedTitleIX')
        //     ->from('student_form_one', 's')
        //     ->innerJoin('s', 'h_r_form', 'h', 's.id != h.student_form_one_id');
        
        $query = $em->createQuery("SELECT sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one LEFT JOIN AppBundle:HRform h WHERE sfo.id != h.student_form_one");
        
        $studentFormOnes = $query->getResult();
        // $queryBuilder
        //     ->select('u.id', 'u.name', 'p.number')
        //     ->from('users', 'u')
        //     ->innerJoin('u', 'phonenumbers', 'p', 'u.id = p.user_id')
//          $repo =  $this->getDoctrine()->getRepository('MyBundle:Models');
//              $query = $repo->createQueryBuilder('m')
//              ->innerJoin('m.phonenumbers', 'p')
//              ->where('m.id = :id')
//              ->setParameter('id', $id);
        
        // $query = $em->createQuery('SELECT u.id FROM AppBundle:StudentFormOne u LEFT JOIN AppBundle:HRForm)
        //     h WHERE u.hr_form = NULL');
        //     ->where('u.profile is NULL');
        
        // $query = $em->createQuerybuilder('SELECT s FROM AppBundle:StudentFormOne s')
        //     ->leftJoin('s.hr_form', 'h')
        //     ->where('h.id is NULL');
        
        // $studentFormOnes = $queryBuilder->getResult();
        
        // $studentFormOnes = $em->getRepository('AppBundle:StudentFormOne')->findAll();
         
        
        $query = $em->createQuery("SELECT sfo.firstName, sfo.lastName, sfo.emailAddress, sfo.cWID, ssf.organizationName FROM AppBundle:StudentFormOne sfo JOIN AppBundle:SiteSupervisorForm ssf WHERE sfo.id = ssf.student_form_one JOIN AppBundle:HRform h WHERE sfo.id = h.student_form_one"); 
        // $hRForms = $em->getRepository('AppBundle:HRForm')->findAll();
        $hRForms = $query->getResult();
        
    //     $entity = $em
    // ->getRepository('MyBundle:MyEntity')
    // ->createQueryBuilder('e')
    // ->join('e.idRelatedEntity', 'r')
    // ->where('r.foo = 1')
    // ->getQuery()
    // ->getResult();
    
    //     $studentFormOnes = $em->getRepository('AppBundle:StudentFormOne')
    //         ->createQueryBuilder('s')
    //         ->join('s.site_supervisor_form', 'r')
    //         ->where('s.site_supervisor_form = r.student_form_one')
    //         ->getQuery()
    //         ->getResult();
            
    //         $qb->select('p')
    // ->from('BRBProductBundle:Product', 'p')
    // ->join('p.category', 'c')
    // ->where('1 = 1');
            
        
        if ($this->getUser()) {
            return $this->render('hrform/index.html.twig', array(
                'studentFormOnes' => $studentFormOnes,
                'hRForms' => $hRForms,
            ));
        }else{
            return $this->redirectToRoute('homepage');
        }
    }

    /**
     * Creates a new hRForm entity.
     *
     * @Route("/new", name="hrform_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $hRForm = new Hrform();
        $form = $this->createForm('AppBundle\Form\HRFormType', $hRForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($hRForm);
            $em->flush();

            return $this->redirectToRoute('hrform_show', array('id' => $hRForm->getId()));
        }

        return $this->render('hrform/new.html.twig', array(
            'hRForm' => $hRForm,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a hRForm entity.
     *
     * @Route("/{id}", name="hrform_show")
     * @Method("GET")
     */
    public function showAction(HRForm $hRForm)
    {
        $deleteForm = $this->createDeleteForm($hRForm);

        return $this->render('hrform/show.html.twig', array(
            'hRForm' => $hRForm,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing hRForm entity.
     *
     * @Route("/{id}/edit", name="hrform_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, HRForm $hRForm)
    {
        $deleteForm = $this->createDeleteForm($hRForm);
        $editForm = $this->createForm('AppBundle\Form\HRFormType', $hRForm);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('hrform_edit', array('id' => $hRForm->getId()));
        }

        return $this->render('hrform/edit.html.twig', array(
            'hRForm' => $hRForm,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a hRForm entity.
     *
     * @Route("/{id}", name="hrform_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, HRForm $hRForm)
    {
        $form = $this->createDeleteForm($hRForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($hRForm);
            $em->flush();
        }

        return $this->redirectToRoute('hrform_index');
    }

    /**
     * Creates a form to delete a hRForm entity.
     *
     * @param HRForm $hRForm The hRForm entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HRForm $hRForm)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hrform_delete', array('id' => $hRForm->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
