<?php

namespace Siga21\FamiliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TiendaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('nombre')
            ->add('direccion')
            ->add('correo')
        ;
    }

    public function getName()
    {
        return 'siga21_familiabundle_tiendatype';
    }
}
