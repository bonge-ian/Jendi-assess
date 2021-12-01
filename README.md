# Installation proces

## Prerequisites

-   Have PHP8.0 installed
-   Have composer 2.0 installed
-   Have mysql database

### Installation

1. Clone the repo
2. `cd ` into the cloned repo
3. Run `composer install` on your terminal
4. Run `npm install`
5. Run `npm run dev`
6. Run `php artisan key:generate`
7. Duplicate .env.example and call the duplicate .env
8. Go to .env file at the root of your project and change the following lines

-   DB_USERNAME=(enter the username to your database)
-   DB_PASSWORD=(enter password to your database)

9. Run `php artisan key:generate` on your terminal
10. Run `php artisan migrate`
11. Run `php artisan db:seed`
12. Lastly run ` php artisan serve` to run the project

The admin credentials are:
- email: ```simo@jendie.co.ke```
- password: ```password```
