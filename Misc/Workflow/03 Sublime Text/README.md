# Lesson 3: Sublime Text

Identifier   | Objectives
-------------|------------
WF: 3.1      | Install Sublime Text 
WF: 3.2      | Explain the difference between Default settings and User settings
WF: 3.3      | Install Package Control
WF: 3.4      | Demonstrate how to create a new project
WF: 3.5      | Use basic keyboard shortcuts
             | &bull; Command Palette `CMD + Shift + P` (OS X)
             | &bull; Switch Projects `CMD + CTRL + P` (OS X)
             | &bull; Switch Files `CMD + P` (OS X)
WF: 3.6      | Demonstrate how to set the syntax of the current tab

## Resources
- See our [Sublime Text Guide](Guide.md)

## Perfect Workflow in Sublime

For a really great video series on how to use Sublime Text, watch [Perfect Workflow in Sublime](http://code.tutsplus.com/articles/perfect-workflow-in-sublime-text-free-course--net-27293). You'll need to sign up to view the series. Even thought the tutorial was written for version 2, most the lessons are still valid for version 3.

### Basics
- [Installing and Base Settings](https://code.tutsplus.com/courses/perfect-workflow-in-sublime-text-2/lessons/installation-and-base-settings)
- [The Command Palette](https://code.tutsplus.com/courses/perfect-workflow-in-sublime-text-2/lessons/the-command-palette)
- [Instant File Changing](https://code.tutsplus.com/courses/perfect-workflow-in-sublime-text-2/lessons/instant-file-changing)
- [All About Projects](https://code.tutsplus.com/courses/perfect-workflow-in-sublime-text-2/lessons/all-about-projects)
- [Package Control](https://code.tutsplus.com/courses/perfect-workflow-in-sublime-text-2/lessons/package-control)
- [Multiple Cursors and Incremental Search](https://code.tutsplus.com/courses/perfect-workflow-in-sublime-text-2/lessons/multiple-cursors-and-incremental-search)


## Package Control

Install Package Control: https://packagecontrol.io/installation

Nice packages to know about

- AdvancedNewFile
- Emmit
- Sass
- Snippet Maker


## Keyboard Shortcut Guides

- [Sublime OS X](http://sublime-text-unofficial-documentation.readthedocs.org/en/latest/reference/keyboard_shortcuts_osx.html)
- [Sublime Linux](http://sublime-text-unofficial-documentation.readthedocs.org/en/latest/reference/keyboard_shortcuts_win.html)
- [Sublime Linux (alternative)](https://gist.github.com/Belgand/2856947)

## Settings worth considering

You may want to install the following settings depending on your personal preferences. Note that this is not meant to be a full replacement for your existing settings, but rather a list of things for you to pick and choose from. Remember that setting changes should only be made to your User Settings and not your Default Settings.

```json
{
    "auto_complete": false,
    "bold_folder_labels": true,
    "enable_tab_scrolling": false,
    "scroll_past_end": true,
    "word_wrap": false
}
```

### "autocomplete": false
Disable Sublime's suggestion menu that shows when typing code.

### "bold_folder_labels": true 
By default, folders in the sidebar are not bold and can be hard to distinguish from files. This setting makes them bold.

### "enable_tab_scrolling": false
In Sublime Text 3 only, having lots of tabs open will create a scrolling effect for tabs. This is the setting for turning that off.

### "scroll_past_end": true
Sometimes it can be difficult to work on a file when you're typing at the bottom of the file. The way scrollbars work doesn't allow you to move the bottom of the file to the middle of the screen. This setting will change that.

### "word_wrap": false
When writing code, sometimes there are long lines that you would prefer to not have broken down onto a new line. For some this increases legibility.