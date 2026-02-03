<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Classe;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class, [
                'label' => 'Nom de famille',
            ])
            ->add('prenom',TextType::class, [
                'label' => 'Prénom',
            ])
            ->add('email',EmailType::class, [
                'label' => 'Adresse e-mail',
            ])
            ->add('DateDeNaissance',DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de naissance',
            ])
            ->add('classe',ChoiceType::class, [
                'choices' => [
                    '3A' => '"3A"',
                    '2A' => '2A',
                    '1A' => '1A',
                    '3B' => '3B',
                    '2P' => '2P',
                ],
                'label' => 'Classe actuelle',
                'constraints' => [
                    new Choice([
                        'choices' => ['ARCTIC', 'NIDS', 'DS', 'DATA', 'BI'],
                        'message' => 'Veuillez choisir une classe valide.',
                    ]),
                ],
            ])
            ->add('specialiteFuture',ChoiceType::class, [
                'choices' => [
                    'ARCTIC' => 'ARCTIC',
                    'NIDS' => 'NIDS',
                    'DS' => 'DS',
                    'DATA' => 'DATA',
                    'BI' => 'BI',
                ],
                'label' => 'Spécialité future envisagée',
                'constraints' => [
                    new Choice([
                        'choices' => ['ARCTIC', 'NIDS', 'DS', 'DATA', 'BI'],
                        'message' => 'Veuillez choisir une spécialité valide.',
                    ]),
                ],
            ])
            ->add('sexe',ChoiceType::class, [
                'choices' => [
                    'Masculin' => 'Masculin',
                    'Féminin' => 'Féminin',
                ],
                'label' => 'Sexe',
                'constraints' => [
                    new Choice([
                        'choices' => ['Masculin', 'Féminin'],
                        'message' => 'Veuillez choisir un sexe valide.',
                    ]),
                ],
            ])
            ->add('role',ChoiceType::class, [
                'choices' => [
                    'Étudiant' => 'Étudiant',
                    
                    'Administrateur' => 'Administrateur',
                ],
                'label' => 'Rôle',
                'constraints' => [
                    new Choice([
                        'choices' => ['Étudiant', 'Administrateur'],
                        'message' => 'Veuillez choisir un rôle valide.',
                    ]),
                ],
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
