# Business card manager

### Introduction

This project is a business card manager. It is aimed at young entrepreneurs who are looking for a digital
solution to store the information from their multiple business cards acquired during their various networking
evenings.

### Requirements

- LAMP or WAMP depends of your environment
- Composer - https://getcomposer.org/download/
- Symfony CLI - https://symfony.com/download

### Installation

Clone the project from github

```sh
git clone git@github.com:Raphael-johanne/ktr-msc-ls1.git
```

if you run

```sh
git branch
```

You can see all branches, the correct development order is:

- step-2-profile-interface
- step-3-data-protection
- step-4-library-interface
- bonus-1-save-the-datas
- bonus-2-multi-users
- bonus-3-user-switch
- bonus-33-persist-library-collection (not mandatory but usefull for bonus that I haven't understood)
- readme-documentation
- develop
- master

Master containing all developments exept the final bonus

#### Configuring the Database

The database connection information is stored as an environment variable called DATABASE_URL. For development, you can find and customize this inside .env file:

```sh
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/business_card?serverVersion=5.7"
```

Replace db_user, db_password, 127.0.0.1:3306 and serverVersion=5.7 with your own mysql server configuration.
business_card is the name of the database

#### Initializing the project

```sh
$ cd ktr-msc-ls1
$ symfony server:start
```

In another terminal window or tab

```sh
$ cd ktr-msc-ls1
$ php bin/console doctrine:database:create
$ php bin/console doctrine:migrations:migrate
```

### Usage

You can now go to http://127.0.0.1:8000/login in your favorite browser

### Report a bug

Please report bugs to contact@rcowebdev.com
