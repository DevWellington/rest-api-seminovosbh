<?php

namespace App\Entity\Modelo;

use App\Entity\Marca\MarcaEntity;
use App\Entity\Marca\MarcaEntityInterface;

class ModeloEntity implements ModeloEntityInterface
{
    /**
     * Modelo name
     *
     * @var String
     */
    private $name;

    /**
     * MarcaEntityInterface marca
     *
     * @var MarcaEntityInterface
     */
    private $marca;

    /**
     * ModeloEntityInterface __construct
     *
     * @param String $modelo
     */
    public function __construct(String $modelo = '')
    {
        $this->name = $modelo;
    }

    /**
     * ModeloEntityInterface getName
     *
     * @return String
     */
    public function getName(): String
    {
        return $this->name;
    }

    /**
     * ModeloEntityInterface setName
     *
     * @param [String] $name
     * @return ModeloEntityInterface
     */
    public function setName(String $name): ModeloEntityInterface
    {
        $this->name = $name;
        return $this;
    }

    /**
     * ModeloEntityInterface setMarca
     *
     * @param MarcaEntityInterface $marca
     * @return ModeloEntityInterface
     */
    public function setMarca(MarcaEntityInterface $marca): ModeloEntityInterface
    {
        $this->marca = $marca;
        return $this;
    }

    /**
     * ModeloEntityInterface getMarca
     *
     * @return MarcaEntityInterface
     */
    public function getMarca(): MarcaEntityInterface
    {
        return $this->marca;
    }
}
