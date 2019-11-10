<?php

namespace App\Entity\Marca;

use App\Entity\Categoria\CategoriaEntityInterface;

interface MarcaEntityInterface
{
    /**
     * MarcaEntityInterface getName
     *
     * @return String
     */
    public function getName(): String;

    /**
     * MarcaEntityInterface setName
     *
     * @param String $name
     * @return MarcaEntityInterface
     */
    public function setName(String $name): MarcaEntityInterface;

    /**
     * MarcaEntityInterface setCategoria
     *
     * @param String $categoria
     * @return MarcaEntityInterface
     */
    public function setCategoria(String $categoria): MarcaEntityInterface;

    /**
     * MarcaEntityInterface getCategoria
     *
     * @return CategoriaEntityInterface
     */
    public function getCategoria(): CategoriaEntityInterface;
}
