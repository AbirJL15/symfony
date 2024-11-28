<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(): Response
    {
        return $this->render('site/homepage.html.twig');
    }

    #[Route('/products', name: 'products_list')]
    public function productsList(): Response
    {
        $products = [
            ['id' => 1, 'name' => 'MacBook Pro', 'price' => 2000],
            ['id' => 2, 'name' => 'Iphone 15', 'price' => 1200],
            ['id' => 3, 'name' => 'Sony WH-1000XM5', 'price' => 350],
        ];

        return $this->render('site/products.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/product/{id}', name: 'product_detail')]
    public function productDetail(int $id): Response
    {
        $products = [
            1 => ['name' => 'MacBook Pro', 'price' => 2000, 'description' => 'Ordinateur portable performant pour les professionnels.'],
            2 => ['name' => 'Iphone 15', 'price' => 1200, 'description' => 'Smartphone dernier cri avec appareil photo exceptionnel'],
            3 => ['name' => 'Sony WH-1000XM5', 'price' => 350, 'description' => 'Casque sans fil avec réduction de bruit active.'],
        ];

        if (!isset($products[$id])) {
            throw $this->createNotFoundException('Produit non trouvé');
        }

        return $this->render('site/product_detail.html.twig', [
            'product' => $products[$id],
        ]);
    }
}
