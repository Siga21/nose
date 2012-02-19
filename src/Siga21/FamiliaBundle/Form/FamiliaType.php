<?php

namespace Siga21\FamiliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class FamiliaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('descripcion')
        ;
    }

    public function getName()
    {
        return 'siga21_familiabundle_familiatype';
    }
}
