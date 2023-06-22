<br/>
<p align="center">
    <a href="https://liberfly.com.br/" target="_blank">
        <img width="50%" src="https://blog.liberfly.com.br/wp-content/uploads/2022/05/cropped-MicrosoftTeams-image-8-e1652819689370.png" alt="Liberfly Logo">
    </a>
</p>

<br/>

# Liberfly App

## Descrição
Este projeto foi solicitado pela empresa Liberfy, para uma avaliação dos conhjecimentos tecnicos do profissional.
A aplicação é um PWA que tewm por objetivo registrar os chamados/suportes feitos pela empresa. 

## Pré-requisitos
- Node.js
- npm ou Yarn

## Instalação do Front
1. Clone o repositório: `git clone https://github.com/Ajada/liberfly-app.git`
2. Acesse o diretório do projeto: `cd liberfly-app`
3. Acesse o diretório do frontend: `cd front-app`
4. Instale as dependências: `npm install` ou `yarn`

## Instalação do Back
1. Acesse o diretório do projeto: `cd liberfly-app`
2. Acesse o diretório do backend: `cd api`
3. Instale as dependências: `composer install`
4. Clone o env.example para o `.env` e passe os dados do banco
5. Após instalar as dependencias rode o comando `php artisan jwt:secret` e tambem o `php artisan key:generate`
6. Rode as migrações e as seeds para popular o banco em desenvolvimento

## Configuração
1. Renomeie o arquivo `.env.example` para `.env`
2. Edite o arquivo `.env` e configure as variáveis de ambiente necessárias

## Executando o projeto
1. Inicie o servidor de desenvolvimento do frontend: `npm run serve` ou `yarn serve`
2. Abra o projeto no navegador: `http://localhost:8080`
3. Faça o mesmo com o servidor de api: `php artisan serve`

## Lembre-se de verificar os caminhos no .env do frontend

## Produção
- O app pode ser acessado através do link: `https://liberfly.wolftechti.com.br/` com o usuario `test@example.com` e senha `password`

## Observações
O app foi contruido do zero, e apresenta alguns bugs na versão mobile por conta do tempo disponivel para o desenvovimento.
A aplicação tem usa JWT nas requisições e nas rotas, seguindo as boas práticas de contrução de api's REST.

## Licença
[MIT](https://opensource.org/licenses/MIT)