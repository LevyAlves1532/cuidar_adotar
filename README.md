# Cuidar & Adotar

Plataforma web para aproximar pessoas interessadas em adotar animais de ONGs, abrigos e protetores independentes. O projeto foi desenvolvido como trabalho final de uma atividade extensionista e busca incentivar a adoção responsável por meio de um catálogo público e de uma área de gerenciamento para os responsáveis pelos animais.

## ✨ Funcionalidades

### Para visitantes

- Página inicial com orientações sobre adoção responsável, etapas do processo, depoimentos e perguntas frequentes.
- Catálogo público de animais disponíveis para adoção.
- Busca por nome, descrição ou cidade.
- Filtros por espécie, sexo, faixa etária, porte e cidade.
- Ordenação por animais mais recentes, mais antigos ou nome.
- Carregamento incremental dos resultados, em blocos de seis animais.
- Página de detalhes com perfil, história e imagens do animal.
- Formulário de manifestação de interesse em uma adoção.
- Validação e normalização do telefone informado.

### Para cuidadores

- Área autenticada em `/cuidador`, construída com Filament.
- Cadastro, edição, visualização e exclusão dos próprios animais.
- Gerenciamento de imagens e definição de imagem principal.
- Acompanhamento dos interesses recebidos para os animais cadastrados.
- Perfil com tipo de responsável, cidade, telefone e descrição.
- Dashboard com estatísticas, últimos contatos e gráfico de interesses.
- Notificações no painel para novas manifestações de interesse.

Os tipos de responsáveis são **ONG**, **abrigo** e **protetor independente**. Os status dos animais são **disponível**, **em processo** e **adotado**.

## 🛠️ Tecnologias utilizadas

| Tecnologia | Finalidade |
| :--- | :--- |
| PHP 8.3+ | Linguagem principal |
| Laravel 13 | Framework da aplicação |
| Filament 5 | Painel dos cuidadores |
| Livewire | Componentes interativos |
| Blade | Templates e componentes de interface |
| Tailwind CSS 4 | Estilização responsiva |
| Vite 8 | Bundling dos assets |
| SQLite | Banco padrão de desenvolvimento |
| Pest 4 | Testes automatizados |

## 📋 Requisitos

- PHP **8.3 ou superior** com suporte a SQLite.
- Composer.
- Node.js e npm.
- Permissão de escrita em `storage/` e `bootstrap/cache/`.

## 🚀 Instalação

1. Instale as dependências e execute o script de configuração:

   ```bash
   composer run setup
   ```

   O comando instala as dependências PHP e JavaScript, cria o `.env`, gera a chave, executa as migrations e gera os assets.

2. Crie o link para os arquivos públicos enviados pelo painel:

   ```bash
   php artisan storage:link
   ```

3. O projeto usa SQLite por padrão. Caso o banco ainda não exista:

   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```

## ▶️ Executando localmente

Para iniciar o ambiente completo:

```bash
composer run dev
```

Ou execute os processos separadamente:

```bash
php artisan serve
npm run dev
```

Depois, acesse [http://localhost:8000](http://localhost:8000).

Para gerar apenas os assets de produção, use `npm run build`.

## 🌱 Dados de exemplo

O seeder cria 10 usuários e 100 animais fictícios:

```bash
php artisan db:seed
```

Para recriar o banco de desenvolvimento com dados de exemplo:

```bash
php artisan migrate:fresh --seed
```

Não há uma conta padrão com credenciais documentadas; o cadastro pode ser feito em `/cuidador/register`.

## 🧭 Rotas principais

| Método | URL | Descrição |
| :--- | :--- | :--- |
| `GET` | `/` | Página inicial |
| `GET` | `/catalogo` | Catálogo de animais disponíveis |
| `GET` | `/animal/{id}` | Detalhes de um animal disponível |
| `GET` | `/sobre-o-projeto` | Informações sobre o projeto |
| `GET` | `/cuidador` | Dashboard dos cuidadores |
| `GET` | `/cuidador/login` | Login do painel |
| `GET` | `/cuidador/register` | Cadastro de cuidador |

As rotas públicas exibem somente animais com status disponível. O formulário de interesse não exige uma conta: os dados são salvos e uma notificação é disponibilizada ao responsável no painel.

## 🧱 Organização do projeto

```text
app/
├── Enums/                 # Espécie, sexo, porte, idade, status e responsável
├── Filament/Caregiver/    # Recursos, páginas e widgets do painel
├── Http/Controllers/      # Controladores das páginas públicas
├── Models/                # User, Animal, AnimalImage e Interest
├── Policies/              # Regras de autorização
├── Repositories/          # Consultas reutilizáveis
└── UseCases/Pages/        # Casos de uso das páginas

database/                  # Factories, migrations e seeders
resources/views/           # Layouts, páginas e componentes Blade
routes/web.php             # Rotas públicas
tests/                     # Testes de feature e unitários
```

## 🗃️ Principais entidades

- **User:** cuidador ou responsável que cadastra animais.
- **Animal:** animal com espécie, sexo, idade, porte, cidade, descrição e status.
- **AnimalImage:** imagem associada a um animal, com controle de imagem principal.
- **Interest:** manifestação de interesse enviada por uma pessoa visitante.

Um usuário pode cadastrar vários animais. Cada animal pode ter várias imagens e manifestações de interesse.

## 🧪 Testes

Execute a suíte automatizada com:

```bash
composer test
```

Os testes cobrem exibição de animais disponíveis, formulário de interesse, normalização de telefone, filtros, ordenação, carregamento incremental do catálogo, contagens da página inicial e isolamento dos interesses entre cuidadores.

## ⚠️ Observações

- O projeto está configurado para desenvolvimento local e usa SQLite por padrão.
- O registro do painel está habilitado e qualquer usuário autenticado pode acessá-lo; não existe separação adicional entre perfis administrativos e cuidadores.
- O envio de interesse é interno à plataforma: os dados são armazenados no banco e notificados no painel, sem integração externa de e-mail ou WhatsApp.
- As imagens dependem do link criado por `php artisan storage:link`.
- Antes de usar o projeto em produção, revise autenticação, autorização, validação, armazenamento de imagens, variáveis de ambiente e credenciais.

## 📄 Referência acadêmica

A ideia e os objetivos da aplicação estão descritos em `Atividade Extensionista II - Trabalho Final.pdf`, disponível na raiz do repositório.

## 📜 Licença

Este projeto utiliza a licença MIT, conforme definida no arquivo `composer.json`.
