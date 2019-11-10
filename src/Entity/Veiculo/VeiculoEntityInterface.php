<?php

namespace App\Entity\Veiculo;

use App\Entity\Categoria\CategoriaEntityInterface;
use App\Entity\Marca\MarcaEntityInterface;
use App\Entity\Modelo\ModeloEntityInterface;

interface VeiculoEntityInterface
{
    /**
     * VeiculoEntityInterface setCategoria
     *
     * @param CategoriaEntityInterface $categoria
     * @return VeiculoEntityInterface
     */
    public function setCategoria(CategoriaEntityInterface $categoria): VeiculoEntityInterface;

    /**
     * VeiculoEntityInterface getCategoria
     *
     * @return CategoriaEntityInterface
     */
    public function getCategoria(): CategoriaEntityInterface;

    /**
     * VeiculoEntityInterface setMarca
     *
     * @param MarcaEntityInterface $marca
     * @return VeiculoEntityInterface
     */
    public function setMarca(MarcaEntityInterface $marca): VeiculoEntityInterface;

    /**
     * VeiculoEntityInterface getMarca
     *
     * @return MarcaEntityInterface
     */
    public function getMarca(): MarcaEntityInterface;

    /**
     * VeiculoEntityInterface setModelo
     *
     * @param ModeloEntityInterface $modelo
     * @return VeiculoEntityInterface
     */
    public function setModelo(ModeloEntityInterface $modelo): VeiculoEntityInterface;

    /**
     * VeiculoEntityInterface getModelo
     *
     * @return ModeloEntityInterface
     */
    public function getModelo(): ModeloEntityInterface;
}

