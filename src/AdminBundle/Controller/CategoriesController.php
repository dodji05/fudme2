<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Category controller.
 *
 * @Route("espace/administration/categories")
 */
class CategoriesController extends Controller
{
    /**
     * Lists all category entities.
     *
     * @Route("/", name="categories_index")
     *
     */
    public function indexAction(Request $request)
    {
        $category = new Categories();
        $form = $this->createForm('AdminBundle\Form\CategoriesType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('categories_index');
        }
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AdminBundle:Categories')->findAll();

        return $this->render('@Admin/categories/index.html.twig', array(
            'categories' => $categories,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new category entity.
     *
     * @Route("/new", name="categories_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $category = new Category();
        $form = $this->createForm('AdminBundle\Form\CategoriesType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('categories_show', array('id' => $category->getId()));
        }

        return $this->render('categories/new.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a category entity.
     *
     * @Route("/{id}", name="categories_show")
     * @Method("GET")
     */
    public function showAction(Categories $category)
    {
        $deleteForm = $this->createDeleteForm($category);

        return $this->render('categories/show.html.twig', array(
            'category' => $category,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a category entity.
     *
     * @Route("/{id}", name="cat_preview",options={"expose"=true})
     * @Method("GET")
     */
    public function catshowAction($id)
    {
        $doctrine = $this->getDoctrine();
        $repository = $doctrine->getRepository('AdminBundle:Categories');
        // On recupere les informations de la categorie
        $cat = $repository->findOneBy(array('id' => $id));
        return $this->render('@Admin/categories/cat-details.html.twig', array(
            'cat' => $cat,

        ));
    }

    /**
     * Displays a form to edit an existing category entity.
     *
     * @Route("/{id}/edit", name="categories_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Categories $category)
    {
        $deleteForm = $this->createDeleteForm($category);
        $editForm = $this->createForm('AdminBundle\Form\CategoriesType', $category);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categories_edit', array('id' => $category->getId()));
        }

        return $this->render('categories/edit.html.twig', array(
            'category' => $category,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a category entity.
     *
     * @Route("/{id}", name="categories_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Categories $category)
    {
        $form = $this->createDeleteForm($category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush();
        }

        return $this->redirectToRoute('categories_index');
    }

    /**
     * Creates a form to delete a category entity.
     *
     * @param Categories $category The category entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Categories $category)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categories_delete', array('id' => $category->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
