# Registro de Domínios!

Projeto feito como parte do teste para o buscaCuritiba.
Foi utilizado Laravel 10 e PHP 8.x .

- Certifique-se de ter todas as dependências do PHP instaladas assim como o Composer e o Node.


## Clone o projeto

> git clone https://github.com/pedrolaskawskidev/buscaCuritiba.git

## Execute os comandos 
```
cd buscaCuritiba
composer install
npm install
```
Após rodar os comandos com sucesso, execute:
```
cp env,example .env
 ```
E coloque os as credenciais do seu banco de dados, caso queria.
Agora, gere a chave da aplicação com o comando:
- php artisan key:generate

## Criando o banco de dados
Para não ser necessário criar tudo do zero, basta rodar as migrations junto dos seeders.
```
php artisan migrate --seed
```
 

## Acessando o projeto.

Para acessar o projeto basta colocar no login
- pedro@example.com
- password

## 

Para dúvidas ou sugestões: pedro_laskawski_dev@hotmail.com

###### Todos os direitos reservados. :copyright:

>Ps: usei exemplos conhecidos por mim para "popular" as tabelas, então se tem algum dado seu, me informe para eu trocar.
2025 :tm:
