<?php

namespace App\Controller\V1;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\Model;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\FOSRestController;

/**
 * @Route("/api/v1/", name="api_")
 */
class ApiController extends FOSRestController
{

    /**
     * @Rest\Get("test/", name="test_")
     *
     * @return View
     */
    public function getTest()
    {
        return $this->view(array('0fff' => 'teste', [['fla' => 'flaoa', '2019' => '09', '01'], false], 'faks'));
    }
}
