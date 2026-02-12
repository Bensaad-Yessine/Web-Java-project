<?php

namespace App\Form;

use App\Entity\Tache;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrontOfficeTacheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description', TextareaType::class, [
                    'label' => 'Description',
                    'required' => false,
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Add more details about this task...',
                        'rows' => 4
                    ],
                ])

            ->add('titre', TextType::class, [
                'label' => 'Titre de la tâche',
                'attr' => ['class' => 'form-control'],
            ])

            ->add('type', ChoiceType::class, [
                'label' => 'Type de tâche',
                'choices' => [
                    'Manuel' => 'MANUEL',
                    'Réunion' => 'REUNION',
                    'Révision' => 'REVISION',
                    'Santé' => 'SANTE',
                    'Emploi du temps' => 'EMPLOI',
                ],
                'attr' => ['class' => 'form-select'],
            ])

            ->add('dateDebut', DateTimeType::class, [
                'label' => 'Début',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ],
            ])

            ->add('dateFin', DateTimeType::class, [
                'label' => 'Fin',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])

            ->add('priorite', TextType::class, [
                'label' => 'Priorité (FAIBLE, MOYEN, ELEVEE)',
                'attr' => ['class' => 'form-control'],
            ])

            ->add('statut', TextType::class, [
                'label' => 'Statut (A_FAIRE, EN_COURS, TERMINEE, EN_RETARD)',
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tache::class,
        ]);
    }
}