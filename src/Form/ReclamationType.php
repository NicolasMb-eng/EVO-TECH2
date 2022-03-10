<?php

namespace App\Form;

use App\Entity\CategorieRec;
use App\Entity\Reclamation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'required' => true
            ])
            ->add('dateCreation')
            ->add('contenu', TextType::class, [
                'required' => true
            ])

            ->add('categorieRec', EntityType::class, [
                'class' => CategorieRec::class,
                'choice_label' => 'nom', ])
            ->add('contenu', TextType::class, [
                'required' => true
            ])


        ;
    }



    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
