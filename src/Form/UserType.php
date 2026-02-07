<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{
    TextType, EmailType, DateType, ChoiceType,
    PasswordType, RepeatedType, SubmitType, FileType
};

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'];

        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', EmailType::class)
            ->add('DateDeNaissance', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('classe', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '1A' => '1A', '2A' => '2A', '3A' => '3A'
                ]
            ])
            ->add('specialiteFuture', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'ARCTIC' => 'ARCTIC',
                    'NIDS' => 'NIDS',
                    'DS' => 'DS'
                ]
            ])
            ->add('sexe', ChoiceType::class, [
                'choices' => [
                    'Masculin' => 'Masculin',
                    'Féminin' => 'Féminin'
                ]
            ])
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Étudiant' => 'student',
                    'Administrateur' => 'admin',
                ]
            ])
            ->add('profilePic', FileType::class, [
                'mapped' => false,
                'required' => false
            ]);

        // PASSWORD
        $builder->add('plainPassword', RepeatedType::class, [
            'type' => PasswordType::class,
            'mapped' => false,
            'required' => !$isEdit,
            'first_options' => ['label' => 'Mot de passe'],
            'second_options' => ['label' => 'Confirmer mot de passe'],
        ]);

        $builder->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'is_edit' => false,
            'validation_groups' => function ($form) {
                return $form->getConfig()->getOption('is_edit')
                    ? ['Default']
                    : ['create'];
            },
        ]);
    }
}
