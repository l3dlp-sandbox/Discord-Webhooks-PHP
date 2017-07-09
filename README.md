Discord Webhooks Wrapper for PHP CLI
====

The smallest wrapper to interact with [Discord](https://discordapp.com) webhooks!



### Getting Started
PHP 5.3+ required, along with ext-curl. This wrapper has not been tested with HHVM, but there's no reason it shouldn't work!

1. Run `git clone https://github.com/l3dlp/Discord-Webhooks-PHP.git` to install the latest release.
2. Open `lib.php` and put your webhook url 

```php
<?php
$discord_url = 'URL-FROM-DISCORD';
```
 
3. Include the `discord.php` file
4. Enjoy! 



### Setting up a webhook in Discord
*This currently only works in Discord's public test build, which can be found [here for Windows](https://discordapp.com/api/download/ptb?platform=win) and [here for Mac](https://discordapp.com/api/download/ptb?platform=osx).*

1. On a server you own (or have the "Manage Webhooks" permission on), open Server Settings, and select 'Webhooks' on the menu: ![Step 2](http://i.imgur.com/jovnbVO.png)

2. Click the "Create Webhook" button and complete the form. The "Name" field and avatar that you set are the defaults, and may be overriden in this wrapper, but ***the channel you pick cannot be changed by the wrapper.*** You'll need a separate URL for each channel you want to post to. ![Step 2](http://i.imgur.com/u8CcmE6.png)

3. Copy the "Webhook URL," and use that when initializing the class. 

4. Enjoy!



### Example 1: smallest call
```php
<?php
    include __DIR__.'/discord.php';   // You can change the file name and put it wherever you like 
    $discord->send('Hello World');
```



### Example 2: detailed call
```php
<?php
    include __DIR__.'/discord.php';   // You can change the file name and put it wherever you like
    $discord->name('ME'); // Optionally, provide a name that the message will be sent from. If not set, uses the name set in Discord.
    $discord->avatar('https://your.own/avatar.jpg'); // Optionally, a URL for the user's avatar. If not set, uses the avatar set in Discord.
    $discord->message('Hello World'); // Optionally, set the message to be sent here. If not set, uses the message in $this->send().
    $discord->send(); // This method sends the previously set message.
```



### Note
A simpler way to do the same, from the generously shared work by @AuroraAri

If you can't live without `composer`, get a view on https://github.com/AuroraAri/Discord-Webhooks-PHP

 