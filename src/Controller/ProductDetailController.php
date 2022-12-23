<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Repository\ProductRepository;

class ProductDetailController extends AbstractController
{
    /**
     * @Route("/home/{id}", name="home.detail")
     */
    public function index(Product $product): Response
    {
        return $this->render('product_detail/index.html.twig', [
            'product' => $product,
        ]);
    }
}
