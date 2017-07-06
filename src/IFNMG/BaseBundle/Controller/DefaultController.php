<?php

namespace IFNMG\BaseBundle\Controller;

use IFNMG\BaseBundle\Entity\Product;
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
        $em = $this->getDoctrine()->getManager();

        /*$product = new Product();

        $product
            ->setName('Teste')
            ->setPrice(10.00)
            ->setDescription('Teste')
        ;

        $em->persist($product);
        $em->flush();*/

        $products = $em->getRepository(Product::class)->findAll();

        return [
            'products' => $products
        ];
    }
}
