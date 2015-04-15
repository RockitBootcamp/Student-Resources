# Unix 'Command' of the Day

## Saving bash settings
Bash settings can be set on the command line at any time, but they will not persist past the current session. To make your preferences permanent, they should be done in the bash startup file. This file has different names on different operating systems:
- Linux: ~/.bashrc
- OSX: ~/.bash_profile
 
After the startup file is updated all new terminal sessions will have your new preferences, but the '.' command must be run to make the changes active in the current terminal session. The '.' command is run as:
```bash
$ . ~/.bashrc
```

## alias
