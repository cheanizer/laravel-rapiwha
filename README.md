# lararapiwha
simple library to interact with rapiwha api whastapp endpoint. 
### how to install
` composer require cheanizer/laravel-rapiwha`

add in the provider section in your `config/app.php`

    Cheanizer\LaraRapiWha\LaraRapiWhaServiceProvider::class
    
and optional add facades in facades section if you want user this library everytime.

    'APIWHA' => Cheanizer\LaraRapiWha\Facade::class
   
don't forget to copy configuration file using 
   `php artisan vendor:publish`

add parameters rapiwha account to your .env

    RAPIWHA_BASE_URL=http://panel.rapiwha.com/
    RAPIWHA_APIKEY={your_api_key_here}
    

