<?php

namespace App\Entity\Veiculo;

use App\Entity\Categoria\CategoriaEntity;
use App\Entity\Marca\MarcaEntity;
use App\Entity\Modelo\ModeloEntity;

class VeiculoEntity extends AbstractVeiculoEntity implements VeiculoEntityInterface
{
    public function __construct(String $categoria='', String $marca='', String $modelo='')
    {
        $this->setCategoria(new CategoriaEntity($categoria));
        $this->setMarca(new MarcaEntity($marca));
        // $this->getMarca()->setCategoria($this->getCategoria());
        // $this->setModelo(new ModeloEntity($modelo));
    }
}
