<?php

namespace App\Form;

use App\Entity\Classe;
use App\Entity\MatiereClasse;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatiereClasseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('coefficient', NumberType::class, [
                'label' => 'Coefficient',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 2.5',
                    'step' => '0.1',
                    'min' => '0.1',
                ],
            ])
            ->add('chargehoraire', IntegerType::class, [
                'label' => 'Charge Horaire (heures)',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 45',
                    'min' => '1',
                ],
            ])
            ->add('scorecomplexite', IntegerType::class, [
                'label' => 'Score de Complexité (1-10)',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 7',
                    'min' => '1',
                    'max' => '10',
                ],
            ])
            ->add('classe', EntityType::class, [
                'class' => Classe::class,
                'choice_label' => function (Classe $classe) {
                    return $classe->getNom() . ' - ' . $classe->getNiveau() . ' (' . $classe->getAnneeuniversitaire() . ')';
                },
                'label' => 'Classe',
                'placeholder' => 'Sélectionnez une classe',
                'attr' => [
                    'class' => 'form-control',
                ],
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MatiereClasse::class,
        ]);
    }
}