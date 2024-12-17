Artisan Terminal

A simple Artisan command terminal for Laravel projects.

Overview

Artisan Terminal provides a user-friendly web interface for executing Artisan commands directly from your browser. This is especially useful when your hosting provider does not offer terminal access, allowing you to manage your Laravel application with ease.

Features

Execute common Artisan commands via a browser interface.

Predefined buttons for frequently used commands.

Interactive terminal-like UI for entering and running custom commands.

Built-in clear command to reset the terminal output.

Secure access with middleware support, such as authentication.

Installation

Step 1: Install the Package

Install the package via Composer:

composer require s1kopath/artisan-terminal

Step 2: Publish the Configurations (Optional)

The package does not require additional setup, but you can publish the views if customization is needed:

php artisan vendor:publish --tag=views --provider="S1kopath\ArtisanTerminal\ArtisanTerminalServiceProvider"

This will publish the terminal blade file to your resources/views/vendor/artisan-terminal directory.

Usage

Accessing the Terminal

After installation, navigate to /artisan-terminal in your browser. You must be logged in (middleware-protected) to access the terminal.

Running Commands

Typing Commands:

Type any Artisan command in the input box (e.g., php artisan optimize:clear) and press Enter or click the "Run" button.

Using Predefined Buttons:

Click on one of the predefined command buttons for quick access to commonly used Artisan commands.

Clearing the Terminal

To clear the terminal output, type clear and press Enter.

Supported Commands

Here are some commands you can run safely from the terminal:

optimize:clear

config:cache

config:clear

route:cache

route:clear

view:cache

view:clear

cache:clear

queue:restart

event:cache

event:clear

storage:link

migrate

schedule:run

Security

By default, the terminal route is protected by the web and auth middleware. Ensure only authorized users can access it to prevent misuse.

If you want to customize the middleware, modify the route definition in routes/web.php.

License

This package is open-sourced software licensed under the MIT license.

Author

Md Asaduzzaman
asaduzzaman.arob@gmail.com