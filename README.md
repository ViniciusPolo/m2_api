# API M2 Digital
## A api busca relacionar varias tabelas, como cidades, com grupo de cidades, campanhas, descontos e produtos, foram realizados duas formas de relacionamento, por collections e por joins

### Acessar a subdiretório laradock e abrir o terminal, neste entrar com o seguinte comando (sudo não necessário para Windows)
``` 
sudo docker-compose up -d nginx mysql phpmyadmin 
```
### abrir o navegador e acessar [localhost:1010](localhost:1010)
#### Sera aberto o workspace phpMyadmin, para acessar usar os seguintes dados.
* Server: mysql

* user: root

* senha: root

#### Criar um novo banco de dados (database) e nomea-la de m2

## Após a banco criado, abra um terminal dentro do docker (sudo não necessário para Windows)
``` 
sudo docker-compose exec --user=laradock workspace bash 
```
* Será redirecionado para um terminal bash dentro do docker

``` 
php artisan migrate
```
## Foram criadas Factory para popular o banco de dados e agilizar os testes.
``` 
php artisan db:seed --class=DescontosTableSeeder  
php artisan db:seed --class=CampanhasTableSeeder 
php artisan db:seed --class=ProdutosTableSeeder 
php artisan db:seed --class=GrupoCidadesTableSeeder 
php artisan db:seed --class=CidadesTableSeeder 

```
## Para usar a API usar o seguinte endereço para o servidor local
### abrir o navegador e acessar [localhost:8585](localhost:1010) 

### Acessar a rota desejada e consumir o API

* get cidades;
* post cidades/store;
* get cidades/{id};
* get cidadesdetalhes/{id}
* put cidades/update/{id}
* delete cidades/delete/{id}
* get grupocidades
* post grupocidades/store
* get grupocidades/{id}
* put grupocidades/update/{id}
* delete grupocidades/delete/{id}
* get campanhas
* post campanhas/store
* get campanhas/{id}
* put campanhas/update/{id}
* delete campanhas/delete/{id}
* get produtos
* post produtos/store
* get produtos/{id}
* put produtos/update/{id
* delete produtos/delete/{id}
* get descontos;
* post descontos/store'
* get descontos/{id}
* put descontos/update/{id}
* delete descontos/delete/{id}






