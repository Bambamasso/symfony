<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    
    #[Route('/blog/{id}/{name}', name: 'app_blog',requirements:["name"=>"[a-z]{5,50}"])]
    public function index( int $id, string $name): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'id'=>$id,
            'name'=>$name,
        ]);
    }
    #[Route('/', name: 'app_hello')]
    public function hello(): Response
    {
        return new response('<h1>hello word</h1>');
    }
}
