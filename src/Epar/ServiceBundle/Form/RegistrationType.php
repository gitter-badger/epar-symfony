<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 27.11.15
 * Time: 21:36
 */

namespace Epar\ServiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        $builder->add('name', 'text', array('class' => 'test'));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}