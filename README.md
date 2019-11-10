# Rest API Seminovos BH

Microservice of Rest API to portal Seminovos BH of buying and sellings cars in Belo Horizonte - MG - Brazil and regions.

https://seminovos.com.br/

## About project

#### Image with solution drawing and project architecture
![Idea propused of project in image project](./image-of-project.png)

## TODO

Find in **@todo** in the PHP Class Codes to proceed the evolution of the project, it was initially developed with ultra-short proposed time.

## Possible filters:

Using service of portal to collect data of filter:

https://seminovos.com.br/filtros?[captured-last-version-in-app.js]

- List all vehicles:
    - categoria: (carro, moto, caminhao)
    - marca: (honda,fiat,etc...)
    - modelo: (accord,fit,etc..)
    - ano_inicio: (int value)
    - ano_fim: (int value)
    - preco_inicio: (int value)
    - preco_fim: (int value)
    - km_inicio: (int value)
    - km_fim: (int value)
    - **URL Example:** http://your-app-url/api/v1/veiculos/?categoria=carro&marca=honda&modelo=accord

- List by id/cod:
    - id (int value)
    - **URL Example:** http://your-app-url/api/v1/veiculo/2541479

## Examples
Example list all by filter route: http://your-app-url/api/v1/veiculos/?categoria=carro&marca=honda&modelo=accord


