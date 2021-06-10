# Skill Sets
## About

The purpose of this web application is to store and retrieve skill sets – selections of questions on a topic for students to complete. Question may vary in difficulty and answer format.

## Software

- Laravel 8
- Foundation 6 for Sites

## Developer instructions
### Getting started

Based on https://devmarketer.io/learn/setup-laravel-project-cloned-github-com/ – see that site for further details.

- Fork this repo into your own Github 
- Clone your forked repo locally
- `cd` into the project folder
- Install Composer dependencies: `composer install`
- Install NPM dependencies: `npm install`
- Create a .env file: `cp .env.example .env`
- Generate an app encryption key: `php artisan key:generate`
- If not using Docker/sail, then create an empty database for the project
- Edit the .env file. Ensure that `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` have appropriate values. (If using Docker/sail, use `DB_USERNAME=sail` and `DB_PASSWORD=password`)
- Migrate the database: `php artisan migrate` or `sail artisan migrate`
- Ensure your git user information is set up. _(The comands below are for the local git repository only. Use_ `config --global` _instead of_ `config` _to set globally.)_ 
   - Set name with: `git config user.name "Your Name Here"`
   - Set email with: `git config user.email "youremail@address.com"`
   - Check your config with: `git config --list`
