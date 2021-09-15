# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](http://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Instalations

untuk menjalankan aplikasi backend berikut, lakukan perintah
`git clone -b backend <url repository>`

setelah proses download selesai, lakukan proses instalasi package. Diharapkan telah melakukan instalasi [composer](https://getcomposer.org/). Jangan lupa untuk melakukan instalasi xampp, atau lainnya karna kita menggunakan database MYSQL.

instalasi package dapat dilakukan dengan perintah
`composer update`

lakukan import database. database diberi nama
`e-commerce-labkito.sql`

## Running

Untuk menjalankan aplikasi lakukan perintah.

> php spark serve

buka aplikasi di URL [http://localhost:8080](http://localhost:8080)
atau jika ingin melakukan costumisasi port. lakukan perintah

> php spark serve --port 8081

maka aplikasi dapat di buka di URL [http://localhost:8081](http://localhost:8081).

## Set Up

untuk menjalankan aplikasi, perhatikan file `env` pada root folder. Duplikasi file tersebut, dan rename menjadi `.env`. Lakukan penyesuaian pada database dan environtment URL.

Baca documentasi REST API di [Documentasi](https://github.com/LabKito/E-Commerce-kecil/blob/backend/app/Controllers/API/README.md)
