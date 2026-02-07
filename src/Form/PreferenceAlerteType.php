<?php

namespace App\Form;

use App\Entity\PreferenceAlerte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreferenceAlerteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('emailActif')
            ->add('pushActif')
            ->add('siteNotifActive')
            ->add('delaiRappelMin')
            ->add('delaiUrgentHeures')
            ->add('freaquenceMaxParJour')
            ->add('heureSilenceDebut')
            ->add('heureSilenceFin')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PreferenceAlerte::class,
        ]);
    }
}
