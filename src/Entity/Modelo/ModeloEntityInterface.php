<?php

namespace App\Entity\Modelo;

use App\Entity\Marca\MarcaEntityInterface;

interface ModeloEntityInterface
{
    /**
     * ModeloEntityInterface getName
     *
     * @return void
     */
    public function getName(): String;

    /**
     * ModeloEntityInterface setName
     *
     * @param [String] $name
     * @return ModeloEntityInterface
     */
    public function setName(String $name): ModeloEntityInterface;

    /**
     * ModeloEntityInterface setMarca
     *
     * @param MarcaEntityInterface $marca
     * @return ModeloEntityInterface
     */
    public function setMarca(MarcaEntityInterface $marca): ModeloEntityInterface;

    /**
     * ModeloEntityInterface getMarca
     *
     * @return MarcaEntityInterface
     */
    public function getMarca(): MarcaEntityInterface;
}
