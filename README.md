# Este es un proyecto base
Este proyecto es lo minimo necesario para utilizar Apache, MySQLi y PHP utilizando docker y docker compose

## Requisitos
Es necesario tener un archivo `.env` con las variables `MYSQL_DATABASE`, `MYSQL_USER` y `MYSQL_PASSWORD`

Nota: la variable `MYSQL_RANDOM_ROOT_PASSWORD` se coloca con el valor `yes` que el usuario `root` tenga una clave aleatoria.

Para esta primera versino se utilizo como host `web-db` debido al nombre de servicio para la base de datos, en caso de tener mas de una base de datos MySQL o MariaDB, tenga en consideracion utilizar el nombre del servicio.