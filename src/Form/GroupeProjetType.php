<?php

namespace App\Form;

use App\Entity\GroupeProjet;
use App\Entity\User;
use App\Repository\MatiereClasseRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;



class GroupeProjetType extends AbstractType
{
    public function __construct(private readonly MatiereClasseRepository $matiereRepo)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $matiereChoices = [];
        foreach ($this->matiereRepo->findAll() as $matiere) {
            $label = $matiere->getNom() ?: ('Matière #' . $matiere->getId());
            $matiereChoices[$label] = $matiere->getNom() ?: (string)$matiere->getId();
        }

        $builder
            ->add('nomProjet')
            ->add('logoImageFile', VichImageType::class, [
                'label' => 'Logo/Image du groupe',
                'required' => false,
                'allow_delete' => true,
                'delete_label' => 'Supprimer l\'image',
                'download_label' => 'Télécharger',
            ])
            ->add('matiere', ChoiceType::class, [
                'label' => 'Matière',
                'choices' => $matiereChoices,
                'placeholder' => 'Sélectionnez une matière',
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('nbrMembre')

            ->add('description')
            ->add('CreatedAt', null, [
                'widget' => 'single_text',
            ])
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'Actif' => 'Actif',
                    'Non actif' => 'Non actif',
                    'En pause' => 'En pause',
                ],
                'expanded' => true,
                'multiple' => false,
                'label' => 'Statut',
            ])

            ->add('idUser', EntityType::class, [
                'class' => User::class,
                'choice_label' => function (User $user) {
                    return $user->getPrenom() . ' ' . $user->getNom() . ' (' . $user->getEmail() . ')';
                },
                'multiple' => true,
                'expanded' => true,
                'placeholder' => 'Choisir des membres',
                'label' => 'Membres du groupe',
            ])
            ->add('niveauGroupe', ChoiceType::class, [
                'label'    => '🧠 Niveau du groupe',
                'choices'  => [
                    'Débutant'       => 'débutant',
                    'Intermédiaire'  => 'intermédiaire',
                    'Avancé'         => 'avancé',
                ],
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => false,
            ])
            ->add('objectifGroupe', ChoiceType::class, [
                'label'    => '🎯 Objectif principal',
                'choices'  => [
                    'Avoir de bonnes notes' => 'bonnes_notes',
                    'Apprendre en profondeur' => 'apprendre',
                    'Finir vite'            => 'finir_vite',
                ],
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => false,
            ])
            ->add('styleGroupe', ChoiceType::class, [
                'label'    => '💪 Style de travail',
                'choices'  => [
                    'Intense'    => 'intense',
                    'Détendu'    => 'détendu',
                    'Équilibré'  => 'équilibré',
                ],
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => false,
            ])
            ->add('disponibilites', ChoiceType::class, [
                'label'    => '📅 Disponibilités du groupe',
                'choices'  => [
                    'Lundi'    => 'lundi',
                    'Mardi'    => 'mardi',
                    'Mercredi' => 'mercredi',
                    'Jeudi'    => 'jeudi',
                    'Vendredi' => 'vendredi',
                    'Samedi'   => 'samedi',
                ],
                'multiple' => true,
                'expanded' => true,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GroupeProjet::class,
        ]);
    }
}
