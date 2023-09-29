# php sms client demo

## Sinch
A simple example of php implementation for [Sinch sms api](https://developers.sinch.com/docs/sms/). See ``app/public/send-sinch.php``

## Twilio
The example of usage [Twilio API](https://www.twilio.com/docs/sms/api/message-resource#create-a-message-resource) can be found here ``app/public/send-twilio.php``

## How to try

- clone this project
- ``cd project-folder``
- switch to working branch ``git checkout FEAT-setup-simple-php-sms-client``
- ``docker-compose up -d``
- install dependencies ``docker exec -it demo-php-fpm composer install``
- run in your browser http://localhost:8000/index.php

NOTE: ask me if you need to add your number to the verified list for **test sending**. See the
example of API response if the number isn't added to verified list.
{"code":"only_to_verified_numbers_in_test","text":"Messages can only be sent to your verified number in test mode"}

OR

Sign up for your own account and replace the values in [app/send.php](https://github.com/viko05/php-sms-demo/blob/FEAT-setup-simple-php-sms-client/app/public/send.php)
with correct credentials from your account.

NOTE all API credentials must be set up in ``.env`` file
