# hestia-symfony
HESTIA CP Symfony Wrappers
Cliente Symfony 7.* para la API de HESTIA CP.

## Instalación

### Requisitos

- PHP `8.1` o más reciente.
- Symfony 7.*

### Install Using C0mposer / Utilizar Composer


```bash
composer require estratos/hestia-symfony
```

On your Symfony proyect root run:
```bash
composer require estratos/sie-banxico
```

## Usage / Cómo usar

### Query credentials / credenciales de consulta

Se debe obtener las credenciales admin de Hestia CP.

### Controller usage in Symfony / Uso en Controller en Symfony

```php
<?php

namespace App\Controller;

use App\Service\RequestService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Estratos\HestiaSymfony;

class HestialController extends AbstractController
{




}
```

## Licenciamiento

El autor de este paquete es software libre, algunos derechos reservados por Estratos Electronics SAS de CV. Este paquete se puede distribuir y/o modificarse bajo los términos de la [Licencia MIT].


[php-http.org]:https://php-http.org
[Licencia MIT]:/LICENSE

