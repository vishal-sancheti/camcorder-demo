# Laravel Camcorder Demo
This project uses eyuva/laravel-camcorder and demostrate how to make a demo video

# Installation

Step 1. Install PHP 7.1 and Setup Composer

Step 2. Clone this repo to a desired location

```
git clone https://github.com/v1shky/camcorder-demo.git
```

Step 3. Configure basic environment variables

```
cp .env.example .env
``````

Step 4. Install dependencies using composer
```
composer install
```
Step 5. Generate a unique app key

```
php artisan key:generate
```

Step 6. Locally serve app using Valet or PHP's built-in development server

```
php artisan serve
```

Verify Demo:
- On Homepage click "Generate" to make a video
- Once video generated you will be redirected to home page and new "Output" link will be visible
- Click "Output" to see generated video


# Contributions
Contributions are welcome and will be fully credited. We accept contributions via Pull Requests on [GitHub](https://github.com/v1shky/camcorder-demo).

# Loveware
This project can be used freely and if you **Love It** then **Star It**

# Credits
* [Vishal Sancheti](https://github.com/v1shky)

# License

The code in this repo and **The Laravel framework** are open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

