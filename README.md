# Descrição
- A parte HTML define um formulário onde os usuários podem inserir o nome do vendedor, a meta de vendas - semanal e a meta de vendas mensal.
- Após o envio do formulário (requisição POST), o código PHP recupera os dados do formulário.
- Ele calcula bônus e ganhos adicionais com base nas metas de vendas fornecidas.
- Se a meta de vendas semanal for igual ou superior a 20.000, o vendedor recebe um bônus de 1% da meta de vendas semanal, além de 5% de qualquer valor que exceda 20.000.
- Se a meta de vendas mensal for igual ou superior a 80.000 e o bônus semanal for maior que 0, o vendedor recebe mais 10% de qualquer valor que exceda 80.000.
- O salário mínimo é definido em 1412.
- O salário final é calculado adicionando o salário base, o bônus semanal, o bônus excedente da semana e o bônus excedente do mês.
- O resultado é exibido abaixo do formulário com o nome do vendedor e o salário final.
- Aqui está um resumo breve das principais variáveis PHP e seus propósitos:

- $nome: Armazena o nome do vendedor.
- $meta_semanal: Armazena a meta de vendas semanal.
- $meta_mensal: Armazena a meta de vendas mensal.
- $salario_minimo: Define o salário mínimo.
- $bonus_semanal: Armazena o bônus obtido com base nas vendas semanais.
- $excedente_semanal: Armazena o bônus excedente obtido ao exceder a meta de vendas semanal.
- $excedente_mensal: Armazena o bônus excedente obtido ao exceder a meta de vendas mensal.
- $salario_final: Armazena o salário final calculado.

No geral, este código fornece uma estrutura básica para calcular o salário de um vendedor com base em suas metas de vendas. No entanto, podem haver considerações adicionais ou melhorias dependendo de requisitos específicos do negócio ou regulamentações.

# Autor

<a href="https://github.com/SamuelCmdeFarias">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/127852994?s=400&u=aa8dca012415519073ea519d6fd5800a32882bee&v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Samuel Camargo</b></sub></a> <a href="https://github.com/SamuelCmdeFarias" title="Rocketseat">🚀</a>


Feito por Samuel Camargo ❤️👋🏽. Entre em contato!


[![Gmail Badge](https://img.shields.io/badge/-samucsg@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:tgmarinho@gmail.com)](mailto:samucacsg@gmail.com)