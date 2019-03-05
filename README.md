PBBoard official Forum https://www.pbboard.info/forums/

Welcome
Thanks for downloading PBBoard!
These documents will guide you through the process of installing PBBoard on to your web site, updating an existing copy of PBBoard and provide you with a bit of legal preamble we need to include within our product. A PBBoard Tutorials of PBBoard is available at the PBBoard website.

Installation Instructions
Quick and easy steps to get you up and running
These steps are by no means exhaustive or as detailed as possible. If you require more detailed installation instructions.

Unzip the release archive to your computer using an archive utility capable of decompressing the download format you chose (WinZip, WinRAR)
Using an FTP client (FlashFXP, FileZilla, SmartFTP), or a file manager provided with your hosting package, upload the entire contents of the 'Upload' directory to a visible directory on your web server (for example, forum or forums).
CHMOD the following files to 666 (ie, make sure that PHP can write to them).
./includes/settings.php
./includes/config.php (you must rename config.default.php to config.php first)

CHMOD the following folders to 777 (ie, make sure that PHP can write to and execute from them).
./cache/*all files*
./download/*all files*
./admincp/cpstyles/templates/
In your browser, visit the URL where you installed your forums, appending /install/ on to the end of it.

If you installed your forums to http://www.yoursite.com/forums/ then you would visit http://www.yoursite.com/forums/install/.
Please follow the installation wizard through, making sure you have the following details handy:
Database Details:
PBBoard 3.0.3 can run on MySQLi, PHP7. You will need the details of your database so PBBoard can connect to it. Generally your web host should be able to supply you with these details.
MySQL: You need your MySQL username, password, database name and the hostname or ip address of your MySQL server.
Forum Details:
This includes the name of your forums, the URL to your forums directory, the name of your website, and the URL to your website.
Administrator Information:
During the installation process you will be required to create your initial administrator account. You will need to know which username, password, and email address you intend to use for this account
After the installation has completed, please delete the 'install' directory from server.
Note: for extra security you can CHMOD config.php back to 644, or even 444, but make sure you leave settings.php writable, as well as all the other files and folders with extra permissions.
You can now login to the Administration Control Panel by appending /admincp/ on to the URL of your forums
Congratulations, you should now have an installed and working copy of PBBoard on your web server.

PBBoard Links
PBBoard Website: https://pbboard.info 
PBBoard Community Forums: https://pbboard.info/forums
PBBoard Tutorials:https://pbboard.info/forums/f16
