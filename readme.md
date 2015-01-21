
## merry-go-round

merry-go-round is a very simple application that assists in tracking and routing calls to be transferred/distributed to
a set of individuals (receivers). It doesn't use any advanced algorithms or fancy formulas, it simply grabs the first
receiver that has the least number of received calls. You also have the ability to skip to the next receiver and it
will grab the next person with the least number of received calls. Pretty simple, eh?

## Features

* User Auth
* Add call meta information anywhere in application
* Links all calls to the received party automatically
* Logs who creates said calls
* Dynamically add any set of receivers

## Requirements

* PHP >= 5.4
* MCrypt PHP Extension
* MySQL/Postgres/SQLite/SQL Server
* Nginx or Apache

## Quick Start

* Clone/Download Repo to web-accessible area `cd /var/www/html && git clone git@github.com:chaseconey/merry-go-round.git`
* Go to root of project `cd /var/www/html/merry-go-round`
* Install dependencies `composer install`
* Set environment variables (See below)
* Setup database credentials (this can be configured in `app/config/database.php`)
* Create database called `forge` (or whatever you set in `database.php` above)
* Run migrations `php artisan migrate`
* Generate key `php artisan key:generate`
* Create your first user `php artisan app:create-user "Full Name" "email@email.com" "password"`

### Environment Variables

This application relies on having certain environment variables setup for the application to work. For more information
on different ways to set these, see [the documentation](http://laravel.com/docs/4.2/configuration#protecting-sensitive-configuration).
Below is a list of required application environment variables

* DB_PASSWORD

## License

merry-go-round is open-sourced software licensed under the [MIT license](https://github.com/chaseconey/merry-go-round/blob/master/LICENSE)
