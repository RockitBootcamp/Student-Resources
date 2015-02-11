# Tooling

## Enhance your Page

### [Google Analytics](http://www.google.com/analytics/)
Google Analytics tracks various visitor statistics about your site. It's one of the most commonly used third-party tool on the web with almost every website using it. Google Analytics will provide you a snippet of JavaScript which you paste at the bottom of your HTML. Then you can log into your Google Analytics account to see the data.

### [Google Fonts](https://www.google.com/fonts)
Go to Google Fonts and choose the various fonts you want to use. Then proceed to choose the font weights you'll need. Google will give you the CSS link to include the fonts onto your page.

### [Font Awesome](http://fortawesome.github.io/Font-Awesome/)
Include a CSS link to FontAwesome into your page to use icons on your page. Using an icon requires this syntax:

```html
<i class="fa fa-user"></i>
```

### [Modernizr](http://modernizr.com/)
The newer versions of browser understand HTML5 but if you want your site to work on older versions of Internet Explorer, you'll need this polyfill tool to aid the browser in understanding your markup. Just include the link to Modernizer's JavaScript file before the `<body>` tag for it to work.

### [CSS3 Generator](http://css3generator.com/)
It's difficult remembering all the complex syntax of CSS3, especially with all the browser prefixes. This tool will generate CSS3 for you based on your form selections.

### [Caniuse](http://caniuse.com)
There's tons of new features in CSS3 and HTML5. But not all of them are supported in every browser. When you want to use a modern feature, you might want to check if it's available in the browsers you want to support. It's easier to do a search from Google itself for __"caniuse [whatever tool]"__, rather than going to the Caniuse site directly.

### [Codepen.io](http://codepen.io/)
Codepen.io was co-creaed by CSS-Trick's Chris Coyier. It allows anyone (even without an account) to spin up small HTML/CSS/JS examples for testing ideas. Your "pen" will have a unique URL so you can pass it around. It's a nice way of conveying you're questions or bugs to someone too. 

### [Regular Expression Tester](http://regexr.com/)
It's in the description, it's a regular expression tester. There are many online, this is just one of them.


## Workflow

### [Homebrew for Mac users](http://brew.sh/)
Ubuntu users get to use `apt-get`. But where's OsX's repository of code? You'll need to install Homebrew for that. Once installed you can issue a `brew` command similar to `apt-get`:

```sh
brew install [package name]
```

### [phpMyAdmin](https://github.com/phpmyadmin/phpmyadmin)
Despite the confusing name, this tool doesn't administer PHP, it administers MySQL. It's a PHP project that you download and setup as a Virtual Host. It's basically a PHP project that gives you a User Interface for MySQL. Learn how to install it from [Brad's Video](https://www.youtube.com/watch?v=e80KsIxCrtA&list=UUZi-0WJPUNb_LQocFMJw5dA)

### [NPM](https://www.npmjs.com/)
The _Node Package Manager_ is a software dependency manager - specifically those that are created in JavaScript or Node. NPM is usually used by beginners to bring in other tools such as Bower, and Gulp or Grunt.

### [Bower](http://bower.io/)
Bower is a software dependency manager for front-end components. Almost every major third-party tool created in CSS, JavaScript, and HTML can be downloaded to your project using Bower. Because Bower was written in Node, you can use NPM to bring it into your project. If your using Ubuntu, you may want to see [this post](http://stackoverflow.com/questions/21491996/installing-bower-on-ubuntu)

### [GulpJS](http://gulpjs.com/) and [GruntJS](http://gruntjs.com/)
These are two different tools but they share the same general description. These are called "task managers". They automated repetitive tasks to aid your development workflow. Each is written in Node and typically developers use NPM to bring them into a project. Each uses JavaScript to configure their settings.

### [Use IE Virtual Machines](https://www.modern.ie/en-us)
If you're interested in testing your site in any version of IE, but you don't have Windows, you might want this tool. It allows you to have Virtual Machines of windows (for free) where each machine is specifically developed by Microsoft to only have IE installed.

## Third-Party Tools 

While these tools can be downloaded manually, you might find it more convenient to use a dependency manager such as NPM or Bower to do the job.

### [jQuery](http://jquery.com/)
jQuery is the most widely used third-party JavaScript library on the web. It's main features are advanced DOM manipulation and browser normalization.

### [jQuery UI](http://jqueryui.com/)
jQuery UI is an additional piece of software (that depends on jQuery) which provides a variety of UI components including calendars, tabs, accordions, and much more. This tool can conflict with other CSS libraries such as Bootstrap and Foundation.

### [Handlebars](http://handlebarsjs.com/)
Handlebars is a popular JavaScript templating tool. It is commonly used with jQuery

### [Normalize.css](http://necolas.github.io/normalize.css/)
Normalize.css was created to be an alternative to the "CSS Reset" paradigm that developers have been using for years. It's very well thought out and is becoming very standard in most front-end developers CSS workflow. Be sure to include it a the top of all your CSS. It can be downloaded with Bower.

### [ReptileForms](https://github.com/bradwestfall/ReptileForms)
Write minimal HTML for a form and ReptileForms will re-factor it into something much better with structural CSS, Validation, and AJAX-style HTTP requests by default. It has a dependency on jQuery.

### [Sass](http://sass-lang.com/) and [Less](http://lesscss.org/)
Theses are preprocessors that allow you to write in their advanced CSS syntax, then your file is converted by the preprocessor software into actual CSS. Watch this "[What is a CSS preprocessor](https://www.youtube.com/watch?v=PJkWbezpHpE#t=254)" video for more info. Generally these two tools are considered alternatives and are not meant to be used together.

### [Bootstrap CSS](http://getbootstrap.com/) and [Foundation CSS](http://foundation.zurb.com/)
These are CSS libraries that provide a head start on creating complex CSS components. In some cases, they also provide some JavaScript to facilitate the behavior of their components. Generally these two tools are considered alternatives and are not meant to be used together. Bootstrap has a dependency on jQuery

## Misc

### [Balsamiq](http://balsamiq.com/)
This tool is one of the few that actually costs money. But it's worth it if you're interested in doing professional UI development. Balsamiq is a wireframing tool that allows easy drap-n-drop functionality. It was specifically creatd to wireframe web applications and mobile apps.

### [Phone Gap](http://phonegap.com/about/)
This tool allows you to create mobile apps for Android and iOS using HTML, CSS, and JavaScript.