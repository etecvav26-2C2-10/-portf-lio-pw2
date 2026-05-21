# 📅 Cronograma de Entrega de Atividades (2 Bimestre)
- Turma: 2C2
- Disciplina: PW2 - PROGRAMAÇÃO WEB II

Este documento apresenta as datas e orientações para a entrega das atividades das disciplinas.

É responsabilidade do aluno acompanhar este cronograma e cumprir os prazos estabelecidos.

---

## 📌 Orientações Importantes

- As atividades devem ser entregues no local indicado.
- O não cumprimento do prazo pode impactar na nota e na presença.
- A organização do repositório deve seguir as instruções da atividade.
- O envio deve ser realizado pelo GitHub do grupo, conforme solicitado.

---

## 📋 Cronograma

---
- Turma: 2C2
- Disciplina: PW2 - PROGRAMAÇÃO WEB II
## 📋 Cronograma - 2 Bimestre


| Menção | Tipo| Atividade | Data Entrega |Link | Obs|
|--------|-----|-----|-----|-|-|
| M1 | Estudo de caso| CRUD e PDO. Ler e testar: [CRUD - Básico](https://github.com/Zaion-Alaric-Zanarelli/zaion-web-studio/blob/main/content/php/php-crud-pdo-basico.md) e [CRUD - Indermediário](https://github.com/Zaion-Alaric-Zanarelli/zaion-web-studio/blob/main/content/php/php-crud-pdo-refinado.md)| 21/05/2026|[Tarefa](https://github.com/Zaion-Alaric-Zanarelli/zaion-web-studio/blob/main/activities/php/act-php-001-crud-pdo.md) |[conceito de **Mobile-First**](https://github.com/Zaion-Alaric-Zanarelli/zaion-web-studio/blob/main/content/html-css/conceito-mobile-first.md) |
| M2-1 | Projeto | Projeto do Site | 22/05/2025 |[Atividade](https://github.com/Zaion-Alaric-Zanarelli/zaion-web-studio/blob/main/activities/php/act-php-002-crud-pdo-projeto.md) | |
| M3 | Portfólio| Análise do Github do grupo | 18/06/2026|[Abrir]() | |

---
## ⚠️ Atenção

- Verifique se todos os arquivos estão dentro da pasta correta.
- Confirme se o repositório foi atualizado antes da data limite.
- Certifique-se de que todos os integrantes do grupo participaram da atividade.
  <br><br>
  <hr>

# 💊 Atividade Prática: CRUD Farmácia VAV

**Modalidade:** Grupo  
**Entrega:** Link do repositório no GitHub  
**Critério Obrigatório:** Histórico de evolução através de **commits** (mínimo de 3 por integrante).

---

## 🎯 Objetivo
Desenvolver um sistema de gerenciamento de estoque para uma farmácia, utilizando **PHP com PDO** e aplicando conceitos modernos de design (**Mobile First** e **Regra 60-30-10**).

---

## 📂 Estrutura de Diretórios Sugerida
Para um projeto organizado, utilizem a seguinte estrutura:

*   `config/`
    *   `conexao.php` (Configuração do PDO)
*   `includes/`
    *   `header.php` (Topo e Menu)
    *   `footer.php` (Rodapé e Scripts)
*   `css/`
    *   `style.css` (Estilização)
*   `index.php` (Listagem de produtos)
*   `cadastro.php` (Formulário de inserção)
*   `editar.php` (Formulário de edição)
*   `excluir.php` (Lógica de remoção)

---

## 🛠️ Requisitos Técnicos (Back-end)

1.  **Banco de Dados:** Criar uma tabela `produtos` com os campos:
    *   `id` (Chave Primária, Auto incremento)
    *   `nome` (Varchar)
    *   `fabricante` (Varchar)
    *   `preco` (Decimal 10,2)
    *   `estoque` (Int)
2.  **Segurança:** Uso obrigatório de `prepare()` e `execute()` no PDO para evitar SQL Injection.
3.  **Modularização:** Uso de `require_once` para a conexão e para os arquivos de cabeçalho/rodapé.

---

## 🎨 Requisitos de Design (Front-end)

### 1. Mobile First
Desenvolva o CSS pensando primeiro em **telas de celular**. Use `@media (min-width: 768px)` apenas para ajustar a visualização em computadores. As tabelas devem ser responsivas ou substituídas por "cards" em telas pequenas.

### 2. Regra 60-30-10 (Cores)
Apliquem a harmonia visual utilizando esta proporção:
*   **60% (Cor Dominante):** Geralmente um tom neutro (branco, cinza claro ou bege) para o fundo.
*   **30% (Cor Secundária):** Uma cor que remeta à saúde (ex: Azul ou Verde água) para menus e botões.
*   **10% (Cor de Destaque):** Uma cor vibrante (ex: Laranja ou Vermelho) para alertas e botões de ação importantes.

---

## 📝 Passo a Passo para o Grupo

1.  **Criação do Repositório:** O líder cria o repo no GitHub e convida os membros.
2.  **Banco de Dados:** Criem o script SQL e salvem na raiz do projeto como `database.sql`.
3.  **Conexão:** Criem o `conexao.php` e testem se o banco está respondendo.
4.  **Desenvolvimento do CRUD:** 
    *   **Membro A:** Faz a Listagem (`index.php`).
    *   **Membro B:** Faz a Inserção (`cadastro.php`).
    *   **Membro C:** Faz a Edição e Exclusão.
5.  **Refatoração:** Unifiquem o visual usando o `header.php` e `footer.php` em todas as páginas.

---

## 📋 Checklist de Entrega
- [ ] O código utiliza PDO?
- [ ] O repositório tem commits de todos os membros?
- [ ] O layout é responsivo (Mobile First)?
- [ ] A regra 60-30-10 foi aplicada no CSS?
- [ ] O CRUD está funcionando sem erros de PHP?

---

**Dica do Professor:** Lembrem-se que o GitHub é o currículo de vocês. Façam commits com mensagens claras (ex: *"Adicionado sistema de busca"*, *"Correção no CSS do rodapé"*).
<br><br>
<hr>
# 🌐 Atividade — Planejamento e Proposta de Site

## 🎯 Objetivo
Planejar a criação de um site, definindo:
- tema
- público-alvo
- identidade visual
- estrutura inicial
- proposta de conteúdo

A atividade tem como foco o desenvolvimento da organização do projeto antes da programação.

---

## 👥 Modalidade
- Atividade em grupo

---

## 📅 Entrega
- Entregar no **GitHub do grupo**

---

# 📌 Etapas da Atividade

## 1️⃣ Definir o Tema do Site

O grupo deve escolher um tema para o site.

Exemplos:
- tecnologia
- jogos
- música
- profissões
- escola
- cursos
- esportes
- alimentação
- saúde
- entretenimento

---

## 2️⃣ Criar a Proposta do Site

O grupo deverá explicar:

- Qual será o objetivo do site
- O que o usuário encontrará nele
- Qual problema o site pretende resolver
- Quais informações ou serviços serão oferecidos

---

## 3️⃣ Definir o Público-Alvo

Descrever para quem o site será desenvolvido.

Exemplos:
- adolescentes
- estudantes
- crianças
- gamers
- empresas
- professores
- clientes de uma loja

Explicar:
- faixa etária
- interesses
- necessidades do público

---

## 4️⃣ Aplicar o Conceito Mobile First

O projeto deve seguir, se possível, o conceito de:

# 📱 Mobile First

O site deve ser pensado primeiro para celulares e depois para telas maiores.

O grupo deve explicar:
- por que escolheu esse modelo
- como pretende adaptar o site para celular
- quais cuidados pretende tomar com:
  - menu
  - imagens
  - textos
  - organização da tela

---

## 5️⃣ Definir a Identidade Visual

O grupo deverá criar a identidade visual do projeto.

Definir:

- 🎨 Cores principais
- 🔤 Fontes
- 🖼️ Logo (desenho ou ideia inicial)
- 🏢 Nome da empresa/site
- 📍 Dados fictícios da empresa:
  - nome
  - telefone
  - e-mail
  - endereço
  - redes sociais

---

## 6️⃣ Estrutura Inicial do Site

Descrever quais páginas o site terá.

Exemplo:

- Home
- Sobre
- Serviços
- Produtos
- Contato

Também explicar:
- o que terá em cada página
- como será a navegação

---

## 7️⃣ Recursos que o Site Pode Utilizar

O grupo pode incluir ideias como:

- formulário de contato
- galeria de imagens
- vídeos
- mapas
- gráficos
- animações
- menu responsivo

---

# 📁 Organização no GitHub

O repositório deve estar organizado.

Exemplo:

```

projeto-site/
│
├── README.md
├── planejamento/
├── imagens/
├── logo/
└── referencias/

```

---

# 📝 Critérios de Avaliação

## 1️⃣ Organização
- Estrutura do GitHub
- Organização das pastas
- Clareza das informações

---

## 2️⃣ Planejamento
- Qualidade da proposta
- Objetivos bem definidos
- Coerência do projeto

---

## 3️⃣ Identidade Visual
- Escolha de cores
- Nome do projeto
- Criatividade
- Logo

---

## 4️⃣ Mobile First
- Aplicação do conceito
- Organização para celular

---

## 5️⃣ Trabalho em Equipe
- Participação dos integrantes
- Histórico de commits
- Evolução do projeto

---

# 💡 Dicas

- Escolha um tema que o grupo goste
- Evite copiar ideias prontas
- Faça commits frequentes
- Organize as informações antes de começar a programar
- Pense na experiência do usuário

---

---

Manter organização e pontualidade faz parte da avaliação.
<br><br>
<hr>
