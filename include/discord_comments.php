<?php

// Replace the URL with your own webhook url
include 'discordWebhook.php';

$timedate = new DateTime(date("h:i"));
$Time = $timedate->format(DateTime::ATOM);

$hookObject = json_encode([
    //Username of the webhook
    "username" => "Luca's website",
    //Just don't
    "tts" => false,
    //Embed stuff
    "embeds" => [
        [
            // Set the title for your embed
            "title" => $name,
            // The type of your embed, will ALWAYS be "rich"
            "type" => "rich",
            // A description for your embed
            "description" => $discordEmbedMessage,
            /* A timestamp to be displayed below the embed, IE for when an an article was posted
             * This must be formatted as ISO8601
             */
            "timestamp" => $Time,

            // The integer color to be used on the left side of the embed
            "color" => hexdec("007bff")
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
foreach ($urlList as $url) {
    # code...

    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $hookObject,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json"
        ]
    ]);

    $response = curl_exec($ch);
    curl_close($ch);
}
