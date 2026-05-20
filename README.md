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

---

Manter organização e pontualidade faz parte da avaliação.
