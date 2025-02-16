# Sistema de Suporte - E-ticket

### Sobre

Esse é um projeto final da matéria de Framework 1 do curso superior em Análise de Sistemas no Instituto Federal de Educação, Ciência e Tecnologia de Mato Grosso do Sul.

#### Objetivos

Os alunos deverão desenvolver uma aplicação CRUD (Create, Read, Update, Delete) utilizando Laravel 11. O sistema deve ser desenvolvido em duplas e implementar as operações essenciais de inserção, edição, remoção e listagem de dados. Além disso, será necessário incluir relatórios que apresentem informações relevantes sobre os registros armazenados.

**Requisitos obrigatórios:**

-   **CRUD Completo:** Implementação das funcionalidades de inserção, atualização, exclusão e listagem dos dados de uma tabela.
-   **Validação de Dados:** Aplicação de regras de validação para os campos do formulário.
-   **Interface Simples:** Uso de Blade e Bootstrap para exibir os dados e facilitar a interação do usuário.
-   **Relatórios:** Pelo menos dois relatórios que apresentem estatísticas ou agrupamentos dos dados.
-   **Uso de Migration e Seeder:** A estrutura da tabela deve ser criada via migration, e o sistema deve conter um seeder com dados iniciais para testes.
-   **Rotas e Controllers:** Implementação correta das rotas no `web.php` e criação do controller para manipulação dos dados.
-   **Uso de Eloquent ORM:** Para interação com o banco de dados.

**Entrega:**
Os alunos deverão entregar o projeto compactado pelo Moodle ou por pendrive. O projeto só será considerado válido após as duplas responderem corretamente até 5 perguntas sobre o projeto desenvolvido.

#### Projeto

**Controle de Chamados de Suporte**

-   **Tabela:** chamados
-   **Campos:** título, descrição, solicitante, data de abertura, status
-   **Relatórios:**
    -   Chamados abertos por status (aberto, em andamento, resolvido)
    -   Tempo médio de resolução de chamados

### Tecnologias

-   Laravel
-   Docker
-   Bootstrap
-   Vite (NodeJs / Bunjs)

## Iniciando

Para executar esse projeto siga as instruções abaixo:

1. **Clonar o repositório:**

    - Clone o repositório do projeto para o seu ambiente local:
        ```sh
        git clone https://github.com/vinisjs/eticket.git
        ```
    - Navegue até o diretório do projeto:
        ```sh
        cd eticket
        ```

2. **Verificar PHP e Composer na máquina:**

    - Certifique-se de que o PHP (versão 8.0 ou superior) e o Composer estão instalados.
    - Você pode verificar a instalação do PHP com o comando:
        ```sh
        php -v
        ```
    - Você pode verificar a instalação do Composer com o comando:
        ```sh
        composer -v
        ```

3. **Em SO Windows, verificar se a virtualização e o WSL estão ativados:**

    - Certifique-se de que a virtualização está ativada na BIOS do seu computador.
    - Verifique se o WSL (Windows Subsystem for Linux) está instalado e ativado.
    - Você pode instalar o WSL com o comando:
        ```sh
        wsl --install
        ```

4. **Verificar Node.js ou Bun na máquina:**

    - Certifique-se de que o Node.js (versão 14 ou superior) ou o Bun estão instalados.
    - Você pode verificar a instalação do Node.js com o comando:
        ```sh
        node -v
        ```
    - Você pode verificar a instalação do Bun com o comando:
        ```sh
        bun -v
        ```

5. **Instalar dependências do projeto:**

    - Navegue até o diretório do projeto e instale as dependências do Composer:
        ```sh
        composer install
        ```
    - Instale as dependências do Node.js ou Bun:
        ```sh
        npm install
        ```
        ou
        ```sh
        bun install
        ```

6. **Configurar o ambiente:**

    - Copie o arquivo [.env.example](http://_vscodecontentref_/0) para [.env](http://_vscodecontentref_/1):
        ```sh
        cp .env.example .env
        ```
    - Gere a chave da aplicação Laravel:
        ```sh
        php artisan key:generate
        ```

7. **Executar o Docker:**

    - Certifique-se de que o Docker está instalado e em execução.
    - Suba os containers do Docker:
        ```sh
        docker-compose up -d
        ```

8. **Executar as migrações e seeders:**

    - Execute as migrações do banco de dados:
        ```sh
        php artisan migrate
        ```
    - Execute os seeders (se houver):
        ```sh
        php artisan db:seed
        ```

9. **Iniciar o servidor de desenvolvimento:**
    - Inicie o servidor de desenvolvimento do Laravel:
        ```sh
        php artisan serve
        ```
    - Inicie o Vite para compilar os assets:
        ```sh
        npm run dev
        ```
        ou
        ```sh
        bun dev
        ```

Agora você deve ser capaz de acessar o projeto em seu navegador no endereço `http://localhost:8000`.

### Créditos

Este projeto foi desenvolvido por [Osiris Vinícius Mendes de Souza](https://github.com/vinisjs) e [Pedro Ernesto Bernardo Esnarriaga](https://github.com/Peddrinnz) como parte do curso de Análise de Sistemas no Instituto Federal de Educação, Ciência e Tecnologia de Mato Grosso do Sul.
