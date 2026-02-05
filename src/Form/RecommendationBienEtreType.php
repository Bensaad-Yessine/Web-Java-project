<?php

namespace App\Form;

use App\Entity\RecommendationBienEtre;
use App\Entity\SuiviBienEtre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class RecommendationBienEtreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ❌ on enlève recommendationId (auto)
            ->add('descriptionGeneree')
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'A_FAIRE' => 'A_FAIRE',
                    'FAITE' => 'FAITE',
                    'IGNOREE' => 'IGNOREE',
                ],
            ])
             ->add('typeRecommendation', ChoiceType::class, [
        'choices' => [
            'SOMMEIL' => 'SOMMEIL',
            'STRESS' => 'STRESS',
            'SPORT' => 'SPORT',
            'ALIMENTATION' => 'ALIMENTATION',
            'MENTAL' => 'MENTAL',
        ],
        'placeholder' => 'Choisir un type',
        'required' => false,
    ])
     ->add('priorite', ChoiceType::class, [
        'choices' => [
            '1 (faible)' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5 (urgente)' => 5,
        ],
        'required' => false,
    ])
    ->add('estAppliquee', CheckboxType::class, [
        'required' => false,
    ])
            ->add('dateGeneration', DateTimeType::class, [
                'widget' => 'single_text',
            ])
            ->add('dateFinValidite', DateType::class, [
                'widget' => 'single_text',
            ])
            
            ->add('suiviBienEtre', EntityType::class, [
                'class' => SuiviBienEtre::class,
                'choice_label' => 'id',
                'placeholder' => 'Choisir un suivi',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RecommendationBienEtre::class,
        ]);
    }
}
