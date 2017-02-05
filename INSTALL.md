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
  3. Copy the /project/.env.example file to /project/.env.  This is the main configuration file. It is ignored in the repository for security.
  4. Edit the `/project/.env` file and alter the database connections to reflect:
    DB_DATABASE=laraveldb
    DB_USERNAME=root
    DB_PASSWORD=root
  5. Provision and boot the vagrant server:
    $ `vagrant up`
  6. Once the server is provisioned and running, visit the test page: [http://localhost:8080](http://localhost:8080).

## Accessing the Server

  1. Open a terminal:
    $ cd /path/to/your/toolbox/
    $ vagrant ssh

## Schema Documentation
[Schema Documentation](SCHEMA.md)
