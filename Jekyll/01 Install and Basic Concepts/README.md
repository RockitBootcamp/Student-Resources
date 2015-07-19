# Lesson 1: Install and Basic Concepts

Identifier   | Objectives
-------------|------------
Jekyll: 1.1  | Install Jekyll
             | &bull; Install Ruby First
             | &bull; `$ gem install jekyll`
Jekyll: 1.2  | Install Jekyll
Jekyll: 1.3  | Create blog posts


## Resources

- [Jekyll Installation Docs](http://jekyllrb.com/docs/installation/)
- [Jekyll Configuration Docs](http://jekyllrb.com/docs/configuration/)

## Pre Study

### Installation

```bash
gem install jekyll
jekyll new myblog
cd myblog
jekyll serve
```

### Directory Structure

`_config.yml` Contains site settings, such as the title, description, URL

`_drafts` Drafts in the format `title.md`

`_includes` Contains partials, such that `{% include example.ext %}` includes `_includes/example.ext`

`_layouts` Contains templates

`_posts` In the format `YEAR-MONTH-DAY-title.md`

`_data` Formatted site data such that data in `example.yml` is accessable as `site.data.example`

`_site` This is the location where the generated site is placed

`.jekyll-metadata` Used by Jekyll to keep track of what files have been modified since the last build

`index.html` and any file with a Front Matter section will be processed by Jekyll

All other files will be copied verbatim into `_site` when the site is generated

### Front Matter

```yaml
---
layout: post
title: An Example Post
---
```

`layout` specifies the template to use from the `_layout` directory

`title` is a variable used in the specified layout, accessible via `{{ page.title }}` in this example

`category` and `tags` can be space delimited strings