```json
{
    "url": {
        "portal": "https://seminovos.com.br",
        "crawler": "https://seminovos.com.br/carro/honda/accord?page=1"
    },
    "pagina": {
        "atual": "1",
        "total": 2
    },
    "estoque": {
        "pagina_atual": 20,
        "total": 27
    },
    "veiculos": [
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-1994--2497282",
            "id": 2497282,
            "title": "Honda Accord",
            "price": "R$ 23.900,00",
            "subtitle": "VERS\u00c3O: 2.2 EX",
            "year": "1994-1994",
            "km": "73.000 km",
            "images": [
                "https://carros.seminovosbh.com.br/honda-accord-1994-1994-2497282-4194132bfe8d66b1646267b94de8c0b99e2c.jpg"
            ],
            "options": [
                [
                    [
                        "ABS",
                        "AIR BAGS 2",
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "(+12)"
                    ]
                ]
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2006--2646133",
            "id": 2646133,
            "title": "Honda Accord",
            "price": "R$ 21.900,00",
            "subtitle": "VERS\u00c3O: 2.0 16v LX 2.0",
            "year": "2006-2006",
            "km": "149.000 km",
            "images": [
                "https://carros.seminovosbh.com.br/honda-accord-2006-2006-2646133-6393690a17055d050f7dd1c723834b07000.jpg"
            ],
            "options": [
                {
                    "1": [
                        "ABS",
                        "AIR BAGS 2",
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "(+8)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2008--2581059",
            "id": 2581059,
            "title": "Honda Accord",
            "price": "Valor a combinar",
            "subtitle": "VERS\u00c3O: 3.5 EX V6",
            "year": "2008-2008",
            "km": "154.557 km",
            "images": [
                "https://carros.seminovosbh.com.br/honda-accord-2008-2008-2581059-401395fc104dd0d4658d34c0ddd6f2ecdc0f.jpg"
            ],
            "options": [
                {
                    "2": [
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "BANCOS DE COURO",
                        "C\u00c2MBIO AUTOM\u00c1TICO",
                        "(+9)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2005--2009809",
            "id": 2009809,
            "title": "Honda Accord",
            "price": "R$ 34.000,00",
            "subtitle": "VERS\u00c3O: 3.0 V6 Autom\u00e1tico + Teto",
            "year": "2005-2005",
            "km": "133.000 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "3": [
                        "ABS",
                        "AIR BAGS 4",
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "(+19)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-1996--2636213",
            "id": 2636213,
            "title": "Honda Accord",
            "price": "R$ 12.900,00",
            "subtitle": "VERS\u00c3O: Coupe EX",
            "year": "1996-1996",
            "km": "240.000 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "4": [
                        "AIR BAGS 2",
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "C\u00c2MBIO AUTOM\u00c1TICO",
                        "(+7)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2008--2542629",
            "id": 2542629,
            "title": "Honda Accord",
            "price": "R$ 38.000,00",
            "subtitle": "VERS\u00c3O: 3.5 24v Ex V6",
            "year": "2008-2008",
            "km": "167.000 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "5": [
                        "ABS",
                        "AIR BAGS 6",
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        " (+16)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2010--2614542",
            "id": 2614542,
            "title": "Honda Accord",
            "price": "R$ 45.000,00",
            "subtitle": "VERS\u00c3O: 3.5 EX V6 + TETO, AUT.",
            "year": "2010-2010",
            "km": "0 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "6": [
                        "ABS",
                        "AIR BAGS 2",
                        " ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "(+11)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2007--2425119",
            "id": 2425119,
            "title": "Honda Accord",
            "price": "R$ 21.500,00",
            "subtitle": "VERS\u00c3O: 2.0 8v LX",
            "year": "2007-2007",
            "km": "0 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "7": [
                        "AIR BAGS 2",
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "BANCOS DE COURO",
                        "(+9)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2008--2643289",
            "id": 2643289,
            "title": "Honda Accord",
            "price": "R$ 34.900,00",
            "subtitle": "VERS\u00c3O: 3.5 24v EX V6",
            "year": "2008-2008",
            "km": "132.800 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "8": [
                        "ABS",
                        "AIR BAGS 6",
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "(+18)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2008-2009--2440944",
            "id": 2440944,
            "title": "Honda Accord",
            "price": "R$ 32.500,00",
            "subtitle": "VERS\u00c3O: 3.5 EX V6 I-VTEC",
            "year": "2008-2009",
            "km": "122.842 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "9": [
                        "ABS",
                        "AIR BAGS 2",
                        "ALARME",
                        "AR CONDICIONADO",
                        "BANCOS DE COURO",
                        "(+15)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2014--2641024",
            "id": 2641024,
            "title": "Honda Accord",
            "price": "R$ 79.990,00",
            "subtitle": "VERS\u00c3O: 3.5 6v ACCORD SEDAN",
            "year": "2014-2014",
            "km": "34.000 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "10": [
                        "ABS",
                        "AR CONDICIONADO",
                        "BANCOS DE COURO",
                        "C\u00c2MBIO AUTOM\u00c1TICO",
                        "COMPUTADOR DE BORDO",
                        "(+6)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2005--2594666",
            "id": 2594666,
            "title": "Honda Accord",
            "price": "R$ 23.900,00",
            "subtitle": "VERS\u00c3O: 3.0 24v Sedan Ex V6 240cv",
            "year": "2005-2005",
            "km": "116.000 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "11": [
                        "AIR BAGS 1",
                        "AR CONDICIONADO",
                        "BANCOS DE COURO",
                        "C\u00c2MBIO AUTOM\u00c1TICO",
                        "DIRE\u00c7\u00c3O HIDR\u00c1ULICA",
                        "(+2)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2006--2608403",
            "id": 2608403,
            "title": "Honda Accord",
            "price": "R$ 22.900,00",
            "subtitle": "VERS\u00c3O: 2.0 ACCORD LX 2.0",
            "year": "2006-2006",
            "km": "190 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "12": [
                        "ABS",
                        "AIR BAGS 2",
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "(+10)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2016--2604974",
            "id": 2604974,
            "title": "Honda Accord",
            "price": "R$ 115.900,00",
            "subtitle": "VERS\u00c3O: 3.5 EX",
            "year": "2016-2016",
            "km": "18.605 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "13": [
                        "ABS",
                        "AIR BAGS 2",
                        "ALARME",
                        "AR CONDICIONADO",
                        " AR QUENTE",
                        "(+18)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2014--2560350",
            "id": 2560350,
            "title": "Honda Accord",
            "price": "R$ 74.900,00",
            "subtitle": "VERS\u00c3O: 3.5 24v EX V6",
            "year": "2014-2014",
            "km": "45 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "14": [
                        "ABS",
                        "ALARME",
                        "AR CONDICIONADO",
                        "BANCOS DE COURO",
                        "C\u00c2MBIO AUTOM\u00c1TICO",
                        "(+11)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2008--2615999",
            "id": 2615999,
            "title": "Honda Accord",
            "price": "R$ 30.000,00",
            "subtitle": "VERS\u00c3O: 3.5 24v EX V6",
            "year": "2008-2008",
            "km": "172.000 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "15": [
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "DIRE\u00c7\u00c3O HIDR\u00c1ULICA",
                        "FAROL XEN\u00d4NIO",
                        "(+2)"
                    ]
                }
            ],
            "cambio": "N\u00e3o Informado"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2013-2014--2644936",
            "id": 2644936,
            "title": "Honda Accord",
            "price": "R$ 75.900,00",
            "subtitle": "VERS\u00c3O: 3.5 6v EX 3.5 V6",
            "year": "2013-2014",
            "km": "39.628 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "16": [
                        "ABS",
                        "AIR BAGS 4",
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "(+17)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2008--2645197",
            "id": 2645197,
            "title": "Honda Accord",
            "price": "R$ 39.900,00",
            "subtitle": "VERS\u00c3O: 3.5 6v EX 3.5 V6",
            "year": "2008-2008",
            "km": "82.517 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "17": [
                        "AIR BAGS 4",
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "BANCOS DE COURO",
                        "(+16)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2007--2624486",
            "id": 2624486,
            "title": "Honda Accord",
            "price": "R$ 24.000,00",
            "subtitle": "VERS\u00c3O: 3.0 16v 3.0 V6",
            "year": "2007-2007",
            "km": "0 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "18": [
                        "ABS",
                        "AIR BAGS 2",
                        "ALARME",
                        "AR CONDICIONADO",
                        "AR QUENTE",
                        "(+19)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        },
        {
            "categoria": {
                "name": "carro"
            },
            "marca": {
                "name": "honda"
            },
            "url": "honda-accord-2007--2541479",
            "id": 2541479,
            "title": "Honda Accord",
            "price": "R$ 25.900,00",
            "subtitle": "VERS\u00c3O: 2.0 LX AUTOMATICO",
            "year": "2007-2007",
            "km": "0 km",
            "images": [
                ""
            ],
            "options": [
                {
                    "19": [
                        "ABS",
                        "AIR BAGS 2",
                        "ALARME",
                        "AR CONDICIONADO",
                        " AR QUENTE",
                        "(+11)"
                    ]
                }
            ],
            "cambio": "Autom\u00e1tico"
        }
    ],
    "result": {
        "code": 200,
        "message": "Sucesso na coleta dos registros!"
    }
}
```

