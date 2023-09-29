<?php

use libphonenumber\PhoneNumberUtil;
use Symfony\Component\Dotenv\Dotenv;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;
use Twilio\Exceptions\RestException;

require '../vendor/autoload.php';

// Load env file
$env = (new Dotenv())->usePutenv();
$env->loadEnv(__DIR__.'/../.env');

const US_COUNTRY_CODE = 'US';


$sendFrom = "+12512207227";
$authToken = getenv('TWILIO_AUTH_TOKEN');
$sid = getenv('TWILIO_ACCOUNT_SID');
$recipientNumber = $_POST['phoneNumber'] ?? '';
$personName = $_POST['personName'] ?? 'noName';
$textMsg = $_POST['textMsg'] ?? '';

$message = "$personName \n$textMsg";

$phoneUtil = PhoneNumberUtil::getInstance();
$numberProto = $phoneUtil->parse($recipientNumber, US_COUNTRY_CODE);
$isValid = $phoneUtil->isValidNumber($numberProto);

if ($isValid):
    $twilio = new Client($sid, $authToken);

    try {
        $message = $twilio->messages
            ->create($recipientNumber, // to
                ["from" => $sendFrom, "body" => $message]
            );
    } catch (RestException|TwilioException $e) {
        print_r($e->getMessage());
        return;
    }
?>
    <br><bold>Message delivered. ID: <?php echo $message->sid; ?></bold>
<?php else: ?>
    <br><bold>Pls enter valid US code</bold>
<?php endif; ?>

<br>
<a href="/index.php">Back</a>
