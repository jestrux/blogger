# Blogger

WYSIWYG Editor for Laravel


# How to Use

## Install Package
`composer require jestrux/blogger`

Add these lines to your `composer.json` file

```json
{
    "require": {
        "jestrux/blogger": "dev-master"
    },
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/jestrux/blogger.git"
        }
    ]
}
```

And then in the terminal, run the following command.

`composer update`

### Add Blogger table to your database

Now that we have our package installed, we need to migrate the database to add the necessary tables for Press. In the command line, run the following command.

`php artisan migrate`

### Publish package asset files
`php artisan vendor:publish --tag=blogger-assets`

You will now find the blogger asset files under `/public/blogger`

## Add image search and S3 upload configs

Add the following to your .env file and set the correct values...

```
MIX_UNSPLASH_CLIENT_ID=
MIX_S3_BUCKET=
MIX_S3_REGION=
MIX_S3_ACCESS_KEY_ID=
MIX_S3_SECRET_ACCESS_KEY=
```

# Customize

Before you can customize configs, you need to first publish the package's config file that includes some defaults for us. To publish that, run the following command.

### Publish the package config
`php artisan vendor:publish --tag=blogger-config`

You will now find the config file located in `/config/blogger.php`

### Add prefix

Set the value of the prefix field under `config/blogger.php` to your liking

### Add middleware

Set the value of the middleware field under `config/blogger.php` to your liking

# High level plan

- [x] Create a generic API system following API standards
- [x] Create a very easy way for a user(developer) to set up models
- [x] Create a generic CMS solution with option for user to customize based on needs
- [x] Create laravel component for accessing data with search and filter
- [x] Create laravel component for embeding blogger form
- [ ] Create easy to use and interactive docs and make them easily discoverable(in context of the editor and cms pages)
- [ ] Create a mobile app with the basic model generation features so a user can update the models on the go
- [ ] Create a url generator for complex endpoints and option to copy the generated URL or create a shortened version

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [jestrux](https://github.com/jestrux)
- [All Contributors](https://github.com/jestrux/blogger/contributors)

## Security

If you discover any security-related issues, please email wakyj07@gmail.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
