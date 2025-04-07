<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'test')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('/test.html.twig', [
            'number' => $number,
        ]);
    }
}

?>