Example of route: http://your-app-url/api/v1/veiculo/2541479

```json
{
    "url": {
        "portal": "https://seminovos.com.br",
        "crawler": "https://seminovos.com.br/2541479"
    },
    "veiculo": {
        "categoria": {
            "name": "Carro"
        },
        "marca": {
            "name": "Honda"
        },
        "modelo": {
            "name": "Accord"
        },
        "url": "https://seminovos.com.br/2541479",
        "id": 2541479,
        "title": "Honda Accord",
        "price": "R$\n25.900,00",
        "subtitle": "2.0 LX AUTOMATICO",
        "year": "2007/2007",
        "km": "0 Km",
        "combustivel": "Gasolina",
        "color": "Prata",
        "placa": "KKU",
        "troca": "Aceito Troca",
        "description": "MUITO NOVO,VALE A PENA CONFERIR!!! A Real Multimarcas oferece ve\u00edculos de qualidade h\u00e1 8 anos. Venha comprovar e se tornar mais um cliente satisfeito!! ENTRE EM CONTATO COM UM DE NOSSOS CONSULTORES: GUALTER 99930-4892; ANDRE 99283-8908;MARCOS 98518-0685",
        "date": "14/05/2019",
        "owner": "Real Multimarcas",
        "contacts": [
            "(031) 3492-1888",
            "(031) 97156-4743"
        ],
        "city": "",
        "images": [
            "https://carros.seminovosbh.com.br/honda-accord-2007-2007-2541479-1341bcf2db2c0ae0d4dbd1704e29b30c93b6.jpg",
            "https://carros.seminovosbh.com.br/honda-accord-2007-2007-2541479-2663f38f835147f6b5611292b53bbe8639fe.jpg",
            "https://carros.seminovosbh.com.br/honda-accord-2007-2007-2541479-94254e924737dde8bbc16567fea60e929f76.jpg",
            "https://carros.seminovosbh.com.br/honda-accord-2007-2007-2541479-6829c84618fd4cd409b713c00934924fd863.jpg",
            "https://carros.seminovosbh.com.br/honda-accord-2007-2007-2541479-80625c5dbb9912716091c8c3891f4e1b87c0.jpg",
            "https://carros.seminovosbh.com.br/honda-accord-2007-2007-2541479-9120f0beeaba6857c017f64055615b8e50c2.jpg",
            "https://carros.seminovosbh.com.br/honda-accord-2007-2007-2541479-95104b82ab4abea74dd94f92ace6a0eda297.jpg",
            "https://carros.seminovosbh.com.br/honda-accord-2007-2007-2541479-120530fa760e8ae295b3560145112bd8d035.jpg",
            "https://carros.seminovosbh.com.br/honda-accord-2007-2007-2541479-189305edfe0b71a4d792aa7f06450afdd715.jpg"
        ],
        "options": [
            "ABS",
            "AIR BAGS 2",
            "ALARME",
            "AR CONDICIONADO",
            "AR QUENTE",
            "BANCOS DE COURO",
            "C\u00c2MBIO AUTOM\u00c1TICO",
            "CD / MP3",
            "COMPUTADOR DE BORDO",
            "DESEMBA\u00c7ADOR",
            "DIRE\u00c7\u00c3O HIDR\u00c1ULICA",
            "RETROVISORES EL\u00c9TRICOS",
            "RODAS DE LIGA LEVE",
            "SENSOR DE R\u00c9",
            "TRAVAS EL\u00c9TRICAS",
            "VIDROS EL\u00c9TRICOS",
            "VOLANTE AJUST\u00c1VEL"
        ]
    },
    "result": {
        "code": 200,
        "message": "Sucesso na coleta dos registros!"
    }
}
```

## Built With

- [PHP](http://gihub.com/php/php-src) - PHP is a popular general-purpose scripting language that is especially suited to web development

- [Symfony 4](https://github.com/symfony/symfony) - The Symfony PHP framework
- [QueryList](https://github.com/jae-jae/QueryList) - The progressive PHP crawler framework
- [Coffee](https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzFg8KRVp5RRVyL7cZlT_IXyuP5HZSu2_co3PA0whoZW5UUTUz&s) - _Coffess and Many Coffees_

## Authors

- [**Wellington Ribeiro**](https://github.com/DevWellington) - _DevWellington_