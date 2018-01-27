<?php

namespace AddressBoxBundle\Controller;

use AddressBoxBundle\Entity\Osoba;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Osoba controller.
 *
 * @Route("osoba")
 */
class OsobaController extends Controller
{
    /**
     * Lists all osoba entities.
     *
     * @Route("/", name="osoba_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $osobas = $em->getRepository('AddressBoxBundle:Osoba')->findAll();

        return $this->render('osoba/index.html.twig', array(
            'osobas' => $osobas,
        ));
    }

    /**
     * Creates a new osoba entity.
     *
     * @Route("/new", name="osoba_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $osoba = new Osoba();
        $form = $this->createForm('AddressBoxBundle\Form\OsobaType', $osoba);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($osoba);
            $em->flush();

            return $this->redirectToRoute('osoba_show', array('id' => $osoba->getId()));
        }

        return $this->render('osoba/new.html.twig', array(
            'osoba' => $osoba,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a osoba entity.
     *
     * @Route("/{id}", name="osoba_show")
     * @Method("GET")
     */
    public function showAction(Osoba $osoba)
    {
        $deleteForm = $this->createDeleteForm($osoba);

        return $this->render('osoba/show.html.twig', array(
            'osoba' => $osoba,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing osoba entity.
     *
     * @Route("/{id}/edit", name="osoba_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Osoba $osoba)
    {
        $deleteForm = $this->createDeleteForm($osoba);
        $editForm = $this->createForm('AddressBoxBundle\Form\OsobaType', $osoba);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('osoba_edit', array('id' => $osoba->getId()));
        }

        return $this->render('osoba/edit.html.twig', array(
            'osoba' => $osoba,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a osoba entity.
     *
     * @Route("/{id}", name="osoba_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Osoba $osoba)
    {
        $form = $this->createDeleteForm($osoba);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($osoba);
            $em->flush();
        }

        return $this->redirectToRoute('osoba_index');
    }

    /**
     * Creates a form to delete a osoba entity.
     *
     * @param Osoba $osoba The osoba entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Osoba $osoba)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('osoba_delete', array('id' => $osoba->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
