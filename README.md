# Criado Sistema CRUD Alunos em CodeIgniter 4

## Requisitos técnicos Sistema:
- Rodar no PHP 7, desenvolvido na versão (7.4.33)
- Banco de dados Mysql 

## Instruções de Configuração do Sistema:
- Clonar o repositório do Git: `git@github.com:Renandiasmello/ci4_delta.git` no seu servidor;
- Abrir os arquivos na sua IDE ou editor de texto;
- Configurar a base de dados (hostname, username, password e database) no (diretório raiz) .env ou em app\Config\Database.php;
- Rodar a migrantion para criação da tabela no seu schema/database, já definido em (.env) ou em (app\Config\Database.php);
- Rodar o comando: `php spark migrate`, para criar a estrutura da tabela 'students', caso queira reverter basta rodar `php spark migrate:rollback`;
- Em seguida rodar o comando: `php spark db:seed DataStudents`, para preencher com dados iniciais no sistema feitos no seeder;
- Para executar o serve, rodar o comando: `php spark serve`
- Após isso acessar o diretório raiz do projeto, que a rota já está configurada para listar os alunos
