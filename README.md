# Sistema de Cadastro de Usuários - Laravel

Este projeto é um sistema de gerenciamento de usuários desenvolvido com Laravel, implementando um CRUD completo com validações robustas e interface responsiva usando Bootstrap.

## 📋 Requisitos do Sistema

### Requisitos Técnicos
- PHP 8.1 ou superior
- Composer
- Node.js 22.12.0 e NPM
- MySQL 5.7 ou superior
- Git

### Extensões PHP Necessárias
- PDO PHP Extension
- OpenSSL PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension

## 🚀 Instalação

1. Clone o repositório
```bash
git clone [URL_DO_REPOSITÓRIO]
cd nome-do-projeto
cd cadastro-usuarios
```

2. Instale as dependências do PHP
```bash
composer install
```

3. Instale as dependências do Node
```bash
npm install
```

4. Configure o ambiente
```bash
# Crie o arquivo de ambiente
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate
```

5. Configure o banco de dados no arquivo `.env`
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_seu_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

6. Execute as migrations
```bash
php artisan migrate
```

7. Compile os assets
```bash
npm run build
```

## 💻 Executando o Projeto

1. Inicie o servidor Laravel
```bash
php artisan serve
```

2. Em outro terminal, inicie o Vite para compilação dos assets
```bash
npm run dev
```

3. Acesse o projeto em `http://localhost:8000`

## 🏗️ Estrutura do Projeto

### Arquitetura
O projeto segue uma arquitetura em camadas:
- Model
- Repository
- Service
- Controller
- Request
- View

### Principais Diretórios
```
├── app
│   ├── Http
│   │   ├── Controllers
│   │   │   └── User
│   │   │   │   └── UserController.php
│   │   └── Requests
│   │       └── User
│   │           ├── StoreUserRequest.php
│   │           └── UpdateUserRequest.php
│   ├── Models
│   │   └── User
│   │   │   └── User.php
│   ├── Repositories
│   │   └── User
│   │   │   └── UserRepository.php
│   └── Services
│   │   └── User
│   │       └── UserService.php
├── resources
│   ├── css
│   │   └── app.css
│   ├── js
│   │   └── app.js
│   └── views
│       ├── layouts
│       │   └── app.blade.php
│       └── users
│           ├── create.blade.php
│           ├── edit.blade.php
│           └── index.blade.php
```

## 🛡️ Validações Implementadas

### Validação de E-mail
- Campo obrigatório
- Formato válido de e-mail
- E-mail único no sistema

### Validação de Senha
- Mínimo de 6 caracteres
- Pelo menos uma letra maiúscula
- Pelo menos uma letra minúscula
- Pelo menos um número
- Pelo menos um caractere especial (@$!%*#?&)

### Validação de Nome
- Campo obrigatório
- Máximo de 255 caracteres

## 🔧 Funcionalidades

### 1. Gestão de Usuários
- Listagem de usuários
- Cadastro de novo usuário
- Edição de usuário existente
- Exclusão de usuário
- Confirmação antes da exclusão

### 2. Interface
- Design responsivo com Bootstrap
- Mensagens de feedback para ações
- Validação em tempo real dos formulários
- Layout limpo e intuitivo

## 🔒 Segurança
- Senhas criptografadas usando Hash
- Validação de dados em requisições
- Proteção contra CSRF
- Sanitização de inputs

## 💡 Boas Práticas Implementadas
- Uso de Repository Pattern
- Service Layer para lógica de negócios
- Form Requests para validação
- Reutilização de código
- Código limpo e documentado

## 🛠️ Personalização

### Alterando Regras de Validação
As regras de validação podem ser modificadas nos arquivos:
- `app/Http/Requests/User/StoreUserRequest.php`
- `app/Http/Requests/User/UpdateUserRequest.php`

### Modificando o Layout
O layout principal está em:
- `resources/views/layouts/app.blade.php`

### Estilização
Os estilos podem ser modificados em:
- `resources/css/app.css`

## 📝 Contribuindo
1. Faça um Fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 🐛 Reportando Bugs
Utilize a seção de Issues do GitHub para reportar bugs, seguindo o template disponível.

## 📄 Licença
Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
