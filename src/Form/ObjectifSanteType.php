<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use App\Entity\ObjectifSante;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ObjectifSanteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'label' => 'Type objectif',
                'attr' => ['class' => 'form-control'],
                'choices' => [
                    'Sommeil' => 'SOMMEIL',
                    'Stress' => 'STRESS',
                    'Sport' => 'SPORT',
                    'Alimentation' => 'ALIMENTATION',
                ],
            ])
            ->add('valeurCible', IntegerType::class, [
                'label' => 'Valeur cible',
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0,
                    'max' => 24,
                ],
            ])
            ->add('dateDebut',DateType::class, [
                'label' => 'Date début',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('dateFin', DateType::class, [
                'label' => 'Date fin',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'attr' => ['class' => 'form-control'],
                'choices' => [
                    'En cours' => 'EN_COURS',
                    'Atteint' => 'ATTEINT',
                    'Abandonné' => 'ABANDONNE',
                ],
            ])
            ->add('priorite', ChoiceType::class, [
                'label' => 'Priorité',
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'choices' => [
                    'Basse' => 'BASSE',
                    'Moyenne' => 'MOYENNE',
                    'Haute' => 'HAUTE',
                ],
            ])
            ->add('progression')
            ->add('titre' ,TextType::class, [
                'label' => 'Titre',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: Dormir 8 heures par nuit',
                    'maxlength' => 100,
                ],
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
                'label' => 'Utilisateur',
                'attr' => ['class' => 'form-control'],
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



            

           

           
           

            

 