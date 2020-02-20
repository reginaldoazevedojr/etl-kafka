<?php
declare(strict_types=1);

namespace App\Controller;

use RdKafka\Conf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ConsumerController
 * @package App\Controller
 */
class ConsumerController extends AbstractController
{
    /**
     * @Route(path="/consumer", methods={"GET"})
     */
    public function consumer()
    {
        $conf = new Conf();
        $conf->set('log_level', (string) LOG_DEBUG);
        $conf->set('debug', 'all');

        $consumer = new \RdKafka\Consumer($conf);

        $consumer->addBrokers("localhost:9092");

        $topic = $consumer->newTopic('test');

        $topic->consumeStart(0, 5);

        $message = $topic->consume(0, 1000);

        return new JsonResponse($message->payload);
    }
}