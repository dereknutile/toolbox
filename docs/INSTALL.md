# Installation Documentation

## Requirements for Development

* [Git](https://git-scm.com/downloads)
* [VirtualBox](https://www.virtualbox.org/)
* [Vagrant](http://www.vagrantup.com/)

## Installation

    1. Confirm the requirements above are installed.
    2. Clone this repo by opening a terminal:
        $ cd /path/you/want/to/develop/in
        $ git clone https://github.com/dereknutile/toolbox
        $ cd toolbox
    3. Copy the /project/.env.example file to /project/.env.  This is the main configuration file. It is ignored in the repository for security.  You will edit the database connections later in the install.
    4. Provision and boot the vagrant server:
        $ `vagrant up`
    5. Once the server is provisioned and running, visit the test page: [http://localhost:8080](http://localhost:8080).

#### Accessing the Server

    1. Open a terminal:
        $ cd /path/to/your/toolbox/
        $ vagrant ssh

## Install missing vendors
I have `gitignored` Laravel vendors so they can be installed up-to-date.  To install vendors you must do the following command:

    $ cd /vagrant/public
    $ composer install

### Configure the database
The provision script creates a MySQL database named `laraveldb`.  To use the database you must edit the `/vagrant/project/.env` file and update the folling values:

    DB_DATABASE=laraveldb
    DB_USERNAME=root
    DB_PASSWORD=root

### Seed the database
    $ php artisan migrate
    $ php artisan db:seed

### Test
Browse to [http://localhost:8080/](http://localhost:8080/).

#### Notes
If you see an error similar to: ` No supported encrypter found. The cipher and / or key length are invalid.`, you will need to generate a key using this command:

    $ php artisan key:generate
    Application key [new_key] set successfully.

## Schema Documentation
[Schema Documentation](docs/SCHEMA.md)
