<?php

namespace AddressBoxBundle\Controller;

use AddressBoxBundle\Entity\Adres;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Adre controller.
 *
 * @Route("adres")
 */
class AdresController extends Controller
{
    /**
     * Lists all adre entities.
     *
     * @Route("/", name="adres_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $adres = $em->getRepository('AddressBoxBundle:Adres')->findAll();

        return $this->render('adres/index.html.twig', array(
            'adres' => $adres,
        ));
    }

    /**
     * Creates a new adre entity.
     *
     * @Route("/new", name="adres_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $adre = new Adres();
        $form = $this->createForm('AddressBoxBundle\Form\AdresType', $adre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adre);
            $em->flush();

            return $this->redirectToRoute('adres_show', array('id' => $adre->getId()));
        }

        return $this->render('adres/new.html.twig', array(
            'adre' => $adre,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a adre entity.
     *
     * @Route("/{id}", name="adres_show")
     * @Method("GET")
     */
    public function showAction(Adres $adre)
    {
        $deleteForm = $this->createDeleteForm($adre);

        return $this->render('adres/show.html.twig', array(
            'adre' => $adre,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing adre entity.
     *
     * @Route("/{id}/edit", name="adres_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Adres $adre)
    {
        $deleteForm = $this->createDeleteForm($adre);
        $editForm = $this->createForm('AddressBoxBundle\Form\AdresType', $adre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('adres_edit', array('id' => $adre->getId()));
        }

        return $this->render('adres/edit.html.twig', array(
            'adre' => $adre,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a adre entity.
     *
     * @Route("/{id}", name="adres_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Adres $adre)
    {
        $form = $this->createDeleteForm($adre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adre);
            $em->flush();
        }

        return $this->redirectToRoute('adres_index');
    }

    /**
     * Creates a form to delete a adre entity.
     *
     * @param Adres $adre The adre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Adres $adre)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adres_delete', array('id' => $adre->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
