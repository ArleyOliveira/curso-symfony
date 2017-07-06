<?php

namespace IFNMG\BaseBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 * @package IFNMG\BaseBundle\Controller
 * @Template()
 * @Route("/")
 */
class DefaultController extends Controller
{

    /**
     * @Route("/", name="default_index")
     */
    public function indexAction()
    {
        return [
            'name' => 'Arley',
            'sobrenome' => "Oliveira"
        ];
    }
}
