<?php

namespace IFNMG\BaseBundle\Controller;

use IFNMG\BaseBundle\Entity\Product;
use IFNMG\BaseBundle\Form\Type\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 * @package IFNMG\BaseBundle\Controller
 * @Template()
 * @Route("/")
 */
class ProductController extends Controller
{

    /**
     * @Route("/", name="product_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository(Product::class)->findAll();

        return [
            'products' => $products
        ];
    }

    /**
     * @Route("/", name="product_new")
     */
    public function newAction(Request $request){
        $product = new Product();

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);


        $em = $this->getDoctrine()->getManager();

        $em->persist($product);
        $em->flush();


    }
}
