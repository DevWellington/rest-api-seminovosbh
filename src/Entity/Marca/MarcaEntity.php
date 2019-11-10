<?php

namespace App\Entity\Marca;

use App\Entity\Categoria\CategoriaEntityInterface;

class MarcaEntity implements MarcaEntityInterface
{
    /**
     * MarcaEntityInterface name
     *
     * @var String
     */
    private $name;

    /**
     * MarcaEntityInterface categoria
     *
     * @var CategoriaEntityInterface
     */
    private $categoria;

    /**
     * MarcaEntityInterface __construct
     *
     * @param String $marca
     */
    public function __construct(String $marca = '')
    {
        $this->name = $marca;
    }

    /**
     * MarcaEntityInterface getName
     *
     * @return String
     */
    public function getName(): String
    {
        return $this->name;
    }

    /**
     * MarcaEntityInterface setName
     *
     * @param String $name
     * @return MarcaEntityInterface
     */
    public function setName(String $name): MarcaEntityInterface
    {
        $this->name = $name;
        return $this;
    }

    /**
     * MarcaEntityInterface setCategoria
     *
     * @param String $categoria
     * @return MarcaEntityInterface
     */
    public function setCategoria(String $categoria): MarcaEntityInterface
    {
        $this->categoria = $categoria;
        return $this;
    }

    /**
     * MarcaEntityInterface getCategoria
     *
     * @return CategoriaEntityInterface
     */
    public function getCategoria(): CategoriaEntityInterface
    {
        return $this->categoria;
    }
}
