# 📚 DevShelf

> Plataforma simples de curadoria de livros para desenvolvedores.
>
> Projeto criado para estudo de PHP puro, organização de código e evolução arquitetural.

---

## 📖 Sobre o projeto

**DevShelf** é uma aplicação web desenvolvida em  **PHP 8.4 puro** , com foco em aprendizado prático de:

* Autenticação
* CRUD
* Organização de código
* Estrutura base de aplicação web
* Evolução futura para padrões mais robustos (PSRs, Composer, MVC basico)

O sistema permite que usuários:

* Criem conta e façam login
* Cadastrem livros recomendados
* Avaliem livros
* Comentem
* Listem livros cadastrados

⚠️ O sistema  **não permite leitura interna dos livros** .

Ele funciona apenas como uma plataforma de  **recomendação e curadoria** .

![1771797287660](image/Readme/1771797287660.png)

![1771797326794](image/Readme/1771797326794.png)

    ![1771797360703](image/Readme/1771797360703.png)

---

## 🚀 Tecnologias utilizadas

* **PHP 8.4**
* **TailwindCSS (via CDN)**
* HTML5
* SQLite
* Servidor embutido do PHP para desenvolvimento

---

## 🏗 Estrutura atual do projeto

O projeto utiliza uma estrutura simples, organizada manualmente, sem um MVC completo.

<pre class="overflow-visible! px-0!" data-start="1205" data-end="1627"><div class="contain-inline-size rounded-2xl corner-superellipse/1.1 relative bg-token-sidebar-surface-primary"><div class="sticky top-[calc(var(--sticky-padding-top)+9*var(--spacing))]"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre!"><span><span>project-root/
│
├── core/              </span><span># Métodos e helpers base da aplicação</span><span>
├── config/            </span><span># Configurações (banco, constantes)</span><span>
├── app/
│   ├── controllers/   </span><span># Controladores simples</span><span>
│   ├── models/        </span><span># Acesso ao banco</span><span>
│   └── views/         </span><span># Templates HTML</span><span>
│
├── </span><span>public</span><span>/
│   ├── index.php      </span><span># Front controller</span><span>
│   └── server.php     </span><span># Inicialização do servidor</span><span>
│
└── database/
    └── schema.sql
</span></span></code></div></div></pre>

Atualmente:

* Não utiliza um MVC formal.
* Não utiliza Composer.
* Não implementa PSRs.
* Estrutura pensada apenas para aprendizado e organização básica.

---

## 🔐 Funcionalidades atuais

### 👤 Autenticação

* Registro de usuário
* Login
* Logout
* Proteção básica de rotas

### 📚 Livros

* Criar livro
* Editar livro
* Deletar livro
* Listar livros
* Exibir detalhes

Campos básicos:

* Título
* Autor
* Data de publicação
* Imagem da capa
* número de paginas
* Descrição (opcional)

### ⭐ Avaliações

* Usuários podem avaliar livros
* Sistema simples de nota

### 💬 Comentários

* Usuários podem comentar livros
* Comentários vinculados ao usuário

---

## 🧠 Objetivo principal

Este projeto foi criado para:

* Consolidar fundamentos de PHP puro
* Entender melhor organização estrutural de aplicações
* Praticar autenticação manual
* Trabalhar com CRUD completo
* Evoluir gradualmente para arquitetura mais madura

---

## 🔮 Melhorias futuras planejadas

### 🏗 Arquitetura

* Implementar MVC mais estruturado
* Introduzir camada de serviços
* Implementar Repository Pattern
* Separação clara de responsabilidades

### 📦 Composer

* Autoload PSR-4
* Organização por namespaces
* Inclusão de dependências externas

### 📜 PSRs

* PSR-1
* PSR-4
* PSR-12
* PSR-7 (futuramente)

### 🔐 Segurança

* CSRF Token
* Melhor tratamento de sessões
* Validação e sanitização mais robusta
* Hash seguro com `password_hash`

### 📊 Funcionalidades

* Sistema de favoritos
* Filtro por categoria (Backend, Frontend, DevOps, etc.)
* Sistema de tags
* Ranking de livros mais bem avaliados
* Perfil público do usuário
* Lista personalizada de leitura
* API REST futura

### 🎨 UI

* Melhor responsividade
* Componentização visual
* Dark mode

---

## 🛠 Como rodar o projeto

### 1️⃣ Clone o repositório

<pre class="overflow-visible! px-0!" data-start="3394" data-end="3458"><div class="contain-inline-size rounded-2xl corner-superellipse/1.1 relative bg-token-sidebar-surface-primary"><div class="sticky top-[calc(var(--sticky-padding-top)+9*var(--spacing))]"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-bash"><span><span>git </span><span>clone</span><span> https://github.com/VictorIshizuka/devs-shelf-php.git
</span></span></code></div></div></pre>

### 2️⃣ Configure o banco

* Crie um banco de dados
* Execute o arquivo `database/schema.sql`

### 3️⃣ Configure as credenciais

Edite:

<pre class="overflow-visible! px-0!" data-start="3597" data-end="3624"><div class="contain-inline-size rounded-2xl corner-superellipse/1.1 relative bg-token-sidebar-surface-primary"><div class="sticky top-[calc(var(--sticky-padding-top)+9*var(--spacing))]"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre!"><span><span>config/database.php
</span></span></code></div></div></pre>

### 4️⃣ Rode o servidor embutido

<pre class="overflow-visible! px-0!" data-start="3660" data-end="3703"><div class="contain-inline-size rounded-2xl corner-superellipse/1.1 relative bg-token-sidebar-surface-primary"><div class="sticky top-[calc(var(--sticky-padding-top)+9*var(--spacing))]"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-bash"><span><span>php -S localhost:8000 -d auto_prepend_file=server.php -t public/
</span></span></code></div></div></pre>

Acesse:

<pre class="overflow-visible! px-0!" data-start="3714" data-end="3743"><div class="contain-inline-size rounded-2xl corner-superellipse/1.1 relative bg-token-sidebar-surface-primary"><div class="sticky top-[calc(var(--sticky-padding-top)+9*var(--spacing))]"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre!"><span><span>http:</span><span>//localhost:8000</span><span>
</span></span></code></div></div></pre>

---

## 📈 Roadmap de Evolução

Versão atual:

> MVP educacional funcional

Próxima versão:

> Composer + PSR-4

Versão futura:

> MVC estruturado + API REST

---

## 📌 Observação

Este projeto não tem como objetivo competir com plataformas como:

* **Goodreads**
* **Google Books**

Ele foi criado exclusivamente como projeto de estudo e evolução técnica em PHP.

---

## 👨‍💻 Autor

Victor Ishizuka
