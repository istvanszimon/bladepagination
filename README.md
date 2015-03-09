# bladepagination
Laravel's pagination with Blade templating support

To install through *composer*:

1. Add the follwing instruction to the "require" object in your composer.json: `"clay/blade-pagination": "dev-master"`

2. Execute `composer update` in the console

3. Add the service provider to the config/app.php file of your Laravel app: `'Clay\BladePagination\ServiceProvider'`

4. To change the templates, please execute the following command in the console: `php artisan vendor:publish`

5. Then you can: 

Change the theme (if necessary) in config/pagination.php

Change the text in resources/lang/en/pagination.php

Change the templates in the `resources/views/pagination` directory (make sure to edit or add a new template according to the theme specify in config/pagination.php
