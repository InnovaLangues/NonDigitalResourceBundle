<?php

namespace Innova\NonDigitalResourceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class NonDigitalResourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text');
        $builder->add('description', 'tinymce');
    }

    public function getName()
    {
        return 'innova_non_digital_resource';
    }
    
    public function getDefaultOptions()
    {
        return array (
            'data_class' => 'Innova\NonDigitalResourceBundle\Entity\NonDigitalResource',
        );
    }
} 