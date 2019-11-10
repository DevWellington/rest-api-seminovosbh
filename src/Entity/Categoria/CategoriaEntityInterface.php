<?php

namespace App\Entity\Categoria;

interface CategoriaEntityInterface 
{
    /**
     * CategoriaEntityInterface getName
     *
     * @return void
     */
    public function getName() : String;

    /**
     * CategoriaEntityInterface setName
     *
     * @param [String] $name
     * @return CategoriaEntityInterface
     */
    public function setName(String $name): CategoriaEntityInterface;
}