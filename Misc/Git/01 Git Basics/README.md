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

### First-time Git setup

Install Git
- Ubuntu users: `$ apt-get install git`
- Mac users: try running git from the terminal, if you don't have it, it will prompt you to install

You'll need to tell Git about who you are. If you don't do this step, Git will bug you all the time to do it.

Type these two commands into bash with your information:
```sh
$ git config --global user.name "John Doe"
$ git config --global user.email johndoe@example.com
```

### Initialize a project

`cd` to one of your projects in your `Sites` folder. The project should not be a git repo already. Make sure you are actually inside the project folder (at the web root). Start your new Git project with:
```sh
$ git init
```
You'll get a small message that states your Git project has been initiated. Running an `ls -la` will show you a new subdirectory named `.git`. This hidden folder contains all the information about your repository. Don't worry about it's contents at this point, but also don't delete it unless you intend to "un-version control" your project.

### Git Clone

Cloning is a means of copying an existing Git repository from online (probably at GitHub). Cloning is in contrast to doing `git init`. Where `git init` starts a new repository on your computer (that you can later push to GitHub), `git clone` takes an established repo and makes a copy of it on your computer. You use either `init` OR `clone` to get started, but not both.

To clone a project, `cd` to your `Sites` folder type `git clone` followed by the path to the online repository. Notice the `.git` extention:

```sh
$ git clone https://github.com/PhoenixRockit/15.1.git
```

Note that this will make a `15.1` folder wherever you were when you did the clone command. So if you wanted a folder called `15.1` in your `Sites`, the previous command is how you would do it.

Lets say you made a folder already called 15.1 and your in that folder already. If you run that previous command, you'll end up creating another `15.1` within your `15.1` folder. To prevent this, we can can add a `.` dot at the end of our clone command:

```sh
$ git clone https://github.com/PhoenixRockit/15.1.git .
```

Note the space before the dot. This dot says "We don't want to create a new 15.1 folder here, we want to clone all the contents of that repo right here".

### Git Status

To determine what state your files are in, you can use the git status command. 

```
$ git status
```

This will show you any changes to files within the repository including edits, new files, and deleted files that haven't been staged. 

If you have no changes, you will see a message that your branch is up-to-date and there is "nothing to commit, working directory clean."

### Git Diff

To see what has changed, you can run the following command:
```
$ git diff
```

#### Git Add

Each time you make a change, add, or delete files in your local repo, you'll need to commit the changes to the repo. The first stage in the commit process is to `git add` the files to the "stage". Only staged files can be committed. Files can be added to the stage on an individual basis as follows:

```sh
$ git add filename
```

Or, add all the files that are changed:

```sh
$ git add .
```

### Git Commit

After adding or "staging" your change-set, you will want to commit those changes. Do this by typing: 

```
$ git commit -m "add message here describing the changes."
```

This commits the given change-set to local history. The message you put is helpful, especially if there is a version you want to go back to prior to a specific change that was committed. It is also helpful when working with a team so the other team members know what was changed. 

### Git Push

After committing your changes, you may want to push the change-set to the remote repository. Remote repositories have names and in the case of GitHub, the default name is "origin". Pusing changes to a remote cosists of using `git push` followed by the origin name, followed by the branch name (usually "master") 

```sh
$ git push orignin master
```

It is possible to have multiple remotes (with different names) so the command above is very specific about where to push. But in cases where you know you only have one remote, you can simply do:

```sh
$ git push
```

This will create a new snapshot of your project in github and will allow any team members to have access to those changes. 

### Git Pull

The opposite of pusing code (from your computer to a remote) is to "pull" code (from the remote to your computer). You will use `git pull origin master` (or `get pull` if you only have one remote). This will be necessary when other team members have made a change to a project. 

To collaborate with other team members, you'll be using `git push` to move code to remotes, then your team can do `git pull` to get your code. Likewise they can push their code up and you can pull it to your computer
