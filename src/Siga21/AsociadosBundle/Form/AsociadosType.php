<?php

namespace Siga21\AsociadosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AsociadosType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('socios')
            ->add('nome')
        ;
    }

    public function getName()
    {
        return 'siga21_asociadosbundle_asociadostype';
    }
}
