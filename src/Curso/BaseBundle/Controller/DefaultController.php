<?php

namespace Curso\BaseBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 * @package Curso\BaseBundle\Controller
 * @Template()
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/inicial", name="inicial")
     */
    public function indexAction()
    {
        return [
            'name' => 'Arley',
        ];

    }
}
