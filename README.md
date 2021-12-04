# php / laravel お勉強

しゃーなし。

## メモ

composer を以下のようにしたとして。
```
alias composer='docker run --rm -v $PWD:/app -v ${COMPOSER_HOME}:/tmp composer'
```

とりあえず laravel アプリ作成。
```
$ composer create-project laravel/laravel myapp
$ cd myapp
$ php artisan serve

Fatal error: Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.0.2". You are running 7.3.29. in /Users/nozaki/Repository/bukaz/practice-php-laravel/myapp/vendor/composer/platform_check.php on line 24
```

mac のデフォルト php が 7.3 だった。

php8 の docker イメージを使って sail で docker-compose.yml を作り、up する。

```
$ docker run --rm -v ${PWD}:/usr/src/work -w /usr/src/work php:8-cli-alpine php artisan sail:install
$ ./vendor/bin/sail up
```

これで `http://localhost/` で laravel ホームが見えた。

終了。

```
$ ./vendor/bin/sail down
```
