<?php

namespace App\Entity\Veiculo;

use App\Entity\Categoria\CategoriaEntityInterface;
use App\Entity\Marca\MarcaEntityInterface;
use App\Entity\Modelo\ModeloEntityInterface;

abstract class AbstractVeiculoEntity implements VeiculoEntityInterface
{
    /**
     * CategoriaEntityInterface categoria
     *
     * @var CategoriaEntityInterface
     */
    protected $categoria;

    /**
     * MarcaEntityInterface marca
     *
     * @var MarcaEntityInterface
     */
    protected $marca;

    /**
     * ModeloEntityInterface modelo
     *
     * @var ModeloEntityInterface
     */
    protected $modelo;

    /**
     * VeiculoEntityInterface url
     *
     * @var String
     */
    protected $url;

    /**
     * VeiculoEntityInterface id
     *
     * @var Int
     */
    protected $id;

    /**
     * VeiculoEntityInterface title
     *
     * @var String
     */
    protected $title;
    
    /**
     * VeiculoEntityInterface price
     *
     * @var String
     */
    protected $price;

    /**
     * VeiculoEntityInterface subtitle
     *
     * @var String
     */
    protected $subtitle;

    /**
     * VeiculoEntityInterface year
     *
     * @var String
     */
    protected $year;

    /**
     * VeiculoEntityInterface km
     *
     * @var String
     */
    protected $km;

    /**
     * VeiculoEntityInterface combustivel
     *
     * @var String
     */
    protected $combustivel;

    /**
     * VeiculoEntityInterface color
     *
     * @var String
     */
    protected $color;

    /**
     * VeiculoEntityInterface placa
     *
     * @var String
     */
    protected $placa;

    /**
     * VeiculoEntityInterface troca
     *
     * @var String
     */
    protected $troca;

    /**
     * VeiculoEntityInterface description
     *
     * @var String
     */
    protected $description;

    /**
     * VeiculoEntityInterface date
     *
     * @var String
     */
    protected $date;

    /**
     * VeiculoEntityInterface owner
     *
     * @var String
     */
    protected $owner;

    /**
     * VeiculoEntityInterface contacts
     *
     * @var array
     */
    protected $contacts;

    /**
     * VeiculoEntityInterface city
     *
     * @var String
     */
    protected $city;

    /**
     * VeiculoEntityInterface images
     *
     * @var array
     */
    protected $images;

    /**
     * VeiculoEntityInterface options
     *
     * @var array
     */
    protected $options;

    /**
     * VeiculoEntityInterface cambio
     *
     * @var String
     */
    protected $cambio;

    /**
     * VeiculoEntityInterface setCategoria
     *
     * @param CategoriaEntityInterface $categoria
     * @return VeiculoEntityInterface
     */
    public function setCategoria(CategoriaEntityInterface $categoria): VeiculoEntityInterface
    {
        $this->categoria = $categoria;
        return $this;
    }

    /**
     * VeiculoEntityInterface getCategoria
     *
     * @return CategoriaEntityInterface
     */
    public function getCategoria(): CategoriaEntityInterface
    {
        return $this->categoria;
    }

    /**
     * VeiculoEntityInterface setMarca
     *
     * @param MarcaEntityInterface $marca
     * @return VeiculoEntityInterface
     */
    public function setMarca(MarcaEntityInterface $marca): VeiculoEntityInterface
    {
        $this->marca = $marca;
        return $this;
    }

    /**
     * VeiculoEntityInterface getMarca
     *
     * @return MarcaEntityInterface
     */
    public function getMarca(): MarcaEntityInterface
    {
        return $this->marca;
    }

    /**
     * VeiculoEntityInterface setModelo
     *
     * @param ModeloEntityInterface $modelo
     * @return VeiculoEntityInterface
     */
    public function setModelo(ModeloEntityInterface $modelo): VeiculoEntityInterface
    {
        $this->modelo = $modelo;
        return $this;
    }

    /**
     * VeiculoEntityInterface getModelo
     *
     * @return ModeloEntityInterface
     */
    public function getModelo(): ModeloEntityInterface
    {
        return $this->modelo;
    }

