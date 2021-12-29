<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
file=>.htaccess

Servier upload=>done

created by id using model

protected static function boot()
    {
        parent::boot();

        Prodect::creating(function ($model) {
            $model->created_by = auth()->id();
        });
    }

<link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet">
Error=> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.0.2".
Answer=> #add to composer.json > config =>"platform-check": false, or composer install --ignore-platform-reqs