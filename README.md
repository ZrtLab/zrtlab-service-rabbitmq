Zrt Service RabbitMQ
====================


## Why?

## How to use

Add `”zrtlab/zend-service-rabbitmq”: “dev-develop”` to the require section of your composer.json, include the composer autoloader and you’re good to go.

una de las maneras en la que se puede generar la instancia  del cliente de rabbitmq
Es agregando los parametros de conexion en el application.ini:

```ini

zrt.services.rabbitmq.endpoint.host = 127.0.0.1
zrt.services.rabbitmq.endpoint.port = 5672
zrt.services.rabbitmq.endpoint.user = user
zrt.services.rabbitmq.endpoint.pass = P@ssw0rd
zrt.services.rabbitmq.endpoint.vhost = /
zrt.services.rabbitmq.endpoint.publisher.aviso_solr.exchange = “name_exchange”
zrt.services.rabbitmq.endpoint.publisher.aviso_solr.queue = “name_queue”
zrt.services.rabbitmq.endpoint.publisher.aviso_solr.properties.user_id = “user”
zrt.services.rabbitmq.endpoint.publisher.aviso_solr.properties.delivery_mode = 2
zrt.services.rabbitmq.endpoint.publisher.aviso_solr.properties.content_type = “text/plain”

```

Heredar el Boostrap de la siguiente clase  Zrt_Application_Bootstrap_Bootstrap

```PHP
<?php 
    
    class Bootstrap extends Zrt_Application_Bootstrap_Bootstrap
        {

            ...

```
