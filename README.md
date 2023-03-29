[![Actions Status](https://github.com/get-house/gethouse/workflows/Gethouse/badge.svg)](https://github.com/get-house/gethouse/actions)

# Gethouse

Gethouse is a SaaS property management system built with Laravel, Inertia.js (Vue), and Tailwind CSS.

## Features

- User authentication and authorization
- Property management (CRUD operations)
- Tenant management (CRUD operations)
- Lease management
- Payment tracking
- Reports generation

## Tech Stack

- [Laravel](https://laravel.com/)
- [Inertia.js](https://inertiajs.com)
- [Vue.js](https://vuejs.org/)
- [Tailwind CSS](https://tailwindcss.com/)
- [MySQL](https://www.mysql.com/)

## Getting Started

1. Clone the repository:
   `git clone https://github.com/get-house/gethouse.git`

2. Install dependencies:
   `composer install` and
   `npm install && npm run dev`

3. Create a `.env` file by copying the `.env.example` file:
   `cp .env.example .env`

4. Generate an app encryption key:
   `php artisan key:generate`

5. Set up the database by updating the database configuration variables in the `.env` file:
   `DB_HOST=` - The host of the database server
   `DB_PORT=` - The port of the database server
   `DB_DATABASE=` - The name of the database
   `DB_USERNAME=` - The username of the database user
   `DB_PASSWORD=` - The password of the database user

6. Run the database migrations:
   `php artisan migrate`

7. Run the database seeders:
   `php artisan db:seed`

## Contributing

If you would like to contribute to this project, please read
the [contributing guideline](https://github.com/get-house/gethouse/blob/main/CONTRIBUTING.md) before following these
steps:

1. Fork the repository
2. Create a new branch (`git checkout -b feature/new-feature`)
3. Commit your changes (`git commit -am 'Add new feature'`)
4. Push to the branch (`git push origin feature/new-feature`)
5. Open a pull request
