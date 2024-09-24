# Circulation Notification using Whatsapp Messenger

## INTRO
- This plugin is for sending circulation notification using whatsapp in [SLiMS](https://slims.web.id).
- At this time, API services that we supported: [Fonnte](https://fonnte.com/) dan [Whacenter](https://whacenter.com/).

## How to use the plugin
- We will use the service from [Fonnte](https://fonnte.com/). There will be confirmation via Whatsapp.
- Login to [Fonnte](https://fonnte.com/) service, add your device and connect.
- Download this plugin and put in SLiMS plugins directory.
    - You can download this repo, and do the "composer update".
    - Or you can use the build package from [release page](https://github.com/hendrowicaksono/Simple-WA-Notif-for-Circulation/releases).
- Go into the folder, edit `bootstrap.php` file, update:
    - Change `YOUR_SLiMS_DB_NAME` to your SLiMS database name.
    - Change `YOUR_SLiMS_DB_USER` to your SLiMS database username.
    - Change `YOUR_SLiMS_DB_PASSWORD` to your SLiMS database password.
    - (Optional) Change `localhost` to your address of MySQL/MariaDB server.
    - Change `YOUR_LIBRARY_NAME_HERE` to your library name.
    - change `YOUR_DEVICE_ID_HERE` text with your provider device id if you use [Whacenter](https://whacenter.com/) service.
    - change `YOUR_TOKEN_HERE` text with your provider token if you use [Fonnte](https://fonnte.com/) service.
    - Make sure line `$ccnw['provider'] = 'fonnte';` if you want to use [Fonnte](https://fonnte.com/) service and `$ccnw['provider'] = 'whacenter';` if you want to use [Whacenter](https://whacenter.com/) service.

- Activate the plugin: `System` -> `Plugin` -> `Circulation Notification using Whatsapp`.

- Now try the circulation process. If anything is going well, then the user who borrows or returns the library collection will get notification via Whatsapp. BUT DONT FORGET, make sure the Phone number is membership data is filled with member's whatsapp number.

## Warning
- The default mode designed for low scale circulation activities. If your library has very high circulation traffic, then consider to use implementation using [Gearman Job Server](https://gearman.org/) or [NSQ message broker](https://nsq.io/) instead. Both of them have been supported by this Plugin.

## Last but not least
[Support us](https://saweria.co/hendrowicaksono) building SLiMS ecosystem better, maintained, and more complete.
