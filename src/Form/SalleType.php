<?php

namespace App\Form;

use App\Entity\Salle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SalleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('block', ChoiceType::class, [
                'choices' => array_combine(range('A', 'K'), range('A', 'K')),
                'label' => 'Bloc',
                'attr' => ['class' => 'form-select']
            ])
            ->add('number', IntegerType::class, [
                'label' => 'Numéro de salle (1–9)',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '1 à 9'
                ]
            ])
            ->add('etage', ChoiceType::class, [
                'choices' => [
                    'Rez-de-chaussée (0)' => 0,
                    '1er Étage' => 1,
                    '2ème Étage' => 2,
                    '3ème Étage' => 3,
                    '4ème Étage' => 4,
                ],
                'label' => 'Étage',
                'attr' => ['class' => 'form-select']
            ])
            ->add('capacite', IntegerType::class, [
                'label' => 'Capacité',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nombre maximum de personnes (1 à 30)'
                ]
            ])
            ->add('disponibilite', ChoiceType::class, [
                'choices' => [
                    'Disponible' => true,
                    'Occupée' => false,
                ],
                'label' => 'Disponibilité',
                'attr' => ['class' => 'form-select']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Salle::class,
        ]);
    }
}
