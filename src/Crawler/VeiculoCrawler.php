<?php

namespace App\Crawler;

use App\Entity\Categoria\CategoriaEntity;
use App\Entity\Categoria\CategoriaEntityInterface;
use App\Entity\Marca\MarcaEntity;
use App\Entity\Marca\MarcaEntityInterface;
use App\Entity\Modelo\ModeloEntity;
use App\Entity\Modelo\ModeloEntityInterface;
use App\Entity\Veiculo\VeiculoEntity;
use App\Entity\Veiculo\VeiculoEntityInterface;
use QL\QueryList;
use Symfony\Component\HttpFoundation\Request;

class VeiculoCrawler implements VeiculoCrawlerInterface
{

    /**
     * VeiculoCrawlerInterface veiculo
     *
     * @var VeiculoEntityInterface
     */
    private $veiculo;

    /**
     * VeiculoEntityInterface veiculos
     *
     * @var array
     */
    private $veiculos;

    /**
     * VeiculoEntityInterface url
     *
     * @var array
     */
    private $url;

    /**
     * VeiculoCrawlerInterface categoria
     *
     * @var CategoriaEntityInterface
     */
    private $categoria;


    /**
     * VeiculoCrawlerInterface marca
     *
     * @var MarcaEntityInterface
     */
    private $marca;

    /**
     * VeiculoCrawlerInterface modelo
     *
     * @var ModeloEntityInterface 
     */
    private $modelo;

    /**
     * VeiculoCrawlerInterface page
     *
     * @var array
     */
    private $page;

    /**
     * VeiculoCrawlerInterface result
     *
     * @var array
     */
    private $result;

    /**
     * VeiculoCrawlerInterface function
     * 
     * @todo Create class to manupulate Estoque data of Request API
     * 
     * EstoqueCrawler.php
     * EstoqueCrawlerInterface.php
     * 
     * time exceeded to create
     * 
     * @param [type] $ql
     * @return array
     */    
    private $estoque;

    /**
     * VeiculoCrawlerInterface __construct
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        \set_time_limit(300);

        $this->veiculo = new VeiculoEntity();
        $this->url['portal'] = 'https://seminovos.com.br';

        /**
         * @todo Create class to return API error of default values of portal
         * 
         * https://seminovos.com.br/filtros?[captured-last-version-in-app.js]
         * 
         * MessageCrawler
         * MessageCrawlerInterface
         * 
         * time exceeded to create
         */
        $this
            ->setCategoria(new CategoriaEntity(
                ($request->query->get('categoria')) ?
                    $request->query->get('categoria') : 'carro'
            ))        
            ->setMarca(new MarcaEntity(
                ($request->query->get('marca')) ?
                    $request->query->get('marca') : 'fiat'
            ))
            ->setModelo(new ModeloEntity(
                ($request->query->get('modelo')) ?
                    $request->query->get('modelo') : '147'                
            ))
        ;

