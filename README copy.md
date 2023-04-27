## Laravel Service Repository - Laravel Core Modules ##

### Installation ###

Add ServiceRepository to your composer.json file to require ServiceRepository :
```
    require : {
        "laravel/framework": "5.1.*",
        "bestmomo/scafold": "dev-master"
    }
```

Update Composer :
```
    composer update
```

The next required step is to add the service provider to config/app.php :
```
    'Bestmomo\Scafold\ScafoldServiceProvider',
    "LaravelCoreModule\\ServiceRepository\\RepositoryServiceProvider"
```

### Publish ###

The last required step is to publish views and assets in your application with :
```
    php artisan vendor:publish
```

Congratulations, you have successfully installed Scafold !