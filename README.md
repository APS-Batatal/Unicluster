# Unicluster
Site do [unicluster](http://unicluster.com.br/)

Esse repositório guarda o site em wordpress do pessoal do Unicluster

##Como contribuir com o projeto
Entre em contato com o coordenador do unicluster Prof. Fábio Luís [unip.fabio@gmail.com](mailto:unip.fabio@gmail.com)

##Como funciona?
- O projeto funciona como um tema do [wordpress](https://br.wordpress.com/)
- Usa o pré processador de css [Sass](http://sass-lang.com/) com a framework [Compass](http://compass-style.org/)
- Para automação, o projeto utiliza [node js](https://nodejs.org/en/) com npm (node package manager) e [gulp](http://gulpjs.com/)

##E como fazer para rodar os testes ?
É necessário ter um servidor web rodando na sua máquina, com suporte ao [mySQL](https://www.mysql.com/products/workbench/) server, 
recomenda-se o [xampp](https://www.apachefriends.org/pt_br/index.html)

- importar o dump do banco, disponível em (dumps/dump.sql)
- navegar até a pasta com o terminal/prompt
(opcionalmente, instalar um novo worpress e apenas usar a pasta do tema (```\unicluster\www\wp-content\themes\unicluster```))
(neste caso, utilizar o arquivo ```dumps/import.xml``` para importar dentro do wordpress)
- usar o comando ```npm install``` - instalará as dependências do node
- usar o comando ```gulp``` executará as tarefas para compilar os arquivos e atualizará o navegador automaticamente a cada edição

O blog poderá ser visualizado em ```localhost/unicluster/www/```
