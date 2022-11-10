**Table of contents**

[TOC]

## Analytics

### Google Analytics

This will embed the google analytics tracking code.

```json
{
    "html": { "google_analytics": "UA-XXXXXXXXX-XX" }
}
```

### Piwik Analytics

This will embed the piwik tracking code.

```json
{
    "html": { "piwik_analytics": "my-url-for-piwik.com" }
}
```

You can Also give a specific Piwik ID as well.

```json
{
    "html": { "piwik_analytics_id": "43" }
}
```

### Plausible Analytics

This will embed the https://plausible.io/ tracking code.

```json
{
    "html": { "plausible_domain": "daux.io" }
}
```

## Automatic Table of Contents

You can add a table of contents on each page automatically, read about it [here](../01_Features/Table_of_contents.md)

## Buttons

You can add buttons to the landing page.

```json
{
    "html": {
        "buttons": {
            "My Website": "http://example.com"
        }
    }
}
```

## Breadcrumb titles

Daux.io provides the option to present page titles as breadcrumb navigation.
You can _optionally_ specify the separator used for breadcrumbs.

```json
{
    "html": {
        "breadcrumbs": true,
        "breadcrumb_separator": " > "
    }
}
```

## Date Modified

By default, daux.io will display the last modified time as reported by the system underneath the title for each document.
To disable this, change the option in your config.json to `false`.

```json
{
    "html": { "date_modified": false }
}
```

## GitHub Repo

Add a 'Fork me on GitHub' ribbon.

```json
{
    "html": { "repo": "dauxio/daux.io" }
}
```

## Inherit Index

This feature will instructs the navigation generator to seek the first available file to use when there is no index in a folder.

```json
{
    "html": { "inherit_index": true }
}
```

## Jump buttons

You can have previous/next buttons on each page.
They can be disabled by setting `jump_buttons` to `false`.

```json
{
    "html": { "jump_buttons": false }
}
```

## Landing page

The automatic landing page can be disabled through the `auto_landing` option, read about it [here](../01_Features/Landing_page.md)

## Links

Include custom links in the sidebar.

```json
{
    "html": {
        "links": {
            "GitHub Repo": "https://github.com/dauxio/daux.io",
            "Help/Support/Bugs": "https://github.com/dauxio/daux.io/issues",
            "Made by Todaymade": "http://todaymade.com"
        }
    }
}
```

## Search

Daux has an embedded search engine read all about it [here](../01_Features/Search.md)

## Themes

We have 4 built-in Bootstrap themes. To use one of the themes, just set the `theme` option to one of the following:

-   daux-blue
-   daux-green
-   daux-navy
-   daux-red

```json
{
    "html": { "theme": "daux-blue" }
}
```

To use a custom theme, just copy over the theme folder into the `themes` directory and set its value in the `theme` param in `config.json`

```json
{
    "html": { "theme": "new-theme" }
}
```

## Toggling Code Blocks

Some users might wish to hide the code blocks & view just the documentation.
By setting the `toggle_code` property to `true`, you can offer a toggle button on the page.

```json
{
    "html": { "toggle_code": true }
}
```

## Twitter

Include twitter follow buttons in the sidebar.

```json
{
    "html": { "twitter": ["justin_walsh", "todaymade"] }
}
```
