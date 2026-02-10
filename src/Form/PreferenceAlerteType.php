<?php

namespace App\Form;

use App\Entity\PreferenceAlerte;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreferenceAlerteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'label' => 'Nom de la préférence',
                'required' => false,
            ])
            ->add('isActive', null, [
                'label' => 'Activer cette préférence',
                'required' => false,
            ])
            ->add('emailActif', null, [
                'label' => 'Email activé',
                'required' => false,
            ])
            ->add('pushActif', null, [
                'label' => 'Push activé',
                'required' => false,
            ])
            ->add('siteNotifActive', null, [
                'label' => 'Notifications sur site',
                'required' => false,
            ])
            ->add('delaiRappelMin', null, [
                'label' => 'Délai de rappel (minutes)',
                'required' => false,
            ])
            ->add('heureSilenceDebut', null, [
                'label' => 'Heure début silence',
                'required' => false,
            ])
            ->add('heureSilenceFin', null, [
                'label' => 'Heure fin silence',
                'required' => false,
            ]);
        
        // Removed fields: isDefault, dateCreation, dateMiseAJour, etudiant
        // These will be managed automatically in the controller
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PreferenceAlerte::class,
        ]);
    }
}
