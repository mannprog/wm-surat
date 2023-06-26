# About

SBAdmin template is a website template intended to facilitate the development of a website, in which it has implemented multi user login. This template is built with several packages including the following:

-   [Laravel v.8.8](https://laravel.com/).
-   [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission/v5/introduction).

## Installation

-   Clone repository github <br> <code>git clone https://github.com/mannprog/wm-surat.git</code>
-   Install package <br> <code>composer require install</code>
-   Remove .example extension in .env.example <br> <code>.env.example -> .env</code>
-   Migrate database <br> <code>php artisan migrate --seed</code>
-   Serve <br> <code>php artisan serve</code>

## Default User

<table>
  <tr>
    <th>Email</th>
    <th>Password</th>
    <th>Level</th>
  </tr>
  <tr>
    <td>admin@admin.com</td>
    <td>1234</td>
    <td>admin</td>
  </tr>
  <tr>
    <td>headman@headman.com</td>
    <td>1234</td>
    <td>headman</td>
  </tr>
  <tr>
    <td>officer@officer.com</td>
    <td>1234</td>
    <td>officer</td>
  </tr>
</table>

## License

The Template SbAdmin is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
