<?php

namespace App\Form;

use App\Entity\QuizQuestion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuizQuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('question', TextType::class, [
                'label' => 'Question',
            ])
            ->add('choiceA', TextType::class, [
                'label' => 'Choix A',
            ])
            ->add('choiceB', TextType::class, [
                'label' => 'Choix B',
            ])
            ->add('choiceC', TextType::class, [
                'label' => 'Choix C',
                'required' => false,
            ])
            ->add('choiceD', TextType::class, [
                'label' => 'Choix D',
                'required' => false,
            ])
            ->add('correctChoice', ChoiceType::class, [
                'label' => 'Réponse correcte',
                'choices' => [
                    'A' => 'A',
                    'B' => 'B',
                    'C' => 'C',
                    'D' => 'D',
                ],
            ])
            ->add('explanation', TextareaType::class, [
                'label' => 'Explication (facultatif)',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => QuizQuestion::class,
        ]);
    }
}
