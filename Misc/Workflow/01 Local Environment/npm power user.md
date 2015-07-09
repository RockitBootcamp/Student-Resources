# Workflow for npm power-users

If you're already pretty familiar with npm, you may be ready to take the next step to being a power-user. This guide will give you some tips for npm packages you can install to make the most of your development environment.

## [http-server][http-server]

![](https://github.com/nodeapps/http-server/raw/master/screenshots/public.png)

`http-server` is a great dev tool for serving local directories as a web server. In contrast to the `php -S` command, this server is capable of serving a directory listing if used in a directory that doesn't have an `index.html` file. This makes it great for serving your `Lessons` directory, which will allow you to access each subdirectory (lesson) from a single server.

To use [http-server][http-server], install it globally with npm:

```sh
npm install -g http-server
```

Then `cd` to any directory you want to serve up and run the `http-server` command:

```sh
cd Projects/Lessons
http-server
```

## [hotel][hotel]

![](https://rawgit.com/typicode/hotel/master/screen.gif)

`hotel` is a tool for managing your various local project servers. For each individual project (i.e. milestone projects, personal projects, etc), it may be easier to run a separate server for each, so you can start/stop the server as needed. `hotel` works great in conjunction with [http-server][http-server].

`hotel` will run a special page on http://localhost:2000 where you can start and stop your project servers as needed.

To use [hotel][hotel], install it globally with npm:

```sh
npm install -g hotel
```

Then start the service (run this command any time you boot/reboot to start it back up):

```sh
hotel start
```

To add a new project to your hotel, `cd` into that project's root directory, and run (just once!):

```sh
hotel add 'http-server -p $PORT'
```

Now you can start/stop that server from the hotel UI (http://localhost:2000) whenever you need it. See [hotel's documentation][hotel] for more options.

## [json-server][json-server]

`json-server` is a tool for creating a JSON-based RESTful API in seconds, all you need is a JSON file! This is great for [rapid prototyping](http://www.smashingmagazine.com/2010/06/16/design-better-faster-with-rapid-prototyping/) or for when you want to focus on front-end development while another team member is still working on the real back-end API. We use this in the Twitter V2 project (and possibly others in the future) so we can focus on learning how to interact with APIs (using AJAX) without having to first build a full back-end service.

To use [json-server][json-server], install it globally with npm:

```sh
npm install -g json-server
```

Then create a `db.json` file in your project root and give it some starting data, such as

```js
{
  "superheroes": [
    {
      id: 1,
      name: "Batman"
    }
  ],
  "villains": [
    {
      id: 1,
      name: 'Catwoman'
    }
  ]
}
```

Then start your server with:

```sh
json-server db.json
```

Now you can access your API on http://localhost:3000 (port 3000 is the default). Any new records will be persisted (saved) to the `db.json` file automatically, as well as any changes to existing records. You can even create new "tables" (top-level properties) by simply posting new data to a route that hasn't been created. Check the [json-server documentation][json-server] to see the various ways you can interact with your instant JSON API.

`json-server` also works great with [hotel][hotel]:

```sh
hotel add 'json-server db.json -p $PORT'
```

## [ngrok][ngrok]

`ngrok` allows you to share a local server temporarily on the public web. To put it simply, it creates a public (randomized) web URL which points to your localhost:port where your local server is running. Then anyone you send the URL to can access your local server for as long as you keep `ngrok` running. This is great for team collaboration. You can use it to share a web server (e.g. your project) or a `json-server`, for instance.

To use [ngrok][ngrok], install it globally with npm:

```sh
npm install -g ngrok
```

Then run the `ngrok` command with the port number of the server you want to expose to the web:

```
ngrok 9000
```

`ngrok` with tell you what the public URL is so you can share it. You can also access http://localhost:4040 to see a log of requests going through `ngrok`. Check the [ngrok documentation][ngrok] and also [ngrok's official page](https://ngrok.com/) for more details.

## [n][n]

`n` is a *node version manager*. Sometimes a project may require using a specific version of node than what was installed by default. `n` allows you to easily and quickly switch between different node versions.

To use [n][n], install it globally with npm:

```sh
npm install -g n
```

Then you can switch node versions like so:

```sh
n 0.12
```

Be sure to read the [n documentation][n] to see more examples.

## [Yeoman][yo]

![](http://yeoman.io/assets/img/yeoman-02.eed5.png)

`yo` ([Yeoman][yeoman]) is a framework for scaffolding new projects. Yeoman is the orchestrator and you install any of literally hundreds of different scaffolds (known as generators) available from the Yeoman community. Then you scaffold a new project by running `yo <scaffold-name>`. Yeoman was created by some of the biggest names in the industry, including Sindre Sorhus, Addy Osmani, Paul Irish, and many more (so you know it's good).

To use [yo][yo], install it globally with npm:

```sh
npm install -g yo
```

You may also want to find a [scaffold generator](http://yeoman.io/generators/) that's right for you before you get started. Once you find the one you want, install it globally as well:

```sh
npm install -g <generator>
```

Once you have the generator you need and `yo` installed, scaffold a new project by going to a new (empty) project directory and using the `yo` command like so (the [gulp-webapp](https://github.com/yeoman/generator-gulp-webapp) generator is used for this example):

```sh
yo gulp-webapp
```

Yeoman will ask you some questions to get you started. Once you're done, you should have everything you need to start a new project. Be sure to read the [Yeoman documentation][yeoman]!

## Upgrade npm!

Want to get the most out of npm? The latest version of npm is not the version that's installed by default.

To use the latest npm, run the following command:

```sh
npm install -g npm@latest
```

> Notice that npm is installing itself! How meta!


[http-server]: https://www.npmjs.com/package/http-server
[hotel]: https://www.npmjs.com/package/hotel
[json-server]: https://www.npmjs.com/package/json-server
[ngrok]: https://www.npmjs.com/package/ngrok
[n]: https://www.npmjs.com/package/n
[yo]: https://www.npmjs.com/package/yo
[yeoman]: http://yeoman.io/
