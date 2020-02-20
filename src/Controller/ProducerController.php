<?php
declare(strict_types=1);

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;
use RdKafka\Conf;
use RdKafka\Producer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProducerController
 * @package App\Controller
 * @author Reginaldo Azevedo Junior <reginaldo.junior@mutua.com.br>
 */
class ProducerController extends AbstractController
{
    /**
     * @Route(path="/producer", methods={"GET"})
     */
    public function producer()
    {
        /** @var EntityManager $entityManager */
        $entityManager = $this->getDoctrine()->getManager('old');

        $sql = <<<SQL
            DECLARE @from_lsn binary (10), @to_lsn binary (10), @row_filter_option nvarchar(30)
            SET @from_lsn = sys.fn_cdc_get_min_lsn('dbo_cia_associado')
            SET @to_lsn = sys.fn_cdc_get_max_lsn()
            SET @row_filter_option = 'all'
            SELECT *
            FROM cdc.fn_cdc_get_all_changes_dbo_cia_associado(@from_lsn, @to_lsn, @row_filter_option)            
        SQL;
        $results = $entityManager->getConnection()->query($sql);

        $data = [];
        foreach ($results as $result) {
            dump($result);exit;
        }

        $conf = new Conf();
        $conf->set('log_level', (string) LOG_DEBUG);
        $conf->set('debug', 'all');

        $producer = new Producer($conf);
        $producer->addBrokers("localhost:9092");

        $topic = $producer->newTopic('test');

        $topic->produce(RD_KAFKA_PARTITION_UA, 0, 'Mensagem meu brother 2');

        $producer->flush(1000);

        return new JsonResponse('ok');
    }
}