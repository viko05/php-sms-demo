# php sms client demo

A simple example of php implementation for [Sinch sms api](https://developers.sinch.com/docs/sms/)

## How to try

- clone this project
- ``cd project-folder``
- ``docker-compose up -d``
- install dependencies ``docker exec -it demo-php-fpm composer install``
- run in your browser http://localhost:8000/index.php

NOTE: ask me if you need to add your number to the verified list for **test sending**. For not verified numbers. See the
example of API response if the number isn't added to verified list. Or use
{"code":"only_to_verified_numbers_in_test","text":"Messages can only be sent to your verified number in test mode"}

OR

Sign up for your own account and replace the values in [app/send.php](https://github.com/viko05/php-sms-demo/blob/FEAT-setup-simple-php-sms-client/app/public/send.php)
with correct credentials.
```
$servicePlanId
$bearerToken
$sendFrom
```

**WARN**: Don't put your credentials hadcoded. Always use secure secret storages of ``.env`` files out of your version control 
and unreachable from the web. This project is only for demo purposes.