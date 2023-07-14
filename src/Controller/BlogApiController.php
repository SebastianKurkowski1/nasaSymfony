<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class BlogApiController extends AbstractController
{
    public function show(int $id): Response
    {
      return new Response($id);
        // ... return a JSON response with the post
    }

    public function edit(int $id): Response
    {
        // ... edit a post
    }
}