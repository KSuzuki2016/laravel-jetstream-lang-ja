# laravel-jetstream-lang-ja

Laravel 8.x から公式パッケージとして追加されたJetstream日本語化ファイル

## Translation Package

- [Laravel Jetstream](https://github.com/laravel/jetstream)
- [Laravel Livewire](https://github.com/livewire/livewire)
- [Laravel Fortify](https://github.com/laravel/fortify)

## Installation

``` bash
$ composer require ksuzuki2016/laravel-jetstream-lang-ja --dev
```

## Usage

``` bash
$ php artisan vendor:publish --tag=jetstream-lang-ja
or
$ php artisan vendor:publish --tag=jetstream-lang-ja --force
```

既に言語ファイル `resources/lang/ja.json` を利用している場合はマージして下さい

`jq` を使ったマージの例
``` bash
$ jq --sort-keys -s '.[0] * .[1]' ./vendor/ksuzuki2016/laravel-jetstream-lang-ja/resources/lang/ja.json ./resources/lang/ja.json
```

## Testing

``` bash
composer test
```
