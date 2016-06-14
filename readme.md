# Highly Nested Resources

This lesson is a request from a developer colleague. He wanted me to explain how relations work in Laravel and specifically how to handle relationships in highly nested controllers/routes where there are three nested models.

First I will show you what is his actual situation and then I will breakdown it step by step, taking note on what I will need to code the final solution. You can find the repository I created on GitHub.

The solution to this lesson won't be step by step because showing how to create models, migrations, controllers and routes is not important for this lesson. The only thing that is important is the controller logic for the show method and displaying the output in the view file. If you are working with nested resources you should already know how to create migrations, models and controllers.

## Installation

Clone repository to your drive and type in terminal there:

```
composer install
```

## Configuration

Copy file `.env.example` to `.env` file:

```
cp .env.example .env
```

and change the `APP_KEY` in `.env` using:

```
php artisan key:generate
```

Create empty database file called `database.sqlite` in `database` directory.

Run migrations and seed database with:

```
php artisan migrate --seed
```

## Running

From terminal type:

```
php artisan serve
```

You should get an address to open in your browser like http://localhost:8000.

Hint! Go to URL: `http://localhost:8000/books/mighty-book-name/posts/awesome-post-slug/comments/1` too see the output.

**Have fun!**