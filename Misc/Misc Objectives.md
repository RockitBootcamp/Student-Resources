# Unix Objectives

## Unix Basics
Identifier   | Objectives
-------------|------------
Unix: 1.1    | Demonstrate how to navigate the filesystem in Unix using:
             | &bull; `$ cd`
             | &bull; `$ ls [options]` 
             | &bull; `$ clear`
             | &bull; `$ pwd`
             | &bull; `.`
             | &bull; `..`
             | &bull; `*`
Unix: 1.2    | Demonstrate how to create new folders and files using:
             | &bull; `$ touch [filename]`
             | &bull; `$ mkdir [dirname]`
             | &bull; `$ nano [filename]`
             | &bull; `$ vim [filename]`
             | &bull; `$ cat [filename]`
Unix: 1.3    | Demonstrate how to remove folders and files using:
             | &bull; `$ rm [filename]`
             | &bull; `$ rm -rf [direname]`
Unix: 1.4    | Demonstrate how to copy files/folders using:
             | &bull; `$ cp [from] [to]`
Unix: 1.5    | Demonstrate how to move/rename files/folders using:
             | &bull; `$ mv [from] [to]`
Unix: 1.6    | Explain meaning and usage of the sudo command
             | &bull; Including the `sudo !!` shortcut

## SSH Keys
Identifier   | Objectives
-------------|------------
Unix: 2.1    | Demonstrate creating SSH Keys
Unix: 2.2    | Explain the difference between public and private keys





# Git Objectives

## Git Basics
Identifier   | Objectives
-------------|------------
Git: 1.1     | Demonstrate how to `$ git clone`
Git: 1.1     | Demonstrate how to `$ git init`
Git: 1.2     | Demonstrate how to `$ git add`
             | &bull; Explain "staging" for a commit
Git: 1.3     | Demonstrate how to `$ git commit`
Git: 1.4     | Demonstrate how to `$ git push` and `$ get pull`
Git: 1.5     | Explain `$ git status`

## Git Projects
Identifier   | Objectives
-------------|------------
Git: 2.1     | Demonstrate initializing a git project
             | &bull; `$ git init`
Git: 2.2     | Demonstrate setting up remotes at GitHub
Git: 2.3     | Demonstrate resolution of merge conflicts
Git: 2.4     | Demonstrate removing files from a local git repo
             | &bull; `$ git add -A .`
             | &bull; `$ git rm [filename]`

## Git Branching
Identifier   | Objectives
-------------|------------
Git: 3.1     | Explain Git Branches
Git: 3.1     | Demonstrate creating a new branch
Git: 3.1     | Demonstrate switching between branches
             | &bull; Must `stash` or `commit` changes before switching
Git: 3.1     | Demonstrate branch merging







# Workflow

## Local Environment
Identifier   | Objectives
-------------|------------
WF: 1.1      | Explain Apache's role in HTTP requests
WF: 1.2      | Demonstrate the creation of a VirtualHost file
WF: 1.3      | Explain the role of the hosts file at `/etc/hosts`
WF: 1.4      | Demonstrate restarting apache
             | &bull; `$ sudo apachectl restart` for OsX
             | &bull; `$ sudo service apache2 reload` for Linux

## Chrome DevTools
Identifier   | Objectives
-------------|------------
WF: 2.1      | Open Chrome DevTools
             | &bull; `COMMAND+OPTION+I` on OsX
             | &bull; `F12` on Linux
WF: 2.2      | DOM inspect elements using
             | &bull; Dropdown arrows
             | &bull; Magnified Glass
WF: 2.3      | Adjust element styles
             | &bull; Color Wheel
             | &bull; Color eye-drop tool
             | &bull; View computed styles
WF: 2.4      | Explain Console Tab
WF: 2.5      | Explain Network Tab
WF: 2.6      | Disable cache (while DevTools is open)

## Sublime Text
Identifier   | Objectives
-------------|------------
WF: 3.1      | todo

## Bower and NPM
Identifier   | Objectives
-------------|------------
WF: 4.1      | todo

## Gulp
Identifier   | Objectives
-------------|------------
WF: 5.1      | todo

## Sass
Identifier   | Objectives
-------------|------------
WF: 6.1      | todo






# Web

## Basic HTTP Concepts
Identifier   | Objectives
-------------|------------
Web: 1.1     | Explain `POST` vs `GET` 
Web: 1.2     | Explain Common HTTP Status Codes
             | &bull; 200: Ok
             | &bull; 301: Redirect
             | &bull; 404: Page not found
             | &bull; 500: Internal Server Error

## Font-end Performance Basics
Identifier   | Objectives
-------------|------------
Web: 3.1     | Explain caching
Web: 3.2     | Explain file concatenation
Web: 3.3     | Explain file minification
Web: 3.4     | Explain image sprites
Web: 3.5     | Explain gzip compression

## CDNs
Identifier   | Objectives
-------------|------------
Web: 4.1     | Explain the purpose of a CDN
Web: 4.2     | Use common CDNs
             | &bull; jQuery
             | &bull; FontAwesome
             | &bull; Google Fonts

## Regular Expressions
Identifier   | Objectives
-------------|------------
Web: 5.1     | Demonstrate Regular Expression Syntax
Web: 5.2     | Demonstrate Metacharacters
             | &bull; `^` Start of string
             | &bull; `$` End of string
             | &bull; `.` Any character 
             | &bull; `*` 0 or more of previous expression
             | &bull; `+` 1 or more of previous expression
             | &bull; `?` 0 or 1 of previous expression
Web: 5.3     | Demonstrate character sets
             | &bull; `/[A-Z]/`
             | &bull; `/[a-z]/`
             | &bull; `/[0-9]/`
Web: 5.4     | Demonstrate character classes
             | &bull; `\w` Word Character
             | &bull; `\s` Whitespace Character    
             | &bull; `\d` Digit Character   

## Servers
Identifier   | Objectives
-------------|------------
Web: 6.1     | Explain Shared Servers
Web: 6.2     | Explain Cloud Servers
             | &bull; Amazon Web Services (AWS)
             | &bull; Rackspace
Web: 6.3     | Explain Explain Cloud Services
             | &bull; File Services such as AWS S3
             | &bull; Database Services