# WORKSHOP_PHP

## SETUP

#### WEB SERVERS @ FEUP
These two servers are available at FEUP:

**gnomo.fe.up.pt** - Is a development server accessible online from within FEUP or using VPN. This server reports compilation and runtime PHP errors and can be used for development.

**web.fe.up.pt** or **paginas.fe.up.pt** - Is a production server accessible from anywhere. This server does not report any PHP errors making it unfit for development but useful for validation.

A file called path/to/yourfile.php stored inside a public_html folder in your personal folder will be available both at: http://gnomo.fe.up.pt/~upxxxxxxxxx/path/to/yourfile.php as http://web.fe.up.pt/~upxxxxxxxxx/path/to/yourfile.php.

#### Use samba or ssh to access your personal folder:

**Windows**
* Make sure you are connected via FEUP’s VPN or eduroam.
* Open File Explorer and type the following address in the address bar: \\samba.fe.up.pt
* Select “More Choices → Use a different account” (Windows 10 – others might be slightly different).
* For username use “feupsig\upxxxxxxxxx” (where upxxxxxxxxx is your username) and for password your password.
* Select the folder “upxxxxxxxxx”.

**Mac**
* Make sure you are connected via FEUP’s VPN or eduroam – if you’re having trouble connecting to FEUP’s VPN try going here and searching for “Configuração automática VPN L2TP MacOS para FEUP” .
* Open Finder and select “Go → Connect To”.
* Type smb://samba.fe.up.pt as your Server Address and click “Connect”.
* For username use “feupsig\upxxxxxxxxx” (where upxxxxxxxxx is your username) and for password your password.
* Select the folder “upxxxxxxxxx”.

**Linux** 
* Make sure you are connected via FEUP’s VPN if your are outside FEUP.
* Open your file explorer (e.g. Nautilus) and select “Connect to Server”.
* Type "ssh://gnomo.fe.up.pt" as your Server Address and click “Connect” (some distributions might break up the address into “Service Type” (SSH) and “Server” (gnomo.fe.up.pt)).
* For username use “upxxxxxxxxx” (where upxxxxxxxxx is your username) and for password your password.

After this click on the clone or download button on this page, select the download zip option and extract everything on the folder public_html (if it doesn't exist create it, full path for windows: "\\samba.fe.up.pt\up20xxxxxxx\public_html")

