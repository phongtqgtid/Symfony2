<?php

namespace Ens\JobeetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JobType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('category',null,array('label'=>'Category'));
        $builder->add('type',null,array('label'=>'Type'));
        $builder->add('company',null,array('label'=>'Company'));
        //$builder->add('logo',null,array('label'=>'Logo'));
        $builder->add('url',null,array('label'=>'URL'));
        $builder->add('position',null,array('label'=>'Position'));
        $builder->add('location',null,array('label'=>'Location'));
        $builder->add('description',null,array('label'=>'Description'));
        $builder->add('how_to_apply',null,array('label'=>'How to Apply'));
       // $builder->add('token',null,array('label'=>'Token'));
        $builder->add('is_public',null,array('label'=>'Public ?'));
        $builder->add('email',null,array('label'=>'Email'));
        $builder->add('file', 'file', array('label' => 'Company logo', 'required' => false));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ens\JobeetBundle\Entity\Job'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ens_jobeetbundle_jobtype';
    }
}
