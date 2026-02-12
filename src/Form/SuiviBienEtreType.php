<?php
// src/Form/SuiviBienEtreType.php

namespace App\Form;

use App\Entity\SuiviBienEtre;
use App\Entity\ObjectifSante;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SuiviBienEtreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateSaisie', DateType::class, [
                'label' => 'Date de saisie',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => true,
            ])
            ->add('humeur', ChoiceType::class, [
    'label' => 'Humeur générale',
    'choices' => [
        'Très mauvaise 😢' => 'Très mauvaise',
        'Mauvaise 😔' => 'Mauvaise',
        'Neutre 😐' => 'Neutre',
        'Bonne 😊' => 'Bonne',
        'Excellente 😄' => 'Excellente',
    ],
    'placeholder' => 'Sélectionnez votre humeur',
    'attr' => [
        'class' => 'form-select'
    ],
    'required' => true,
])
            ->add('niveauEnergie', IntegerType::class, [
                'label' => 'Niveau d\'énergie (1-10)',
                'attr' => [
                    'min' => 1,
                    'max' => 10,
                    'class' => 'form-control d-none'
                ],
                'required' => false,
            ])
            ->add('qualiteSommeil', IntegerType::class, [
                'label' => 'Qualité du sommeil (1-10)',
                'attr' => [
                    'min' => 1,
                    'max' => 10,
                    'class' => 'form-control d-none'
                ],
                'required' => false,
            ])
            ->add('niveauStress', IntegerType::class, [
                'label' => 'Niveau de stress (1-10)',
                'attr' => [
                    'min' => 1,
                    'max' => 10,
                    'class' => 'form-control d-none'
                ],
                'required' => false,
            ])
            ->add('qualiteAlimentation', IntegerType::class, [
                'label' => 'Qualité d\'alimentation (1-10)',
                'attr' => [
                    'min' => 1,
                    'max' => 10,
                    'class' => 'form-control d-none'
                ],
                'required' => false,
            ])
            ->add('notesLibres', TextareaType::class, [
                'label' => 'Notes libres',
                'attr' => [
                    'rows' => 5,
                    'class' => 'form-control',
                    'placeholder' => 'Notez vos observations, vos progrès, vos difficultés, vos réussites...'
                ],
                'required' => false,
            ]);

        // Si l'option 'disable_objectif' n'est pas vraie, on ajoute le champ objectif
        if (!$options['disable_objectif']) {
            $builder->add('objectif', EntityType::class, [
                'class' => ObjectifSante::class,
                'label' => 'Objectif associé',
                'choice_label' => 'titre',
                'attr' => [
                    'class' => 'form-select'
                ],
                'required' => false,
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SuiviBienEtre::class,
            'disable_objectif' => false, // Option pour désactiver le champ objectif
        ]);
    }
}