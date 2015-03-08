# bladepagination
Laravel's pagination with Blade templating support

To install through *composer*:

1. Add the follwing instruction to the "require" object in your composer.json:

```
"clay/blade-pagination": "dev-master"
```

2. Execute `composer update` in the console

3. Finally add the service provider to the config/app.php file of your Laravel app:

```
'Clay\BladePagination\ServiceProvider'
```

To be able to change the templates (the whole point of this package) please execute the following command in the console:

```
php artisan vendor:publish
```

Then feel free to change the templates in the `resources/views/vendor/blade-pagination` folder
