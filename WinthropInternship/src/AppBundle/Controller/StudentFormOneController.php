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
        $em = $this->getDoctrine()->getManager();

        $studentFormOnes = $em->getRepository('AppBundle:StudentFormOne')->findAll();
        
        if ($this->getUser()) {
        return $this->render('studentformone/index.html.twig', array(
            'studentFormOnes' => $studentFormOnes,
        ));
        }
    }

    /**
     * Creates a new studentFormOne entity.
     *
     * @Route("/new", name="studentformone_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $studentFormOne = new Studentformone();
        $form = $this->createForm('AppBundle\Form\StudentFormOneType', $studentFormOne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($studentFormOne);
            $em->flush();
            
            $siteSuperEmail = $form["siteSuperEmail"]->getData();
            $siteSuperName = $form["siteSuperName"]->getData();
            // $accessCode = getSiteSuperAccessCode()
            
            $to = $siteSuperEmail; // note the comma

            // Subject
            $subject = 'Action Required for Winthrop Internship FOrm';
            
            // Message
            $message = '
            <html>
            <head>
              <title>Birthday Reminders for August</title>
            </head>
            <body>
              <p>Here are the birthdays upcoming in August!</p>
              <table>
                <tr>
                  <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
                </tr>
                <tr>
                  <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
                </tr>
                <tr>
                  <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
                </tr>
              </table>
            </body>
            </html>
            ';

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
        $deleteForm = $this->createDeleteForm($studentFormOne);

        return $this->render('studentformone/show.html.twig', array(
            'studentFormOne' => $studentFormOne,
            'delete_form' => $deleteForm->createView(),
        ));
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
