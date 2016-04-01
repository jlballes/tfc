<?php
namespace MisCupones\CuponBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CuponAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
        	->add('titulo', 'text')
        	->add('descripcion', 'textarea')
    	;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        	->addIdentifier('id')
            ->add('titulo')
            ->add('descripcion')
        ;
    }
}