<?php
//var_dump($_POST);

$service_plan_id = "c0a614be6fc94ff298581792da3a7c8b";
$bearer_token = "173f27ae3f9b4ba68e8d475006d8ebb1";

//Any phone number assigned to your API
$sendFrom = "447520651179";
//Maybe several, separate with a comma ,
$recipientNumber = $_POST['phoneNumber'] ?? '';
$personName = $_POST['personName'] ?? 'noName';
$textMsg = $_POST['textMsg'] ?? '';

$message = "$personName \n$textMsg";

// Check recipient_phone_numbers for multiple numbers and make it an array.
if(stristr($recipientNumber, ',')){
    $recipientNumber = explode(',', $recipientNumber);
}else{
    $recipientNumber = [$recipientNumber];
}

// Set necessary fields to be JSON encoded
$content = [
    'to' => array_values($recipientNumber),
    'from' => $sendFrom,
    'body' => $message
];

$data = json_encode($content);

$ch = curl_init("https://us.sms.api.sinch.com/xms/v1/{$service_plan_id}/batches");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BEARER);
curl_setopt($ch, CURLOPT_XOAUTH2_BEARER, $bearer_token);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch); ?>
<code>
    <bold>API response:</bold>
    <br>
    <?php if(curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    } else {
        echo $result;
    }?>
</code>
<?php curl_close($ch); ?>
<br>
<a href="/index.php">Back</a>
