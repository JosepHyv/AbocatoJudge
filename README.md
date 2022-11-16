# Detalles
El despliegue y desarrollo de este proyecto será posible sobre bases de Windows, o sistemas tipo Unix (Linux, Mac Os, bsd)

# Índice 
- [Prerrequisitos](#Prerrequisitos)
- [¿Como desplegar el proyecto en local?](#¿como-desplegar-el-proyecto-en-local)

# Prerrequisitos 
Los paquetes o librerías necesarias para un correcto despliegue son los siguientes:


- **npm** es el gestor de paquetes de javascript necesario para la correcta instalación y despliegue de jetstream en el proyecto, con este paquete correremos la parte grafica del proyecto
    - Instalación:
        ```zsh
         #wsl/ubuntu 
         sudo apt install npm

         # archlinux/derivados
         sudo pacman -Syu npm

         # MacOs (usando brew)
         brew install node #este paquete incluye nodejs y npm

         #Windows, instalación desde la pagina oficial 
         https://nodejs.org/en/download/
        ```
- **php** el lenguaje sobre el que corre el framework de construcción del proyecto 
    - Instalación:
        ```zsh
         #wsl/ubuntu 
         sudo apt install php

         # archlinux/derivados
         sudo pacman -Syu php

         # MacOs (usando brew)
         brew install php

         # Windows podemos instalarlo desde la pagina oficial
         https://www.apachefriends.org/index.html
        ```

- **composer** gestor de paquetes de php que nos servira para instalar laravel, el framework de construccion del proyecto
    - Instalación:
            ```zsh
            #wsl/ubuntu 
            sudo apt install composer

            # archlinux/derivados
            sudo pacman -Syu composer

            # MacOs (usando brew)
            brew install composer

            # Windows podemos instalarlo desde la pagina oficial
            https://getcomposer.org/download/
            ```
- **mysql** el gestor de bases de datos utilizado para la administracion de base de datos del sistema
    - instalación:
        ```zsh
        #wsl/ubuntu
        sudo apt install mysql 

        # archlinux/derivados (mariadb)
        sudo pacman -Syu mysql 

        #MacOs (usando brew)
        brew install mysql 

        # Windows podemos instalarlo desde la pagina oficial
        https://dev.mysql.com/doc/refman/8.0/en/windows-installation.html
        ``` 

- **mailhog** el cliente de correos utilizado para obtener los correos enviados por el sistema
    - instalación:
        ```zsh
        #wsl/ubuntu via repositorio en github
        https://github.com/mailhog/MailHog

        # archlinux/derivados 
        sudo yay -S mailhog

        #MacOs (usando brew)
        brew install mailhog

        # Windows podemos instalarlo desde el repositorio de github 
        https://github.com/mailhog/MailHog
        ``` 

### Recomendación
Utilizar vs-code para tener una mejor integración con las herramientas y paquetes mencionados anteriormente.

# ¿Como desplegar el proyecto en local?


1. Clonar el repositorio y cambiar al directorio
```zsh
git clone https://github.com/JosepHyv/AbocatoJudge.git

cd AbocatoJudge
```

2. Abrir en tu editor de preferencia el proyecto 
Por ejemplo si utilizas vscode ejecuta 
```zsh
code .
```


3. Instalar la imagen/dependencias que requiere laravel
```zsh
composer update
```

**Nota:** este proceso puede tardar unos minutos la primera vez que lo ejecutes

4. instalar dependencias graficas utilizando **npm**

```zsh
npm install
```

5. correr el interprete grafico  como desarrollo
```zsh
npm run dev
```
**Nota:** en caso de utilizar el sistema sin desarrollo, se puede optar por compilar el entorno grafico en lugar de interpretarlo por cada acción.

```zsh
npm run build
```

6. Crear una copia del archivo .env.example y nombrarla como .env
```zsh
cp .env.example .env
```
posteriormente, deberás editar las líneas `DB_HOST`, `DB_USER` y `DB_PASSWORD` ubicadas en el archivo `.env` recién creado, colocando lo siguiente 

```php
DB_HOST=mysql
DB_USER=${tu usuario de mysql aqui}
DB_PASSWORD=${tu contraseña de mysql aqui}
```
7. Correr las migraciones de bases de datos, ejecutar artisan interpretandolo con php
```zsh
php artisan migrate
```

**Nota:** este proceso puede tardar unos minutos la primera vez que corras las migraciones


8. generar `APP_KEY` esto se puede realizar desde sail y desde la vista en el localhost, utilizando sail quedaría.
```zsh
php artisan key:generate
```

9. desplegar el proyecto en local.

```zsh
    php artisan serve
```

10. Opcionalmente, podemos correr el servicio de mailhog, en una terminal escribir 
```zsh 
mailhog
```

