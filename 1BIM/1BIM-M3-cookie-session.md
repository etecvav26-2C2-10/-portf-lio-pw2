## Exercício 1 — Pergunta conceitual

**Cookies** e **sessions** se diferenciam primordialmente pelo local de armazenamento: os *cookies* ficam salvos no **navegador do usuário**, ao passo que as *sessions* mantêm os dados no **servidor**. 
Por guardar as informações no backend e enviar apenas um identificador ao cliente, o uso de *sessions* proporciona muito mais **segurança**. Sendo assim, as *sessions* são a alternativa ideal para lidar com dados sensíveis, como **sistemas de autenticação e login**. 
Em contrapartida, os *cookies* possuem um tempo de expiração configurável e podem persistir mesmo após fechar o navegador. Portanto, eles são mais recomendados para **identificar visitantes** e armazenar **preferências de navegação** que não exigem alto grau de segurança.

## Exercício 2 - Pergunta de Aplicacação

Quando se trata do carrinho de compras, é melhor usar principalmente **sessions** para armazenar os itens que o usuário está comprando de forma temporária. No entanto, os **cookies** também podem ser úteis para manter o carrinho de compras por mais tempo, mesmo após o usuário fechar o site.
Já as preferências do usuário, como as configurações de **layout ou idioma**, podem ser armazenadas em cookies. Isso é útil porque os **cookies** ficam salvos no navegador do usuário, mesmo após ele fechar o site.
**Sessions** são ideais para **armazenar dados sensíveis e temporários**, como informações de login e itens do carrinho de compras. Já os **cookies** são mais adequados para **armazenar dados simples e persistentes**, como preferências do usuário.
