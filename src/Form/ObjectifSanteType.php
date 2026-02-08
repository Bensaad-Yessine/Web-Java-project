<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use App\Entity\ObjectifSante;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObjectifSanteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type')
            ->add('valeurCible')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('statut')
            ->add('priorite')
            ->add('progression')
            ->add('titre')
            ->add('user', EntityType::class, [
                'label' => 'Utilisateur',
                'class' => User::class,
                'choice_label' => 'nom',
                'placeholder' => 'Choisir un utilisateur',
                'required' => false,
                'attr' => ['class' => 'form-select'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ObjectifSante::class,
        ]);
    }
}
