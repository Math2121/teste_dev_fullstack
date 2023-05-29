# GRUPO PLAN 

## Backend
## Step 1: Clone este repositório

```shell
git clone https://github.com/Math2121/teste-laravel-egsys.git
```

## Step 2: Instale as dependências dentro da pasta server

1. Vá até a pasta do projeto

    ```shell
    cd server
    ```

2. Instale as dependências:

    ```shell
    composer install
    ```

## Step 3: Configure a variável de ambiente

1. Cria uma cópia a partir do `.env.example` e chame de `.env`:

    ```shell
    cp .env.example .env
    ```

## Step 4: Gere a chave da aplicação

Rode o seguinte comando:

```shell
php artisan key:generate
```

## Step 5: Execute o projeto e rode as migrations

    Este projeto utiliza laravel sail então execute o seguinte comando para subir a aplicação

```shell
./vendor/bin/sail up -d
```
Para rodar as migrations execute o seguinte comando se quiser utilizar pelo sail também há um comando abaixo

```shell
php artisan migrate

#Sail
./vendor/bin/sail artisan migrate
```



## Front-End
## Step 1: Vá até a pasta web

    ```shell
    cd web
    ```

## Step 2:Instale as depêndencias

    ```shell
    npm install
    ```


## Step 3:Execute o projeto

    ```shell
    npm run dev
    ```

## API Rotas

## POST - cadastro - http://localhost:80/api/cadastrar/eletro

```json
{
    "nome" : "Teste",
	"descricao" : "Teste teste1",
	"tensao" : "200",
	"marca": "teste"
}
```

Retorno

```json
{
	"nome": "Teste",
	"descricao": "Teste teste1",
	"marca": "ELECTROLUX",
	"tensao": "200",
	"updated_at": "2023-05-26T14:35:10.000000Z",
	"created_at": "2023-05-26T14:35:10.000000Z",
	"id": 2
}
```



## GET - retorna todos eletrodomésticos - http://localhost:80/api/eletrodomesticos


Retorno

```json
[
	{
		"id": 2,
		"nome": "Teste",
		"descricao": "Teste teste1",
		"tensao": "200",
		"marca": "ELECTROLUX",
		"created_at": "2023-05-26T14:35:10.000000Z",
		"updated_at": "2023-05-26T14:35:10.000000Z"
	}
]
```



## GET - retorna um eletrodoméstico - http://localhost:80/api/eletrodomestico/{id}


Retorno

```json
{
	"id": 2,
	"nome": "Teste",
	"descricao": "Teste teste1",
	"tensao": "200",
	"marca": "ELECTROLUX",
	"created_at": "2023-05-26T14:35:10.000000Z",
	"updated_at": "2023-05-26T14:35:10.000000Z"
}
```


## PUT - edita um eletrodoméstico - http://localhost:80/api/editar/eletrodomestico/{id}


```json
{
	"nome": "Teste2"
}
```

Retorno

```json
{
	"id": 2,
	"nome": "Teste2",
	"descricao": "Teste teste1",
	"tensao": "200",
	"marca": "ELECTROLUX",
	"created_at": "2023-05-26T14:35:10.000000Z",
	"updated_at": "2023-05-26T17:40:53.000000Z"
}
```

## DELETE - remove um eletrodoméstico - http://localhost:80/api/apagar/eletrodomestico/{id}



