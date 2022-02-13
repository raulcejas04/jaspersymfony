Como usar jasper con symfony

acá esta como tocar el composer.json a mano
https://www.compujuy.com.ar/blog/item/6-usar-jasper-server-client-en-symfony

    "autoload": {
        "psr-4": {
            "": "src/"
        },
        "classmap": [
            "app/AppKernel.php",
            "app/AppCache.php",
            "vendor/Jasper/lib"
        ],
        "psr-0": {
            "": "src/"
        }
    }

se agrega esto: "vendor/Jasper/lib"
y esto:
        "psr-0": {
            "": "src/"
        }
y luego composer install
       

http://127.0.0.1:8000/jasper

tiene que estar levantado el servidor de jasper y andando la base a donde apunte el reporte

