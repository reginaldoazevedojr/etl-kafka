<?php
declare(strict_types=1);

namespace App\Controller;


use App\Entity\Associado;
use App\Service\MessageGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    public function dashboard(LoggerInterface $logger, MessageGenerator $messageGenerator)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $associado = new Associado();

        $associado->setNome('Reginaldo Azevedo Junior');
        $associado->setDataHomologacao(new \DateTime());
        $associado->setSexo('M');

        $entityManager->persist($associado);
        $entityManager->flush();

        $logger->info('home page in action');
        return new JsonResponse([
            'Id' => $associado->getId(),
            'message' => $messageGenerator->getHappyMessage()
        ]);
    }
}