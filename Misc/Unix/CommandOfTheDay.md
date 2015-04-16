# Unix 'Command' of the Day

## Saving bash settings
Bash settings can be set on the command line at any time, but they will not persist past the current session. To make your preferences permanent, they should be done in the bash startup file. This file has different names on different operating systems:
- Linux: ~/.bashrc
- OSX: ~/.bash_profile
 
After the startup file is updated all new terminal sessions will have your new preferences, but the '.' command must be run to make the changes active in the current terminal session. The '.' command is run as:
```bash
# on Linux
$ . ~/.bashrc
# on OSX
$ . ~/.bash_profile
```

## alias
The 'alias' command allows you to create shortcuts to commonly used bash commands. For example, the following alias command would create a shortcut, 'ar', for the much longer command 'sudo apachectl restart':
```bash
$ alias ar='sudo apachectl restart'
```
You will probably want to save useful alias commands in your bash startup file. Below are some common useful aliases:
```bash
alias ls='ls -G'          # colorize output
alias ll='ls -al'         # show all files with long output
alias grep='grep --color' # colorize output
alias sites='cd ~/Sites'  # change to the Sites directory
```

## grep #1
The 'grep' command allows you to search through files or through the standard output of any other unix commands. To search for the word 'class' in the file MyClass.php:
```bash
$ grep class MyClass.php
```
The -i flag will do a case-insensitive search. So, to find 'class' or 'Class':
```bash
$ grep -i class MyClass.php
# or to search in all php files
$ grep -i class *.php
```

The -r flag will do a recursive search in all subdirectories:
```bash
$ grep -r class *
```



