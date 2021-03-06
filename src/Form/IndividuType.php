<?php

namespace App\Form;

use App\Entity\Individu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IndividuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomindividu')
            ->add('prenomindividu')
            ->add('telindividu')
            ->add('cinindividu')
            ->add('pathphotoindividu')
            ->add('interne')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Individu::class,
        ]);
    }
}
