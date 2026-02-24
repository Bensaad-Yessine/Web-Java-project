<?php

namespace App\Form;

use App\Entity\PropositionReunion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

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
                'constraints' => [
                    new NotBlank(['message' => 'Le titre est obligatoire']),
                ],
                'attr' => [
                    'placeholder' => 'Ex: Réunion de lancement',
                    'class' => 'form-control',
                ],
            ])

            ->add('dateReunion', DateType::class, [
                'label' => 'Date de réunion',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('heureDebut', TimeType::class, [
                'label' => 'Heure de début',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('heureFin', TimeType::class, [
                'label' => 'Heure de fin',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Lieu',
                'constraints' => [
                    new NotBlank(['message' => 'Le lieu est obligatoire']),
                ],
                'attr' => [
                    'placeholder' => 'Ex: Salle B2.3, Amphi A...',
                    'class' => 'form-control',
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'constraints' => [
                    new NotBlank(['message' => 'La description est obligatoire']),
                ],
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Décrivez l\'ordre du jour de la réunion...',
                    'class' => 'form-control',
                ],
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => $statusChoices,
                'placeholder' => 'Choisir un statut',
                'attr' => [
                    'class' => 'form-control',
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
