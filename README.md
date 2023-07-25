# API de Agência de Viagens com Laravel

Este é um projeto de API em Laravel para uma agência de viagens, utilizando PHP 8.1, Laravel, MySQL e Sqlite para testes.

## Glossário

- **Travel (Viagem):** É a unidade principal do projeto e contém todas as informações necessárias, como o número de dias, imagens, título, etc. Exemplo: "Japão: caminho para a maravilha" ou "Noruega: a terra do gelo".

- **Tour (Passeio):** Representa um intervalo de datas específico para uma viagem, com seu próprio preço e detalhes. Por exemplo, a viagem "Japão: caminho para a maravilha" pode ter um passeio de 10 a 27 de maio por €1899 e outro de 10 a 15 de setembro por €669. O usuário fará a reserva de um passeio, não de uma viagem.

## Objetivos

Ao final, o projeto deve conter:

- Uma rota privada (admin) para criar novos usuários. Pode ser implementada como um comando Artisan, se preferir. Essa rota será usada principalmente para gerar usuários para este exercício.

- Uma rota privada (admin) para criar novas viagens.

- Uma rota privada (admin) para criar novos passeios para uma viagem específica.

- Uma rota privada (editor) para atualizar os dados de uma viagem.

- Uma rota pública (sem autenticação) para obter uma lista paginada de viagens. Essa rota deve retornar apenas viagens públicas.

- Uma rota pública (sem autenticação) para obter uma lista paginada de passeios, filtrados pelo slug da viagem. Os usuários poderão filtrar os resultados por preço mínimo, preço máximo, data mínima (a partir dessa data) e data máxima (até essa data). Também será possível ordenar a lista por preço em ordem ascendente e descendente. A lista sempre será ordenada por data de início em ordem ascendente após a aplicação de qualquer filtro fornecido pelo usuário.

## Modelos

### Users (Usuários)

- ID
- Email
- Senha
- Papéis (Relação Muitos-para-Muitos)

### Roles (Papéis)

- ID
- Nome

### Travels (Viagens)

- ID
- É Pública (boolean)
- Slug
- Nome
- Descrição
- Número de dias
- Número de noites (virtual, calculado como numberOfDays - 1)

### Tours (Passeios)

- ID
- ID da Viagem (Relação Muitos-para-Um)
- Nome
- Data de início
- Data de término
- Preço (inteiro, em centavos - por exemplo, €999 será representado como 99900, mas será formatado como €999 quando retornado para o Frontend)
## Tecnologias usadas no projeto

 - [Laravel](https://laravel.com/)
 - [MySQL](https://www.mysql.com/)
 - [PHP](https://www.php.net/)
 - [Composer](https://getcomposer.org/)
