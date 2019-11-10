<?php

namespace App\Controller\V1;

use App\Crawler\VeiculoCrawler;
use App\Entity\Categoria\CategoriaEntity;
use App\Entity\Marca\MarcaEntity;
use App\Entity\Modelo\ModeloEntity;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
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
     * @Rest\Get("veiculos/", name="veiculos_")
     *
     * @return View
     */
    public function getVeiculos(Request $request)
    {
        $crawler = new VeiculoCrawler($request);
        $veiculos = $crawler->listAll();

        return $this->view($veiculos);
    }

    /**
     * @Rest\Get("veiculo/{id}", name="veiculo_")
     *
     * @return View
     */
    public function getVeiculo(Request $request, $id)
    {
        $crawler = new VeiculoCrawler($request);
        $veiculo = $crawler->getById($id);

        return $this->view($veiculo);
    }
}
