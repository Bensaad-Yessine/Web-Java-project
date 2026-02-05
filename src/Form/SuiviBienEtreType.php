<?php

namespace App\Form;

use App\Entity\SuiviBienEtre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;

class SuiviBienEtreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ❌ PAS d'id et PAS de suiviId
            ->add('dateSaisie', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
            ])
           ->add('humeur', ChoiceType::class, [
    'required' => false,
    'placeholder' => 'Choisir une humeur',
    'choices' => [
        'Joie 😊' => [
            'content' => 'content',
            'heureux' => 'heureux',
            'satisfait' => 'satisfait',
        ],
        'Calme / Sérénité 😌' => [
            'détendu' => 'détendu',
            'paisible' => 'paisible',
        ],
        'Enthousiasme 🤩' => [
            'motivé' => 'motivé',
            'excité' => 'excité',
        ],
        'Confiance 💪' => [
            'sûr de soi' => 'sûr de soi',
            'rassuré' => 'rassuré',
        ],
        'Tristesse 😢' => [
            'mélancolique' => 'mélancolique',
            'abattu' => 'abattu',
        ],
        'Colère 😠' => [
            'énervé' => 'énervé',
            'frustré' => 'frustré',
        ],
        'Peur / Anxiété 😨' => [
            'inquiet' => 'inquiet',
            'stressé' => 'stressé',
        ],
        'Dégoût 🤢' => [
            'répulsion' => 'répulsion',
            'malaise' => 'malaise',
        ],
    ],
])

         ->add('niveauStress', RangeType::class, [
    'required' => false,
    'attr' => ['min' => 0, 'max' => 10, 'step' => 1],
])
->add('niveauEnergie', RangeType::class, [
    'required' => false,
    'attr' => ['min' => 0, 'max' => 10, 'step' => 1],
])
->add('qualiteSommeil', RangeType::class, [
    'required' => false,
    'attr' => ['min' => 0, 'max' => 10, 'step' => 1],
])
->add('qualiteAlimentation', RangeType::class, [
    'required' => false,
    'attr' => ['min' => 0, 'max' => 10, 'step' => 1],
])
->add('niveauAnxiete', RangeType::class, [
    'required' => false,
    'attr' => ['min' => 0, 'max' => 10, 'step' => 1],
])
->add('niveauActivitePhysique', RangeType::class, [
    'required' => false,
    'attr' => ['min' => 0, 'max' => 10, 'step' => 1],
]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SuiviBienEtre::class,
        ]);
    }
}
