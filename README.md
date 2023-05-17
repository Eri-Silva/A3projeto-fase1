# A3 - Projeto (Fase 1)
### Esta atividade corresponde à primeira fase do projeto que desenvolveremos na disciplina. 
### Projeto
### A proposta inicial do projeto é desenvolvermos 3 serviços que se comunicam entre si. Adicionaremos complexidade de acordo ### com o andamento da turma.

# Descrição dos serviços:
### Escola – Deve fazer cadastro de alunos, professores e turmas. A Escola deve interagir com a Biblioteca para indicar quais usuários são alunos ou professores, de maneira que eles possam pegar uma quantidade maior de livros emprestados.
### Biblioteca – Sua principal função é realizar empréstimos de livros a usuários. Para isto, são necessários cadastros de ### livros e usuários. A Biblioteca é um serviço independente da Escola, de maneira que qualquer pessoa pode pedir livros emprestados. No entanto, professores e alunos podem pegar uma quantidade maior de livros emprestados. Assim, a Biblioteca deve pedir informações sobre os usuários à Escola para saber se são professores, alunos ou usuários comuns.
### Autenticação – Serviço de autenticação de usuários da Escola e da Biblioteca. Este é o único serviço responsável por armazenar credenciais (login, senha, chaves de acesso…) e fazer autenticação dos usuários (log in, log out). Será usado pela Escola e pela Biblioteca para autenticar seus usuários.
### Os serviços da Escola e da Biblioteca deverão ter clientes para acessá-los. Os clientes nada mais são do que programas capazes de se comunicar com os serviços, isto é, enviar e receber requisições HTTP.
