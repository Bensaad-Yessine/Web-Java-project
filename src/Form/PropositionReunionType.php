<?php

namespace App\Form;

use App\Entity\PropositionReunion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropositionReunionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $statusChoices = $options['status_choices'] ?? [
            'En attente' => 'En attente',
            'Acceptée' => 'Acceptée',
            'Refusée' => 'Refusée',
            'Annulée' => 'Annulée',
        ];

        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ex: Réunion de lancement',
                    'class' => 'form-control',
                    'required' => 'required',
                ],
            ])

            ->add('dateReunion', DateType::class, [
                'label' => 'Date de réunion',
                'widget' => 'single_text',
                'html5' => true,
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'required' => 'required',
                ],
            ])
            ->add('dateFinVote', DateTimeType::class, [
                'label' => 'Fin du vote',
                'widget' => 'single_text',
                'html5' => true,
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'required' => 'required',
                ],
            ])
            ->add('heureDebut', TimeType::class, [
                'label' => 'Heure de début',
                'widget' => 'single_text',
                'html5' => true,
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'required' => 'required',
                ],
            ])
            ->add('heureFin', TimeType::class, [
                'label' => 'Heure de fin',
                'widget' => 'single_text',
                'html5' => true,
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'required' => 'required',
                ],
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Lieu (optionnel)',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Ex: Salle B2.3, Amphi A...',
                    'class' => 'form-control',
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => true,
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Décrivez l\'ordre du jour de la réunion...',
                    'class' => 'form-control',
                    'required' => 'required',
                ],
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => $statusChoices,
                'placeholder' => 'Choisir un statut',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'required' => 'required',
                ],
            ])

        ;
        
        // Only show nbrVoteAccept in edit mode if needed
        if ($options['show_votes'] ?? false) {
            $builder->add('nbrVoteAccept', null, [
                'label' => 'Nombre de votes acceptés',
                'attr' => [
                    'class' => 'form-control',
                ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PropositionReunion::class,
            'show_votes' => false,
            'status_choices' => [
                'En attente' => 'En attente',
                'Acceptée' => 'Acceptée',
                'Refusée' => 'Refusée',
                'Annulée' => 'Annulée',
            ],
        ]);
    }
}
