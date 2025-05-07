<?php

namespace App\Form;

use Acme\TunisiaGovernoratesBundle\Form\Type\GovernorateAutocompleteType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddressFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('governorate', GovernorateAutocompleteType::class, [
                'label' => 'Gouvernorat',
                'autocomplete_route' => 'governorate_autocomplete',
            ])
            ->add('address', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'label' => 'Adresse',
            ]);
    }
}