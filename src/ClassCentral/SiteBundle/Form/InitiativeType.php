<?php

namespace ClassCentral\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class InitiativeType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('url')
            ->add('description')
            ->add('code')
            ->add('tooltip')
        ;
    }

    public function getName()
    {
        return 'classcentral_sitebundle_initiativetype';
    }
}
