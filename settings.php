<?php
/**
 * Rename this file to "settings.php" and add your OpenAI API key
 * 
 * You can also add a system message if you want. A system message
 * will change the behavior of ChatGPT. You can tell it to
 * answer messages in a specific manner, act as someone else
 * or provide any other context for the chat.
 */

return [
    // add your OpenAI API key here you have to add your own
    "api_key" => "",

    // add an optional system message here
    "system_message" => "Not Connected",

    // model to use in OpenAI API
    "model" => "gpt-3.5-turbo",

    // custom parameters for ChatGPT
    "params" => [
        //"temperature" => 0.9,
        //"max_tokens" => 256,
    ],

    // base uri of app (e.g. /my/app/path)
    "base_uri" => "",

    // storage type
    "storage_type" => "session", // session or sql

    // database settings (if using sql storage type)
    "db" => [
        "dsn" => "sqlite:db/chatwtf.db",
        //"dsn" => "mysql:host=localhost;dbname=chatwtf",
        "username" => null,
        "password" => null,
    ],

    // ElevenLabs settings
    "elevenlabs_api_key" => "",
    "speech_enabled" => false,
];