        /**
         * @todo Create class to filter data of Request API
         * 
         * FilterCrawler.php
         * FilterCrawlerInterface.php
         * 
         * time exceeded to create
         * 
         */
        $this->page['atual'] = $request->query->get('page_atual') ? $request->query->get('page_atual') : 1;
        $this->ano['inicio'] = $request->query->get('ano_inicio');
        $this->ano['fim'] = $request->query->get('ano_fim');
        $this->preco['inicio'] = $request->query->get('preco_inicio');
        $this->preco['fim'] = $request->query->get('preco_fim');
        $this->km['inicio'] = $request->query->get('km_inicio');
        $this->km['fim'] = $request->query->get('km_fim');

    }

    /**
     * @todo Create class to filter data of Request API
     * 
     * FilterCrawler.php
     * FilterCrawlerInterface.php
     * 
     * time exceeded to create
     * 
     * @param [type] $ql
     * @return void
     */
    public function listAll()
    {        
        $this->makeUrl();
        $ql = QueryList::get($this->url['crawler'])->encoding('UTF-8');

        $this->estoque = $this->getEstoque($ql);
        $this->makeListAll($ql);

        return [
            'url' => $this->url,
            'pagina' => $this->page,
            'estoque' => $this->estoque,
            'veiculos' => $this->veiculos,
            'result' => $this->result
        ];

    }

    /**
     * VeiculoCrawlerInterface getById
     *
     * @param Int $id
     * @return void
     */
    public function getById(Int $id = 0)
    {
        $this->veiculo->setId($id);

        $this->makeUrl();
        $ql = QueryList::get($this->url['crawler'])->encoding('UTF-8');

        $this->veiculo
            ->setCategoria(new CategoriaEntity($ql->find('.breadcrumb div a:eq(0)')->text()))
            ->setMarca(new MarcaEntity($ql->find('.breadcrumb div a:eq(2)')->text()))
            ->setModelo(new ModeloEntity($ql->find('.breadcrumb div a:eq(3)')->text()))

            ->setUrl($this->url['crawler'])
            ->setTitle($ql->find('.item-info>.mb-0')->text())
            ->setPrice($ql->find('.item-info>.price')->text())
            ->setSubtitle($ql->find('.item-info p.desc')->text())
            ->setYear($ql->find('.attr-list span[title="Ano/modelo"]')->text())
            ->setKm($ql->find('.attr-list span[title="Kilometragem do veículo"]')->text())
            ->setCombustivel($ql->find('.attr-list span[title="Tipo de combustível"]')->text())
            ->setColor($ql->find('.attr-list span[title="Cor do veículo"]')->text())
            ->setPlaca($ql->find('.attr-list span[title="Final da placa"]')->text())
            ->setTroca($ql->find('.attr-list span[title="Aceita troca?"]')->text())
            ->setDescription($ql->find('.full-content .description-print')->text())
            ->setDate($ql->find('.item-date span')->text())
            ->setOwner($ql->find('.block-box .block-owner .owner-info h5')->text())
            ->setContacts($ql->find('.owner-contacts span.d-none')->texts()->all())
            ->setCity($ql->find('.block-box.block-contact .single')->text())
            ->setImages($ql->find('.gallery-thumbs .list-unstyled li img.available')->attrs('data-src')->all())
            ->setOptions($ql->find('.full-features .list-styled li')->texts()->all());

        if ($this->veiculo) {
            $this->result['code'] = 200;
            $this->result['message'] = 'Sucesso na coleta dos registros!';
        } else {
            $this->result['code'] = 404;
            $this->result['message'] = 'A coleta dos registros não retornou nenhum dado.';
        }

        return [
            'url' => $this->url,
            'veiculo' => $this->veiculo,
            'result' => $this->result
        ];
    }

    /**
     * @todo Create class to filter data of Request API
     * 
     * FilterCrawler.php
     * FilterCrawlerInterface.php
     * 
     * time exceeded to create
     * 
     * @param [type] $ql
     * @return void
     */
    private function makeListAll($ql)
    {
        $index = 0;
        $data = $ql->find('.list-of-cards')->map(function ($item) use ($index) {

            $car[$index]['url'] = $item->find('a.card-heading')->attrs('href')->all();
            $car[$index]['img'] = $item->find('figure img')->attrs('src')->all();
            $car[$index]['title'] = $item->find('.card-title')->texts()->all();
            $car[$index]['price'] = $item->find('.card-price')->texts()->all();
            $car[$index]['subtitle'] = $item->find('.card-subtitle')->texts()->all();
            $car[$index]['year'] = $item->find('.list-features li[title="Ano de fabricação"]')->texts()->all();
            $car[$index]['km'] = $item->find('.list-features li[title="Kilometragem atual"]')->texts()->all();
            $car[$index]['cambio'] = $item->find('.list-features li[title="Tipo de câmbio"]')->texts()->all();
            $car[$index]['options'] = $this->formatListValues($item->find('.list-inline')->texts()->all());

            $index++;
            return $car;
        });

        $result = [];
        if (isset($data->all()[0]))
            if (isset($data->all()[0][0]))
                $result = $data->all()[0][0];

        $veiculos = [];
        foreach ($result as $type => $veiculo) {
            if ($veiculo) {
                foreach ($veiculo as $key => $value) {
                    if ($type == 'url') {
                        $value = explode('/', $value)[1];
                        $veiculos[$key]['id'] = array_reverse(explode('-', $value))[0];
                    }
                    $veiculos[$key][$type] = $value;
                }

                $this->result['code'] = 200;
                $this->result['message'] = 'Sucesso na coleta dos registros!';
            } else {
                $this->result['code'] = 404;
                $this->result['message'] = 'A coleta dos registros não retornou nenhum dado.';

                $veiculos[] = null;
            }
        };

        foreach ($veiculos as $key => $veiculo) {
            $veiculo_list = new VeiculoEntity();
            $veiculo_list
                ->setCategoria(new CategoriaEntity($this->categoria->getName()))
                ->setMarca(new MarcaEntity($this->marca->getName()))
                ->setId($veiculo['id'])
                ->setUrl($veiculo['url'])
                // @todo fix bug
                ->setImages([$veiculo['img']])
                ->setTitle($veiculo['title'])
                ->setPrice($veiculo['price'])
                ->setSubtitle($veiculo['subtitle'])
                ->setYear($veiculo['year'])
                ->setKm($veiculo['km'])
                ->setCambio($veiculo['cambio'])
                // @todo fix bug
                ->setOptions([$veiculo['options']])
            ;

            $this->veiculos[$key] = $veiculo_list;
        }

        return $this;
    }

    /**
     * VeiculoCrawler formatListValues
     *
     * @param [type] $params
     * @return void
     */
    private function formatListValues($params)
    {
        $result = null;
        foreach ($params as $key => $value) {
            $value = str_ireplace("\n","",$value);

            $result[] = [$key => explode(', ',$value)];
        }
        return $result;
    }

    /**
     * VeiculoCrawlerInterface function
     * 
     * @todo Create class to manupulate Estoque data of Request API
     * 
     * EstoqueCrawler.php
     * EstoqueCrawlerInterface.php
     * 
     * time exceeded to create
     * 
     * @param [type] $ql
     * @return array
     */
    private function getEstoque($ql): array
    {
        $this->estoque = [
            'pagina_atual' => 0,
            'total' => 0
        ];

        $this->page['total'] = 0;

        $aux_page_atual = $this->page['atual'];

        $this->estoque['pagina_atual'] = count($ql->find('.list-of-cards')->find('.card-title')->texts()->all());

        $pages = $ql->find('.pagination-container b.cor-laranja')->texts()->all();
        $qtde_pages = isset($pages[1]) ? $pages[1] : 0;

        for ($i = 0; $i < $qtde_pages; $i++) {
            $this->page['total'] = $i + 1;
            $this->page['atual'] = $i + 1;

            $this->makeUrl();
            $ql_total = QueryList::get($this->url['crawler'])->encoding('UTF-8');

            $this->estoque['total'] += count($ql_total->find('.list-of-cards')->find('.card-title')->texts()->all());
        }

        // renew url
        $this->page['atual'] = $aux_page_atual;
        $this->makeUrl();

        return $this->estoque;
    }

    /**
     * VeiculoCrawlerInterface makeUrl
     * 
     * @todo Create class to otimize filter data in url
     *
     * @return array
     */
    private function makeUrl(): VeiculoCrawlerInterface
    {
        $this->url['crawler']  = $this->url['portal'];
        $this->url['crawler'] .= ($this->categoria->getName()) ? '/' . $this->categoria->getName() : '';
        $this->url['crawler'] .= ($this->marca->getName()) ? '/' . $this->marca->getName() : '';
        $this->url['crawler'] .= ($this->modelo->getName()) ? '/' . $this->modelo->getName() : '';

        if ($this->ano['inicio']) {
            $this->url['crawler'] .= '/ano-' . $this->ano['inicio'];

            if ($this->ano['fim']) {
                $this->url['crawler'] .= '-' . $this->ano['fim'];
            }
        } else if ($this->ano['fim']) {
            $this->url['crawler'] .= '/ano--' . $this->ano['fim'];
        }

        if ($this->preco['inicio']) {
            $this->url['crawler'] .= '/preco-' . $this->preco['inicio'];

            if ($this->preco['fim']) {
                $this->url['crawler'] .= '-' . $this->preco['fim'];
            }
        } else if ($this->preco['fim']) {
            $this->url['crawler'] .= '/preco--' . $this->preco['fim'];
        }

        if ($this->km['inicio']) {
            $this->url['crawler'] .= '/km-' . $this->km['inicio'];

            if ($this->km['fim']) {
                $this->url['crawler'] .= '-' . $this->km['fim'];
            }
        } else if ($this->km['fim']) {
            $this->url['crawler'] .= '/km--' . $this->km['fim'];
        }

        $this->url['crawler'] .= ($this->page['atual']) ? '?page=' . $this->page['atual'] : '';

        $this->url['crawler'] .= ($this->veiculo->getId()) ? '/' . $this->veiculo->getId() : '';

        return $this;
    }

    /**
     * Get veiculoCrawlerInterface categoria
     *
     * @return  CategoriaEntityInterface
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set veiculoCrawlerInterface categoria
     *
     * @param  CategoriaEntityInterface  $categoria  VeiculoCrawlerInterface categoria
     * @return  VeiculoCrawlerInterface
     */ 
    public function setCategoria(CategoriaEntityInterface $categoria)
    {
        $this->categoria = $categoria;
        return $this;
    }

    /**
     * Get veiculoCrawlerInterface marca
     *
     * @return  MarcaEntityInterface
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set veiculoCrawlerInterface marca
     *
     * @param  MarcaEntityInterface  $marca  VeiculoCrawlerInterface marca
     * @return  VeiculoCrawlerInterface
     */ 
    public function setMarca(MarcaEntityInterface $marca)
    {
        $this->marca = $marca;
        return $this;
    }

    /**
     * Get veiculoCrawlerInterface modelo
     *
     * @return  ModeloEntityInterface
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set veiculoCrawlerInterface modelo
     *
     * @param  ModeloEntityInterface  $modelo  VeiculoCrawlerInterface modelo
     * @return  VeiculoCrawlerInterface
     */ 
    public function setModelo(ModeloEntityInterface $modelo)
    {
        $this->modelo = $modelo;
        return $this;
    }
}
