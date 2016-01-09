# Toolbox

## Overview
I'm constantly searching for a good tool to do what I need in my day-to-day
world of development and administration of projects.  This is it.  The goal of
this application is to be simple and flexible, and to offer a way to do the
following:

* Securely store secrets like passwords, configurations, license keys, etc.
* Store knowledgebase items.
* Provide a simple task manager to replace spreadsheets.
* Cloud uploads for services like AWS/S3.

## Development Environment Prerequisites

* [Virtualbox](https://www.virtualbox.org/)
* [Vagrant](https://www.vagrantup.com/)
* [Git](https://git-scm.com/)
* If you're running Windows, an ssh tool like [PuTTY](http://www.putty.org/)

## Installation
### Download the repo
    $ git clone https://github.com/dereknutile/toolbox /path/to/toolbox

### Set Environmental Variables

 * Copy `app/.env.example` to `app/.env`
 * Edit `app/.env` and set your environmental variables.  Make a note of the
 database settings you choose here, you'll reference them later.

### Start the application
    $ cd /path/to/toolbox
    $ vagrant up

### Access the application using SSH
    $ vagrant ssh (or use PuTTY to connect to 127.0.0.1 over port 8022)

### Create the database
Let's assume you set your DB_DATABASE value in app/.env to `toolbox`.  If you
used a different name, replace it in the create database command below.

    $ mysql -uroot -proot
    $ create database toolbox;

### Prepare the application
    $ cd /vagrant/app/
    $ bower install
    $ composer install

### Generate and seed the database
    $ php artisan migrate
    $ php artisan db:seed

### Test
Browse to [http://localhost:8080/](http://localhost:8080/).

#### Note
If you see an error similar to: ` No supported encrypter found. The cipher and / or key length are invalid.`, you will need to generate a key using this command:

    $ php artisan key:generate
    Application key [new_key] set successfully.

Once you have the `[new_key]`, you need to enter that key in `app/config/app.php` by replacing the value in the line that looks like this: `'key' => env('APP_KEY', 'SomeRandomString')`.
