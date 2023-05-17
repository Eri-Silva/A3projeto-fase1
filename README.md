# A3 - Projeto (Fase 1)
### Esta atividade corresponde à primeira fase do projeto que desenvolveremos na disciplina. 
### Projeto
### A proposta inicial do projeto é desenvolvermos 3 serviços que se comunicam entre si. Adicionaremos complexidade de acordo ### com o andamento da turma.

# Descrição dos serviços:
### Escola – Deve fazer cadastro de alunos, professores e turmas. A Escola deve interagir com a Biblioteca para indicar quais usuários são alunos ou professores, de maneira que eles possam pegar uma quantidade maior de livros emprestados.

### Biblioteca – Sua principal função é realizar empréstimos de livros a usuários. Para isto, são necessários cadastros de livros e usuários. A Biblioteca é um serviço independente da Escola, de maneira que qualquer pessoa pode pedir livros emprestados. No entanto, professores e alunos podem pegar uma quantidade maior de livros emprestados. Assim, a Biblioteca deve pedir informações sobre os usuários à Escola para saber se são professores, alunos ou usuários comuns.

### Autenticação – Serviço de autenticação de usuários da Escola e da Biblioteca. Este é o único serviço responsável por armazenar credenciais (login, senha, chaves de acesso…) e fazer autenticação dos usuários (log in, log out). Será usado pela Escola e pela Biblioteca para autenticar seus usuários.

### Os serviços da Escola e da Biblioteca deverão ter clientes para acessá-los. Os clientes nada mais são do que programas capazes de se comunicar com os serviços, isto é, enviar e receber requisições HTTP.

# Dependências para uso
### Instalar a última versão do framework laravel, o link da documentação que ensina o passo a passo aqui:
### https://laravel.com/docs/10.x

### Baixar o pacote do composer e configurar, link aqui:
### https://getcomposer.org/download/

# Como usar esse projeto no seu PC
### Use: "git clone <link do repositório>", para baixar o projeto pelo CMD
### Use: "composer update", na pasta do projeto para carregar o arquivo laravel
### Use: "php artisan serve", para levantar um servidor local para a aplicação, é gerado um link que pode ser aberto no seu navegador

