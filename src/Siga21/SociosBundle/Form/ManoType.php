<?php

namespace Siga21\SociosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ManoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('Nombre')
            ->add('Especialidad')
            ->add('Fecha_De_Nacimiento')
        ;
    }

    public function getName()
    {
        return 'siga21_sociosbundle_manotype';
    }
}
