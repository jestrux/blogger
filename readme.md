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

## Credits

- [jestrux](https://github.com/jestrux)
- [All Contributors](https://github.com/jestrux/blogger/contributors)

## Security

If you discover any security-related issues, please email wakyj07@gmail.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
