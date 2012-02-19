<?php

namespace Siga21\ArticulosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ArticulosType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('referencia')
            ->add('nombre')
            ->add('descripcion')
        ;
    }

    public function getName()
    {
        return 'siga21_articulosbundle_articulostype';
    }
}
