
# lararapiwha

simple library to interact with rapiwha api whastapp endpoint.

### how to install

` composer require cheanizer/laravel-rapiwha`

  

add in the provider section in your `config/app.php`

    Cheanizer\LaraRapiWha\LaraRapiWhaServiceProvider::class

and optional add facades in facades section if you want user this library everytime.

  

    'APIWHA' => Cheanizer\LaraRapiWha\Facade::class

dont forget to copy configuration filed using

`php artisan vendor:publish`

  

add parameters rapiwha account to your .env

  

    RAPIWHA_BASE_URL=http://panel.rapiwha.com/
    
    RAPIWHA_APIKEY={your_api_key_here}

  

### how to use

  

load the library and use this command to send message via whastapp.

    $dd = APIWHA::send('628123456789','hello');
