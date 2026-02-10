<?php

namespace App\Form;
use App\Entity\User;
use App\Entity\Classe;      
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\File;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // NOM
            ->add('nom', TextType::class, [
                'label' => 'Nom de famille',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre nom de famille']),
                    new Length([
                        'min' => 2,
                        'max' => 255,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le nom ne doit pas dépasser {{ limit }} caractères',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-ZÀ-ÿ\s-]*$/',
                        'message' => 'Le nom ne doit contenir que des lettres, espaces ou tirets',
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'Entrez votre nom de famille',
                    'class' => 'form-control',
                    'required' => 'required',
                    'minlength' => '2',
                    'maxlength' => '255',
                    'pattern' => '^[a-zA-ZÀ-ÿ\s-]*$',
                ],
            ])
            
            // PRENOM
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre prénom']),
                    new Length([
                        'min' => 2,
                        'max' => 255,
                        'minMessage' => 'Le prénom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le prénom ne doit pas dépasser {{ limit }} caractères',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-ZÀ-ÿ\s-]*$/',
                        'message' => 'Le prénom ne doit contenir que des lettres, espaces ou tirets',
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'Entrez votre prénom',
                    'class' => 'form-control',
                    'required' => 'required',
                    'minlength' => '2',
                    'maxlength' => '255',
                    'pattern' => '^[a-zA-ZÀ-ÿ\s-]*$',
                ],
            ])
            
            // EMAIL
            ->add('email', EmailType::class, [
                'label' => 'Adresse email',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre adresse email']),
                    new Email(['message' => 'Veuillez entrer une adresse email valide']),
                    new Length(['max' => 180, 'maxMessage' => 'L\'email ne doit pas dépasser {{ limit }} caractères']),
                ],
                'attr' => [
                    'placeholder' => 'prenom.nom@esprit.tn',
                    'class' => 'form-control',
                    'required' => 'required',
                    'type' => 'email',
                ],
            ])
            
            // NUMERO DE TELEPHONE
            ->add('numTel', TextType::class, [
                'label' => 'Numéro de téléphone',
                'required' => false,
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[0-9]*$/',
                        'message' => 'Le numéro de téléphone ne doit contenir que des chiffres',
                    ]),
                ],
                'attr' => [
                    'placeholder' => '21612345678',
                    'class' => 'form-control',
                    'pattern' => '[0-9]*',
                    'inputmode' => 'numeric',
                ],
            ])
            
            // DATE DE NAISSANCE
            ->add('dateDeNaissance', DateType::class, [
                'label' => 'Date de naissance',
                'required' => true,
                'widget' => 'choice',
                'years' => range(date('Y') - 50, date('Y') - 18),
                'constraints' => [
                    new NotBlank(['message' => 'La date de naissance est obligatoire']),
                    new Range([
                        'min' => 'today -50 years',
                        'max' => 'today -18 years',
                        'notInRangeMessage' => 'Vous devez avoir entre 18 et 50 ans',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'required' => 'required',
                ],
            ])
            
            // SEXE
            ->add('sexe', ChoiceType::class, [
                'label' => 'Sexe',
                'required' => true,
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ],
                'expanded' => true,
                'attr' => [
                    'class' => 'form-check',
                    'required' => 'required',
                ],
            ])
            
            // CLASSE
            ->add('classe', EntityType::class, [
                'label' => 'Classe',
                'required' => true,
                'class' => Classe::class,
                'choice_label' => 'nom',
                'placeholder' => 'Choisir une classe',
                'attr' => [
                    'class' => 'form-control',
                    'required' => 'required',
                ],
            ])
            
            // PHOTO DE PROFIL
            ->add('profilePic', FileType::class, [
                'label' => 'Photo de profil',
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif', 'image/webp'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF, WebP)',
                        'maxSizeMessage' => 'La taille de l\'image ne doit pas dépasser 5 MB',
                    ]),
                ],
                'attr' => [
                    'accept' => 'image/*',
                    'class' => 'form-control',
                    'data-help-text' => 'Format: JPEG, PNG, GIF, WebP. Max 5 MB'
                ],
            ])
            
            // ACCEPTATION DES CONDITIONS
            ->add('agreeTerms', CheckboxType::class, [
                'label' => 'J\'accepte les conditions d\'utilisation et la politique de confidentialité',
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter les conditions d\'utilisation',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-check-input',
                    'required' => 'required',
                ],
            ])
            
            // MOT DE PASSE
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Mot de passe',
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password',
                    'placeholder' => 'Minimum 8 caractères avec majuscules et chiffres',
                    'class' => 'form-control',
                    'required' => 'required',
                    'minlength' => '8',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer un mot de passe']),
                    new Length([
                        'min' => 8,
                        'max' => 4096,
                        'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre mot de passe ne doit pas dépasser {{ limit }} caractères',
                    ]),
                    new Regex([
                        'pattern' => '/[A-Z]/',
                        'message' => 'Le mot de passe doit contenir au moins une lettre majuscule',
                    ]),
                    new Regex([
                        'pattern' => '/[0-9]/',
                        'message' => 'Le mot de passe doit contenir au moins un chiffre',
                    ]),
                    new Regex([
                        'pattern' => '/[a-z]/',
                        'message' => 'Le mot de passe doit contenir au moins une lettre minuscule',
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