# Ubuntu 14.04 Apache and VHosts

For this guide, square brackets are used as placeholders where you'll need to replace the content with your real content. In none of these cases are you supposed to use actual square brackets.

If you've already configured Apache correctly and you just want to know the part about setting up a new Virtual Host, then you can [skip to that section](#starting-a-new-virtualhost). If not, then you'll need to configure Apache.

# Configure Apache

## Who am i?

Run this line of code to see what your username is (and what the name of your home folder is)

```sh
whoami
```

## Sites and Hosts

Make a `Sites` folder in your home directory. In older versions of OsX, this folder may have been created through other means. If you upgraded to Yosemite, this folder may exist and be filled for whatever reason. If you're coming from the Ubuntu world, this folder is equivalent to Ubuntu's `/var/www`. Also make a folder called `Hosts`. You'll learn more about this folder later in this gist.

```sh
mkdir ~/Sites
mkdir ~/Hosts
```

> Note that the tilde `~` means "My Home Directory"

> Also note the capital S and H

## apache2.conf

Open Apache's main config file to edit it. Note that you must use `sudo` or you won't be able to save your changes.

```sh
# Edit with Nano
sudo nano /etc/apache2/apach2.conf

# Or, Edit with Vi
sudo vi /etc/apache2/apach2.conf
```

The file is long. You will need to scroll through it to find the parts that need to be changed.

### Sites Directory

Find the section that has `<Directory /var/www/>`. Change it to look like this:

```sh
<Directory /home/[username]/Sites/>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
```

- Change `/var/www` to `/home/[username]/Sites/`
- Change `AllowOverride None` to `AllowOverride All`


## Include Hosts

Find the include rule for "sites-enabled". Comment it out and replace with a new one that points to our "Hosts" folder

```sh
# Find this
IncludeOptional sites-enabled/*.conf

# Make it look like this
# IncludeOptional sites-enabled/*.conf

Include /home/[username]/Hosts/*.conf
```

Restart Apache every time you make Apache.conf changes

```sh
sudo apachectl restart
```

# Starting a new VirtualHost

Make Project Folder in your sites folder. You can do this with _Finder_, or in command-line:

```sh
mkdir ~/Sites/[projectname]
```

Make an index file in your new project (optional)

```sh
echo 'hello world' > ~/Sites/[projectname]/index.html
``` 

Make a VirtualHosts record. If you followed the instructions from above, you may remember that our VirtualHost records are going to be placed in the `~/Hosts` folder. Also, you may have noticed that the way we included the Hosts folder allows us to have separate files for each VirtualHost. How convenient :)

If you don't have any VirtualHost files yet, you'll need to make your first one. Otherwise it might be easier to just copy an existing on and edit it.

The VirtualHost file should look like this:
```sh
<VirtualHost *:80>
    DocumentRoot "/Users/[username]/Sites/[projectname]"
    ServerName "[projectname].com"
</VirtualHost>
```

The `ServerName` is what we'll be typing in the browser to pull up this project. You can type any domain name you want. Typically we use a sub domain to indicate it's a local project like "dev". So imagine you're working on a project "www.foo.com". For your local development you would put "dev.foo.com". In the next steps we'll show you how to edit your "hosts" file to tell your computer that "dev.foo.com" (or whatever you choose) needs to look at our local Apache and not on the real web.

Restart Apache every time you make Virtual Host changes or general Apache.conf changes

```sh
sudo apachectl restart
```

## Hosts file
 
Edit our local computer's "hosts file".

```sh
# Edit with Nano
sudo nano /etc/hosts

# Or, edit with Vi
sudo vi /etc/hosts
```

The file should already have some stuff in it. Don't change that stuff. At the bottom of the file add this:

```sh
127.0.0.1 [projectname].com
```

`127.0.0.1` is your computer's local IP address (it's the same for everyone). After the IP type a `tab` then type the same value that you have in your VirtualHost's ServerName.

Note that editing the `hosts` file does not require an Apache restart.