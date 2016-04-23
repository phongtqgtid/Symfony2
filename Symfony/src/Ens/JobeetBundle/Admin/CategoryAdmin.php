<?php
/**
 * Created by PhpStorm.
 * User: quatt_000
 * Date: 4/11/16
 * Time: 10:19 AM
 */

namespace Ens\JobeetBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class CategoryAdmin extends  Admin {
    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'name'
    );

    // những trường hiển thị lên gridview

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('slug')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
        ;
    }


    // quy định những trường mà có nút xem sửa xóa ở bên trái
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('slug')
            ->add('_action','actions',array(
                'actions'=>array(
                    'view'=>array(),
                    'edit'=>array(),
                    'delete'=>array()
                )
            ))
        ;
    }
//    public function getBatchActions()
//    {
//        // retrieve the default (currently only the delete action) actions
//        // retrieve the default (currently only the delete action) actions
//        $actions = parent::getBatchActions();
//
//        // check user permissions
//        if($this->hasRoute('edit') && $this->isGranted('EDIT') && $this->hasRoute('delete') && $this->isGranted('DELETE')){
//            $actions['extend'] = array(
//                'label'            => 'Extend',
//                'ask_confirmation' => true // If true, a confirmation will be asked before performing the action
//            );
//
//            $actions['deleteNeverActivated'] = array(
//                'label'            => 'Delete never activated jobs',
//                'ask_confirmation' => true // If true, a confirmation will be asked before performing the action
//            );
//        }
//
//        return $actions;
//
//    }


} 