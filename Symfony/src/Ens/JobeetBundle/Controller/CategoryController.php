<?php

namespace Ens\JobeetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ens\JobeetBundle\Entity\Category;
use Ens\JobeetBundle\Form\CategoryType;

/**
 * Category controller.
 *
 */
class CategoryController extends Controller
{

    /**
     * Lists all Category entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $categories = $em->getRepository('EnsJobeetBundle:Category')->getWithJobs();
        foreach($categories as $category)
        {
           $category->setActiveJobs($em->getRepository('EnsJobeetBundle:Job')->getActiveJobs($category->getId()));
        }
        return $this->render('EnsJobeetBundle:Job:index.html.twig', array(
            'categories' => $categories,
        ));
    }
    /**
     * Creates a new Category entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Category();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ens_category_show', array('id' => $entity->getId())));
        }

        return $this->render('EnsJobeetBundle:Category:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Category entity.
     *
     * @param Category $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Category $entity)
    {
        $form = $this->createForm(new CategoryType(), $entity, array(
            'action' => $this->generateUrl('ens_category_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Category entity.
     *
     */
    public function newAction()
    {
        $entity = new Category();
        $form   = $this->createCreateForm($entity);

        return $this->render('EnsJobeetBundle:Category:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Category entity.
     *
     */
    public function showAction($slug , $page)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $category = $em->getRepository('EnsJobeetBundle:Category')->findOneBySlug($slug);


        if (!$category) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }
        // lấy ra tổng số dữ liệu có trong data
        $total_jobs = $em->getRepository('EnsJobeetBundle:Job')->countActiveJobs($category->getId());
        // lấy ra số dữ liệu hiển thị trên 1 trang ;
        $jobs_per_page =  $this->container->getParameter('max_jobs_on_category');
        // chia ra ta được thương là số phân trang ;
        $lastpage = ceil($total_jobs/$jobs_per_page);
        // nếu nhấn quay lại , mà số trang hiện tại trên addresbar > 1 , thì tức là số trang sau đó bằng page-1
        $previous_page = $page > 1 ? $page-1 : 1 ;
        // next page thì ngược lại
        $next_page = $page < $lastpage ? $page + 1 :$lastpage;

        // lấy ra id công việc trên trang hiện tại , nếu là trang thứ 0 , thì lấy từ id =0 , còn nếu là trang thứ 1 thì lấy từ id = 10 ;
        $category->setActiveJobs($em->getRepository('EnsJobeetBundle:Job')->getActiveJobs($category->getId(),$jobs_per_page, ($page - 1) * $jobs_per_page));

        return $this->render('EnsJobeetBundle:Category:show.html.twig', array(
            'category' => $category,
            'last_page'=> $lastpage,
            'previous_page'=> $previous_page,
            'curent_page'=>$page,
            'next_page'=> $next_page,
            'total_jobs'=> $total_jobs
        ));
    }

    /**
     * Displays a form to edit an existing Category entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsJobeetBundle:Category')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EnsJobeetBundle:Category:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Category entity.
    *
    * @param Category $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Category $entity)
    {
        $form = $this->createForm(new CategoryType(), $entity, array(
            'action' => $this->generateUrl('ens_category_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Category entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsJobeetBundle:Category')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ens_category_edit', array('id' => $id)));
        }

        return $this->render('EnsJobeetBundle:Category:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Category entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EnsJobeetBundle:Category')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Category entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ens_category'));
    }

    /**
     * Creates a form to delete a Category entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ens_category_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
