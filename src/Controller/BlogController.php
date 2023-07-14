<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    public function list(int $page): Response
    {
        return new Response($page);
    }

    public function show(BlogPost $post): Response
    {
        return new Response();
    }
}