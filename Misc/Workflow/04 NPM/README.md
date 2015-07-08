# Lesson 4: npm

Identifier   | Objectives
-------------|------------
WF: 4.1      | Install Node
WF: 4.2      | Use `npm init` to create a `package.json` file
WF: 4.3      | Explain the role of `package.json`
WF: 4.4      | Use `npm install --save <package-name>` to install a package
WF: 4.5      | Explain the purpose of adding `node_modules` to `.gitignore`
WF: 4.6      | Demonstrate how to install and update packages listed in "package.json"
             | &bull; `npm install`
             | &bull; `npm update`

## Resources

- [Web Developer Workflow - Bower and npm](https://www.youtube.com/watch?v=cQV-v7RJRnw&list=UUZi-0WJPUNb_LQocFMJw5dA)
- [npm init][npm-init]
- [npm install][npm-install]
- [npm update][npm-update]

## Installing Node.js and npm

**First check if you have node installed already** by typing the following command

```sh
node -v
```

You should see a version number printed, otherwise you may see an error.

If you do not have node installed, continue with the installation instructions for your operating system below.

### OS X

> **NOTE:** if you already installed node through some other means (such as by downloading the installer), you may experience issues installing via Homebrew.

If you don't already have Homebrew installed, install it now by following these instructions:

1. Go to [brew.sh][brewsh]
1. Open terminal
1. Paste in the install command from [brew.sh][brewsh] in terminal
1. Wait for Homebrew to finish installing
1. Run `brew doctor` to make sure brew was installed successfully

After Homebrew is installed, install node using the `brew` command:

1. Run the command `brew install node` and wait for node to install (npm will be installed along with it)

### Linux (Ubuntu)

1. Update first with `sudo apt-get update`
1. Then run `sudo apt-get install nodejs npm`

## Generating a new package manifest

A package manifest is a file that describes your package (i.e. your project) and is stored in the root of your project as `package.json`.

When working on a project that will have dependencies through npm, you should first initialize the project. Make sure you're in the root (highest level) of your project. For instance, if your project's root is `/Users/you/Projects/TwitterV1`, cd to that directory in your terminal.

To initialize your project, type `npm init`.

You'll be asked a few questions about your project. If you're not sure what to input, just hit *enter*.

Once that's done it should have generated the `package.json` file in this directory. Use `ls` to check that.

> **NOTE:** If this is a private project (i.e. you don't want it published to npm's public repository, which is probably true for all your class projects), immediately edit the `package.json` and add `"private": true`

## What is the purpose of the manifest (package.json)?

The manifest describes your project, such as the name of the project, description, author information, and so on.

It's also responsible for keeping track of which modules your project depends on. Dependencies such as jQuery, lodash, handlebars, etc, will be listed in the manifest so that if your project is published or shared with another developer, they can install these packages automatically, without having to also send them a copy of each library you use. It can also track "dev-dependencies", in other words, dependencies that only need to be installed for the developer working on the project and won't be installed for a production deployment, for instance.

When you install a package, use the flag `--save` or `--save-dev` to store the name and version of the module in the "dependencies" or "dev-dependencies" section of `package.json` respectively.

## Installing packages

The benefit of using npm is that you don't have to manually manage your libraries (jquery, etc) or manually update them when you need a newer version. In order to take advantage of this, packages should be installed using npm, rather than downloading a copy and saving it with your other project files. This also means that if you distribute your project on npm and/or GitHub, you're not needlessly duplicating copies of various libraries.

To install packages, use `npm install`

```
npm install <package-name>`
```

For instance, to install jQuery as a dependency for your project:

```
npm install jquery
```

If you wish to save this to your manifest, add the `--save` flag:

```
npm install --save jquery
```

## The package directory (node_modules)

All packages installed by npm will get downloaded to a subdirectory named `node_modules` in your project root.

This package directory should **never** be committed to Git, because that would needlessly duplicate every library.

To prevent the `node_modules` directory from being accidentally committed, add it to a special file called `.gitignore`. This file tells Git to ignore any files or directories in your project that have the same name.

The easiest way to do this is with the following command:

```
echo "node_modules" >> .gitignore
```

## Installing packages from the manifest

Sometimes you may be working on a copy of someone else's project, or you may have needed to remove the `node_modules` directory for some reason. Either way, you'll need the dependencies listed in the manifest installed before you can work on the project. To do so, use the following command:

```
npm install
```

By not specifying any package name, you're telling npm "install everything listed in the manifest". So it will read the manifest and install any/all dependencies it finds. Once this is complete, you can begin development on the project.

## Updating packages to a newer version

The following command will update all the packages in the manifest to their latest version allowed by the version identifier. If you want to also update the manifest itself with the new version numbers, add `--save` to the command.

```
npm update
```


[brewsh]: https://brew.sh
[npm-init]: https://docs.npmjs.com/cli/init
[npm-install]: https://docs.npmjs.com/cli/install
[npm-update]: https://docs.npmjs.com/cli/update
