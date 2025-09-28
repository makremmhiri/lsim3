<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class BookController extends AbstractController
{
    #[Route('/livre', name: 'book_index')]
    public function index(): Response
    {
        $livres = [

        ['id'=>1, 'titre'=>'Clean Code', 'auteur'=>'Robert C. Martin'],

        ['id'=>2, 'titre'=>'Le Petit Prince', 'auteur'=>'A. de Saint-Exupéry'],

        ];
        $a=5+2;

        // return $this->render('book/index.html.twig', [
        //     'controller_name' => 'BookController',
        // ]);
        // return $this->render('book/index.html.twig');
        return $this->render('book/index.html.twig', ['livre' => $livres]);//,'aa'=>$a
    }
    public function edit(int $id): Response
    {
    return new Response("<h2>Édition du livre #$id</h2>");
    }

    public function delete(int $id): Response
    {
    return new Response("<h2>Suppression du livre #$id</h2>");
    }

    #[Route('/livre/{id}', name: 'book_show')]
    public function show(int $id): Response
    {
    return $this->render('book/show.html.twig', ['id' => $id]);
    }
}
