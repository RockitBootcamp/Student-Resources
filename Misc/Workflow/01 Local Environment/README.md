# Lesson 1: Local Environment

Identifier   | Objectives
-------------|------------
WF: 1.1      | Explain Apache's role in HTTP requests
WF: 1.2      | Demonstrate the creation of a VirtualHost file
WF: 1.3      | Explain the role of the hosts file at `/etc/hosts`
WF: 1.4      | Demonstrate restarting apache
             | &bull; `$ sudo apachectl restart` for OS X
             | &bull; `$ sudo service apache2 reload` for Linux

## Resources
- __Video__ [Apache and VirtualHost setup](http://youtu.be/5hkyWkxFVLs)
- [OS X Yosemite](https://gist.github.com/bradwestfall/c3e44d5c1e4a74ad852e)
- [OS X Mavericks](https://gist.github.com/bradwestfall/df915300c0d5022e5cb2)
- [Ubuntu 14.04](Ubuntu-14.04 Apache and VHosts.md)

## Steps to make a Virtual Host

1) Create a new VirtualHost file. These are located at `/Users/[username]/Hosts`. It's easiest to go here in Finder (on Mac) or similar window program and copy one that already exists to make a new one. The name of the file should be your project name then with `.conf` as the extension.

The file should resemble:

```
<VirtualHost *:80>
    DocumentRoot "/Users/[username]/Sites/[projectname]"
    ServerName "mac.[projectname].com"
</VirtualHost>
```

> Note that the value for `ServerName` resembles what you'll be typing in the URL. The `DocumentRoot` value is where you want Apache to go when the URL is typed.

2) Restart Apache. Editing or adding a VirtualHost file will require an Apache restart
 - On Mac, type: `sudo apachectl restart`
 - On Ubuntu, type: `sudo service apache2 reload`

3) Edit your "Hosts" file, not to be confused with Virutal Hosts. Edit the hosts file at `/etc/hosts`. Add a DNS record to point our fake domain name to the local IP address which is always `127.0.0.1`

```
127.0.0.1    mac.[projectname].com
```

> Editing this file does not require an Apache restart

4) Last but not least, make sure you actually make a folder in your sites folder: `/Users/[username]/Sites/[projectname]`, probably with an index file or something to look at in the browser.



