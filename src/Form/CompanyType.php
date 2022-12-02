<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class,[
                'constraints' => [
                    new NotBlank(['message' => 'Champ obligatoire']),
                ]
            ])
            ->add('sigle', TextType::class, [
                'constraints' => [
                new NotBlank(['message' => 'Champ obligatoire']),
            ]
            ])
            ->add('employes', IntegerType::class,[
                'constraints' => [
                    new NotBlank(['message' => 'Champ obligatoire']),
                ]
            ])
            // ->add('submit', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}
