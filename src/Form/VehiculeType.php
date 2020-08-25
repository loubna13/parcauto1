<?php

namespace App\Form;

use App\Entity\Vehicule;
use App\Entity\PropertySearch;
use App\Form\VehiculeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idmodele')
            ->add('idtypevehicule')
            ->add('idfournisseur')
            ->add('idsite')
            ->add('idcategorie')
            ->add('idtypecarburant')
            ->add('idservice')
            ->add('fouIdfournisseur')
            ->add('nbrportevehicule')
            ->add('puissancevehicule')
            ->add('nbrplacevehicule')
            ->add('cartegrisevehicule')
            ->add('immatriculationvehicule')
            ->add('pathphotovehicule')
            ->add('dateaquisitionvehicule')
            ->add('datedebutassurance')
            ->add('datefinassurance')
            ->add('coutassurance')
            ->add('datedebutreparation')
            ->add('datefinreparation')
            ->add('coutreparation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
        ]);
    }
}
