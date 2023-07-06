# CentroEsportivo

Software para gestão de horários para centro esportivo, projeto para a disciplina de Projeto Integrador V. 
Desenvolvido no framework Laravel, com MySql como Banco de dados.

## Funcionamento
Ele é capaz de fazer o gerenciamento de horários de um centro esportivo, com clientes podendo registrar seus horários e verem os próximos jogos agendados, além de terem a possibilidade de ver o clima na data de seu jogo.

## Instalação

Clone o repositório:
```bash
git clone https://github.com/pabloghid/CentroEsportivo.git
```

Instale as dependências do Laravel usando o Composer:
```bash
composer install
```
Configure o arquivo .env com o seu banco de dados;

Gere uma nova chave de aplicativo:
```bash
php artisan key:generate
```

Execute a migração do banco de dados:
```bash
php artisan migrate
```

Inicie o servidor do Laravel:
```bash
php artisan serve
```
