<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
Transport Booking System
</p>

Prerequisites

Make sure you have the following installed and updated:

    Node.js
    php
    Xampp apache server with MySql

After cloning the repository:
First Run `npm install`

Then `composer install`

After that run the following in the terminal

    php artisan migrate
    php artisan db:seed


Launching the Server

Firstly open two terminals in your IDE, use one to run:

    npm run dev

Then in another terminal, run:

    php artisan serve

This will launch the server in your localhost:8000 domain

Test Accounts

User:

email: jake@gmail.com
password: 12345678

Admin:

email: blake@gmail.com
password: 12345678
