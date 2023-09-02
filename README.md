<h1 align="center">Inventory Demo Project</h1>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About the Inventory Demo Project

This is a demo project to show how I use Microsoft SQL Server, Microsoft Access, and Laravel together. This, of course, is the Laravel portion of the project.

## Process

I begin with a diagram that I design on Quick Database Diagrams web app. Then I download the SQL statements to create tables and indexes. I run those SQL statement in SQL Server.

From there I create an Access database file. I use my own Access Add-in to create table links. (I know Access already has such a thing, but mine is better.)

Then I create a local Laravel application so that I can take advantage of the very cool faker library to create fake data. In that application I create migrations and database seeders that use the faker library. I run those to create the tables in MariaDB and populate them with fake data.

I go back to the Access application and create links to the MariaDB tables. Once that is done I create append action queries to move that fake data to my SQL Server linked tables.

Then I create forms and reports that look amazing!

## License

My Inventory Demo Project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
