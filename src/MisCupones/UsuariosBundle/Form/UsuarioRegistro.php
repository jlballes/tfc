<?php

namespace MisCupones\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
 
class UsuarioRegistro extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text')
            ->add('apellidos', 'text')
            ->add('email', 'email')
            ->add('password', 'repeated', array(
                'type' => 'password',
                'first_options'  => array('label' => 'Contraseña'),
                'second_options' => array('label' => 'Repetir contraseña'),
            )
        );
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MisCupones\UsuariosBundle\Entity\Usuario'
        ));
    }

    public function getName()
    {
        return 'user';
    }
}