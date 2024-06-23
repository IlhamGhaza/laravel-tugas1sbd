# Laravel-tugas1sbd

## Description

Proyek ini adalah implementasi dari tugas pertama Sistem Basis Data (SBD) menggunakan Laravel. Untuk detail lebih lanjut tentang kasus yang diangkat dalam tugas ini, silakan lihat [contoh kasus](contohkasus.md).

This project is an implementation of the first Database Systems (SBD) assignment using Laravel. For more details about the case study, please refer to [contoh kasus](contohkasus.md).

Stisla template

## About Laravel

Laravel is a PHP framework that is elegant and expressive, designed to make web development a joyful and creative experience for developers. For more information about Laravel, visit [About Laravel](laravel.md).

## Installation

1. Clone this repository to your local machine.

    ```bash
    git clone https://github.com/username/Laravel-tugas1sbd.git
    ```

2. Navigate to the project directory.

    ```bash
    cd Laravel-tugas1sbd
    ```

3. Install dependencies using Composer.

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to `.env`.

    ```bash
    cp .env.example .env
    ```

5. Generate the application key.

    ```bash
    php artisan key:generate
    ```

6. Configure your database in the `.env` file.

7. Run migrations to create the database tables.

    ```bash
    php artisan migrate
    ```

8. Run the application.

    ```bash
    php artisan serve
    ```

## Features

- CRUD (Create, Read, Update, Delete) operations for the main entity.
- User input validation.
- Middleware for user authentication.

## Contribution

If you wish to contribute to this project, please fork this repository and submit a pull request with your changes.

## License

This project is licensed under the MIT License. See the [LICENSE](lisence.md) file for details.
