### Instructions:
Clone project
>git clone https://github.com/ArtursAsi/currencies

Install Composer
>composer install

Install npm
>npm install

Create .env file
>cp .env.example .env

Create Database with 1 table
>Database 'currency' with a table 'currencies'
>>With 3 columns
>>>id, name, value
>

Migrate Database
>php artisan migrate

Update Database
>php artisan update:currencies

Generate key
>php artisan key:generate

Run app 
>php artisan serve



### Description

This app reads an RSS file to view currency rates from Europe`s Central Bank.
You can click on currency name to view all days about that currencies rate.


