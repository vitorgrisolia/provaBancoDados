# PetShopp Amigão

PetShopp Amigão é um sistema de gerenciamento de pets e proprietários desenvolvido como parte de um projeto de demonstração. O sistema permite que os usuários cadastrem e gerenciem informações sobre proprietários e seus respectivos pets.

## Tecnologias Utilizadas

- Linguagem de Programação: PHP
- Framework: Bootstrap 5
- Banco de Dados: MySQL
- Bibliotecas: CoffeeCode Router, coffeecode/datalayer

## Funcionalidades

- Listar Proprietários: Visualiza uma lista de todos os proprietários cadastrados.
- Listar Pets: Visualiza uma lista de todos os pets cadastrados, juntamente com suas informações e o nome do proprietário.
- Cadastrar Proprietário: Permite cadastrar novos proprietários no sistema.
- Cadastrar Pet: Permite cadastrar novos pets associados a um proprietário existente.

## Como Utilizar

1. Clone este repositório para o seu ambiente local.
2. Configure o seu servidor web para apontar para o diretório raiz do projeto.
3. Importe o arquivo SQL fornecido para criar a estrutura do banco de dados.
4. Configure as credenciais do banco de dados no arquivo `config.php`.
5. Abra o navegador e acesse o endereço do seu servidor web para utilizar o sistema.

## Estrutura do Projeto

- `index.php`: Página inicial do sistema.
- `router.php`: Arquivo responsável por gerenciar as rotas do sistema.
- `config.php`: Arquivo de configuração com as credenciais do banco de dados.
- `formulario_cadastro_proprietario.php`: Formulário de cadastro de proprietários.
- `formulario_cadastro_pet.php`: Formulário de cadastro de pets.
- `salvar_proprietario.php`: Script PHP para processar o cadastro de proprietários.
- `salvar_pet.php`: Script PHP para processar o cadastro de pets.
- `listaProprietarios.php`: Controlador para listar os proprietários cadastrados.
- `listaPets.php`: Controlador para listar os pets cadastrados.

## Autor

Este projeto foi desenvolvido por [Vitor Guimarães Grisolia].

## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).
