<?php

// Settings
$discord_url = 'YOUR-DISCORD-WEBHOOK-URL';


// Core
include __DIR__.'/discord.php';
use \DiscordWebhooks\Client as DiscordWebhook;
$discord = new DiscordWebhook($discord_url);
$discord->send('Hello World');