    /**
     * Get VeiculoEntityInterface url
     *
     * @return  String
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set VeiculoEntityInterface this
     *
     * @return  VeiculoEntityInterface
     */ 
    public function setUrl(String $url): VeiculoEntityInterface
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Get VeiculoEntityInterface id
     *
     * @return  Int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set VeiculoEntityInterface id
     *
     * @param  Int  $id  VeiculoEntityInterface id
     * @return  VeiculoEntityInterface
     */ 
    public function setId(Int $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get VeiculoEntityInterface title
     *
     * @return  String
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set VeiculoEntityInterface title
     *
     * @param  String  $title  VeiculoEntityInterface title
     * @return  VeiculoEntityInterface
     */ 
    public function setTitle(String $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get VeiculoEntityInterface price
     *
     * @return  String
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set VeiculoEntityInterface price
     *
     * @param  String  $price  VeiculoEntityInterface price
     * @return  VeiculoEntityInterface
     */ 
    public function setPrice(String $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get VeiculoEntityInterface options
     *
     * @return  array
     */ 
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set VeiculoEntityInterface options
     *
     * @param  array  $options  VeiculoEntityInterface options
     * @return  VeiculoEntityInterface
     */ 
    public function setOptions(array $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get veiculoEntityInterface subtitle
     *
     * @return  String
     */ 
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set veiculoEntityInterface subtitle
     *
     * @param  String  $subtitle  VeiculoEntityInterface subtitle
     * @return  VeiculoEntityInterface
     */ 
    public function setSubtitle(String $subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Get veiculoEntityInterface year
     *
     * @return  String
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set veiculoEntityInterface year
     *
     * @param  String  $year  VeiculoEntityInterface year
     * @return  VeiculoEntityInterface
     */ 
    public function setYear(String $year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get veiculoEntityInterface km
     *
     * @return  String
     */ 
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Set veiculoEntityInterface km
     *
     * @param  String  $km  VeiculoEntityInterface km
     * @return  VeiculoEntityInterface
     */ 
    public function setKm(String $km)
    {
        $this->km = $km;

        return $this;
    }

    /**
     * Get veiculoEntityInterface combustivel
     *
     * @return  String
     */ 
    public function getCombustivel()
    {
        return $this->combustivel;
    }

    /**
     * Set veiculoEntityInterface combustivel
     *
     * @param  String  $combustivel  VeiculoEntityInterface combustivel
     * @return  VeiculoEntityInterface
     */ 
    public function setCombustivel(String $combustivel)
    {
        $this->combustivel = $combustivel;

        return $this;
    }

    /**
     * Get veiculoEntityInterface color
     *
     * @return  String
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set veiculoEntityInterface color
     *
     * @param  String  $color  VeiculoEntityInterface color
     * @return  VeiculoEntityInterface
     */ 
    public function setColor(String $color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get veiculoEntityInterface placa
     *
     * @return  String
     */ 
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set veiculoEntityInterface placa
     *
     * @param  String  $placa  VeiculoEntityInterface placa
     * @return  VeiculoEntityInterface
     */ 
    public function setPlaca(String $placa)
    {
        $this->placa = $placa;

        return $this;
    }

    /**
     * Get veiculoEntityInterface troca
     *
     * @return  String
     */ 
    public function getTroca()
    {
        return $this->troca;
    }

    /**
     * Set veiculoEntityInterface troca
     *
     * @param  String  $troca  VeiculoEntityInterface troca
     * @return  VeiculoEntityInterface
     */ 
    public function setTroca(String $troca)
    {
        $this->troca = $troca;

        return $this;
    }

    /**
     * Get veiculoEntityInterface description
     *
     * @return  String
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set veiculoEntityInterface description
     *
     * @param  String  $description  VeiculoEntityInterface description
     * @return  VeiculoEntityInterface
     */ 
    public function setDescription(String $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get veiculoEntityInterface date
     *
     * @return  String
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set veiculoEntityInterface date
     *
     * @param  String  $date  VeiculoEntityInterface date
     * @return  VeiculoEntityInterface
     */ 
    public function setDate(String $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get veiculoEntityInterface owner
     *
     * @return  String
     */ 
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set veiculoEntityInterface owner
     *
     * @param  String  $owner  VeiculoEntityInterface owner
     * @return  VeiculoEntityInterface
     */ 
    public function setOwner(String $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get veiculoEntityInterface contacts
     *
     * @return  array
     */ 
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Set veiculoEntityInterface contacts
     *
     * @param  array  $contacts  VeiculoEntityInterface contacts
     * @return  VeiculoEntityInterface
     */ 
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Get veiculoEntityInterface city
     *
     * @return  String
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set veiculoEntityInterface city
     *
     * @param  String  $city  VeiculoEntityInterface city
     * @return  VeiculoEntityInterface
     */ 
    public function setCity(String $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get veiculoEntityInterface images
     *
     * @return  array
     */ 
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set veiculoEntityInterface images
     *
     * @param  array  $images  VeiculoEntityInterface images
     * @return  VeiculoEntityInterface
     */ 
    public function setImages(array $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get veiculoEntityInterface cambio
     *
     * @return  String
     */ 
    public function getCambio()
    {
        return $this->cambio;
    }

    /**
     * Set veiculoEntityInterface cambio
     *
     * @param  String  $cambio  VeiculoEntityInterface cambio
     * @return  VeiculoEntityInterface
     */ 
    public function setCambio(String $cambio)
    {
        $this->cambio = $cambio;
        return $this;
    }
}
