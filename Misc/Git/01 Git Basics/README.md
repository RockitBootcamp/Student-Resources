# Lesson 1: Git Basics
Identifier   | Objectives
-------------|------------
Git: 1.1     | Demonstrate how to initialize a new (local) git project
             | &bull; `$ git init`
Git: 1.2     | Demonstrate how to clone an existing project from GitHub
             | &bull; `$ git clone [path]`
Git: 1.2     | Explain "staging" for a commit
Git: 1.3     | Demonstrate how to add files to the stage
             | &bull; `$ git add [path]`
Git: 1.3     | Demonstrate how to commit staged files into the repo
             | &bull; `$ git commit -m '[your message]'`
Git: 1.4     | Demonstrate how to `$ git push` and `$ get pull`
Git: 1.5     | Explain `$ git status`

## Resources
- __Video__ [Git Basics Episode 1](http://git-scm.com/video/what-is-version-control)
- __Video__ [Git Basics Episode 2](http://git-scm.com/video/what-is-git)

## Practice

Git is a Version Control System (VCS) that allows you to keep a history of all modifications to a set of files. If a central server is set up (like github), several people can work on a project together in a coordinated way. 
Each time you commit your changes, Git takes a snapshot of what your files look like, it captures the state of your project, and stores a reference to it. If you have files that have not changed, Git simply stores a link to the previously stored file. If you have files that have changed, Git stores a new snapshot. This allows you to control the revisions and go back to any version necessary.

#### First-time Git setup

Install Git
- Ubuntu users: $ apt-get install git
- Mac users: try running git from the terminal, if you don't have it, it will prompt you to install

gitconfig

Set your username and email address, Git uses this each time you commit changes
```
$ git config --global user.name "John Doe"

$ git config --global user.email johndoe@example.com
```
#### Initialize a new git project

All Git commands can only be run on the command line. Make sure you are in the correct project directory and type:
```
$ git init
```
This creates a new subdirectory named .git and will contain your repository files. 

#### Git Clone

Git clone is used to copy an existing Git repository. First copy the URL from github. Go back to your terminal and type:
```
$ git clone https://github.com/PhoenixRockit/15.1.git
```
The URL will be whatever you have copied from github, and this will copy that repository into your local environment.

#### Git Status

To determine what state your files are in, you can use the git status command. 
```
$ git status
```
This will show you any changes to files within the repository including edits, new files, and deleted files that haven't been staged. 

If you have no changes, you will see a message that your branch is up-to-date and there is "nothing to commit, working directory clean."

#### Git Add

Each time you make a change to your files and are ready to upload to github, you will start with adding the changes. You can use the name of the files or, if you have many files you can use the "." to add everything. 
```
$ git add .
```
The above will add or "stage" all local changes (edits, new files, and deleted files) to a "change-set."

#### Git Commit

After adding or "staging" your change-set, you will want to commit those changes. Do this by typing: 
```
$ git commit -m "add message here describing the changes."
```
This commits the given change-set to local history. The message you put is helpful, especially if there is a version you want to go back to prior to a specific change that was committed. It is also helpful when working with a team so the other team members know what was changed. 

#### Git Push

After committing your changes, you will want to push the change-set to the remote repository. 
```
$ git push
```
This will create a new snapshot of your project in github and will allow any team members to have access to those changes. 

#### Git Pull

You will use git pull to pull any changes on the remote repository to your local repository. This will be necessary when other team members have made a change to a project. 
```
$ git pull
```
It is good practice to pull change-sets from the remote repository before you push from your local repository to help minimize merge conflicts. 
