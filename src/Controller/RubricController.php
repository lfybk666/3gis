<?php

declare(strict_types=1);

namespace App\Controller;

use App\Application\JsonResponse;
use App\Application\Response;
use App\Model\Rubric;
use App\Services\DBConnection;
use PDO;

class RubricController
{

    public function __construct()
    {

    }

    public function getRubricList()
    {
        $connection = DBConnection::getInstance();
        $rubrics = $connection->query('select * from rubric');
        $rubrics->setFetchMode(PDO::FETCH_CLASS, Rubric::class);
        $a = $rubrics->fetchAll();

        return new JsonResponse($a, 200);
    }


}
