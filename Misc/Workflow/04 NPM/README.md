# Lesson 4: npm

Identifier   | Objectives
-------------|------------
WF: 4.1      | Install Node
WF: 4.2      | Use `npm init` to create a `package.json` file
WF: 4.3      | Explain the role of `package.json`
WF: 4.4      | Use `npm install --save [package name]` to install a package
WF: 4.5      | Explain the purpose of adding `node_modules` to `.gitignore`
WF: 4.6      | Demonstrate how to install and update packages listed in "package.json"
             | &bull; `npm install`
             | &bull; `npm update`

## Resources
- [Web Developer Workflow - Bower and npm](https://www.youtube.com/watch?v=cQV-v7RJRnw&list=UUZi-0WJPUNb_LQocFMJw5dA)

## Installing Node.js and npm

**First check if you have node installed already**, type the following command

```sh
node -v
```

You should see a version number printed, otherwise you may see an error.

If you do not have node installed, continue with the installation instructions for your operating system below.

### OS X

> **NOTE:** if you already installed node through some other means (such as by downloading the installer), you may have issues installing via Homebrew.

1. Go to [brew.sh][brewsh]
1. Open terminal
1. Paste in the install command from [brew.sh][brewsh] in terminal
1. Wait for Homebrew to finish installing
1. Run the command `brew install node` and wait for node to install (npm will be installed along with it)

### Linux (Ubuntu)

1. Run `sudo apt-get install nodejs npm` from terminal

[brewsh]: https://brew.sh
