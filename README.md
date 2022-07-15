# blogBis2Bis

Um sistema para gerenciar a criação, leitura, atualização e exclusão de postagens.


## Tecnologias

- **PHP com framework Laravel 7**
- **HTML e CSS com framework Bootstrap**
- **JavaScript e jQuery**
- **Base de dados: PhpMyAdmin**


## Execução

Para iniciar é necessário clonar o projeto do GitHub num diretório de sua preferência:
- https://github.com/williamsilva95/blogBis2Bis.git

Faça uma copia do arquivo .env.example e deixe apenas como .env na mesma pasta do projeto

Após crie uma database com o nome **blogbis2bis**

Com o terminal aberto na pasta do projeto, instale as dependências com o comando **composer install** ou **composer update**

Utilize o comando **php artisan migrate** padra subir as migration para a database criada

Utilize o comando **php artisan storage:link** para criar um link simbólico de onde ficaram armazenado as imagens

Utilize o comando **php artisan serve** para gerar o link de inicialização do projeto



## Utilizando o sistema

Com o sistema já aberto, crie um usuário para poder ter acesso às funções

O sistema permite:

- Criação, leitura, atualização e exclusão de postagens
- Exportar para uma planilha do Excel as postagens feitas no sistema
- O sistema permite vc curtir ou não uma determinada postagem
- Fazer upload de imagens
