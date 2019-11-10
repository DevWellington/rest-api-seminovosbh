<?php

namespace App\Entity\Categoria;

class CategoriaEntity implements CategoriaEntityInterface
{
    /**
     * Categoria Name
     *
     * @var String
     */
    private $name;

    /**
     * CategoriaEntityInterface function
     *
     * @param String $categoria
     */
    public function __construct(String $categoria = '')
    {
        $this->name = $categoria;
    }

    /**
     * Get name of CategoryEntity
     *
     * @return String
     */
    public function getName(): String
    {
        return $this->name;
    }

    /**
     * Set name of CategoryEntity
     *
     * @param [String] $name
     * @return CategoriaEntityInterface
     */
    public function setName(String $name): CategoriaEntityInterface
    {
        $this->name = $name;
        return $this;        
    }
    
}
