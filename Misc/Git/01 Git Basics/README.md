# Lesson 1: Git Basics
Identifier   | Objectives
-------------|------------
Git: 1.1     | Demonstrate how to initialize a new (local) git project
             | &bull; `git init`
Git: 1.2     | Demonstrate how to clone an existing project from GitHub
             | &bull; `git clone`
Git: 1.3     | Explain "staging" for a commit
Git: 1.4     | Demonstrate how to add files to the stage
             | &bull; `git add`
Git: 1.5     | Demonstrate how to commit staged files into the repo
             | &bull; `git commit`
Git: 1.6     | Demonstrate how to `git push` and `get pull`
Git: 1.7     | Explain `git status`
Git: 1.8     | Demonstrate removing files from a local git repo
             | &bull; `git rm`
             | &bull; `git add -A`

## Resources
- __Video__ [Git Basics Episode 1](http://git-scm.com/video/what-is-version-control)
- __Video__ [Git Basics Episode 2](http://git-scm.com/video/what-is-git)

## Presentation

- [View Presentation](https://docs.google.com/presentation/d/13JBF6q2nvoivKQ0UdOGUxw1rqQASUFsLPxiH_pSDOTk/edit)

## Practice

Git is a Version Control System (VCS) that allows you to keep a history of all modifications to the files of a project. Developers can also collaborate and share code among each other when a centralized Git server is established. GitHub is a website that provides this Git server as a service.

Each time you commit your changes, Git takes a snapshot of what your files look like, it captures the state of your project, and stores a reference to it. If you have files that have not changed, Git simply stores a link to the previously stored file. If you have files that have changed, Git stores a new snapshot. This allows you to control the revisions and go back to any version necessary.

### First-time Git setup

Install Git
- Ubuntu users: `apt-get install git`
- Mac users: try running `git --version` from the terminal, if you don't have git, the terminal will say so.

Tell Git about who you are so it can attribute your changes to your name. If you don't do this step, git will bug you. Be sure to use your email associated with GitHub

```sh
git config --global user.name "John Doe"
git config --global user.email "johndoe@example.com"
```

Additionaly you will want to configure git to use your preferred text editor. This line will setup `nano` to be the default

```sh
git config --global core.editor nano
```

### Initialize a project

To use git, navigate in terminal to a folder that you want to turn into a git repository. The folder should not be a git repo already. Make sure you are actually inside the project folder (at the web root) where you want to start a git repo. Start your new Git project with:

```sh
git init
```

You'll get a small message that states your Git project has been initiated. Running an `ls -a` will show you a new subdirectory named `.git`. This hidden folder contains all the information about your repository. Don't worry about it's contents at this point, but also don't delete it unless you intend to "un-version control" your project.

### Git Clone

Cloning is how we copy an existing Git repository from a remote location (probably GitHub) to our local machine. Cloning does not need to happen if you started a new git project with `git init`. While `git init` is how we create brand new repositories, `git clone` is how we "copy" existing repositories.

To clone a project, `cd` to your `Sites` folder type `git clone` followed by the path to the remote repository.

```sh
git clone https://github.com/RockitBootcamp/Student-Resources.git
```

If we do this command from our `Sites` folder, it will create a folder called "Student-Resources" (by default the folder name will match the repository name).

### Git Status

To determine what state your files are in, you can use the git status command. 

```sh
git status
```

This will show you any changes to files within the repository including edits, new files, and deleted files that haven't been staged. 

If you have no changes, you will see a message that your branch is up-to-date and there is "nothing to commit, working directory clean."

### Git Diff

To see what has changed, you can run the following command:

```sh
git diff
```

#### Git Add

Each time you make a change, add, or delete files in your local repo, you'll need to commit the changes to the repo. The first stage in the commit process is to `git add` the files to the "stage". Only staged files can be committed. Files can be added to the stage on an individual basis as follows:

```sh
git add <filename/directory>
```

If you give the name of a directory, *all* files therein will be staged for commit, including untracked files.

### Git Commit

After adding or "staging" your change-set, you will want to commit those changes. Do this by typing: 

```sh
git commit
```

This opens your default editor and allows you to enter a commit message, then commits the given change-set to local history. The message you put is helpful, especially if there is a version you want to go back to prior to a specific change that was committed. It is also helpful when working with a team so the other team members know what was changed.

> The default editor can be changed with the `git config --global core.editor <command>` configuration.

### Git Push

After committing your changes, you may want to push the change-set to the remote repository. Remote repositories have names and in the case of GitHub, the default name is "origin". Pushing changes to a remote consists of using `git push` followed by the origin name, followed by the branch name (usually "master") 

```sh
git push origin master
```

It is possible to have multiple remotes (with different names) so the command above is very specific about where to push. But in cases where you know you only have one remote, you can simply do:

```sh
git push
```

This will update the remote server (GitHub in this case) to your latest commit and will allow any team members to pull those changes.

### Git Pull

The opposite of pushing code (you → remote) is to "pull" code (you ← remote). You will use `git pull origin master` (or simply `get pull` if you only have one remote). This will be necessary when other team members have made a change to a project. 

To collaborate with other team members, you'll be using `git push` to update remotes, then your team can do `git pull` to update their local copy. Likewise they can push their code up and you can pull it to your computer.
