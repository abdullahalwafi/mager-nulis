
<?php
$command = "python3 bot.py 2>&1";
$pid = popen($command, "r");
while (!feof($pid)) {
    echo fread($pid, 256);
    flush();
    ob_flush();
    usleep(100000);
}
pclose($pid);
$data = [
    'api_key' => 'mMqH4MwRHJpLS0H4LyekrebMYIjuqv',
    'sender' => '6287790002941',
    'number' => '08558883118',
    'message' => 'Ini Saudara',
    'url' => 'bahan2.png',
    'type' => 'png'
];
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://wa.adila.id/send-message",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
