# Gutenberg field for Laravel Backpack

![Gutenberg field for Laravel Backpack](screenshot/screenshot.png?raw=true)
### Installation
1. Install
```php
composer require soeurngsar/gutenberg
```
2. Publish resources
```php
php artisan vendor:publish --provider="SoeurngSar\Gutenberg\GutenbergServiceProvider"

php artisan vendor:publish --provider="VanOns\Laraberg\LarabergServiceProvider"
```


### Usage
On your CRUD Controller just change type to use gutenberg field
```php

$this->crud->addField([
  'name' => 'content',
  'label' => trans('backpack::pagemanager.content'),
  'type' => 'gutenberg::gutenberg',
  'placeholder' => trans('backpack::pagemanager.content_placeholder'),
]);
```

For other usage related Laraberg please follow their [documentation](https://github.com/VanOns/laraberg)

### Update 
When updating Gutenberg you have to publish the vendor files again by running this command:

```php
php artisan vendor:publish --provider="SoeurngSar\Gutenberg\GutenbergServiceProvider" --tag=views --force
```
### Credits

 * [dannyrevenant](https://github.com/dannyrevenant)
 * [Laraberg](https://github.com/VanOns/laraberg)

### Compatibility
* Tested with laravel 8.0 with Backpack version 4.0
