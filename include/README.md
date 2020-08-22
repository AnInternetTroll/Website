# The include folder

This is where all code related files that are used in more places around the site go with an explenation.

# Table of contents

- [The include folder](#the-include-folder)
- [Table of contents](#table-of-contents)
  - [`article.php`](#articlephp)
  - [`asciimoji.jquery.js`/`asciimoji.js`](#asciimojijqueryjsasciimojijs)
  - [`comments_html.php`](#commentshtmlphp)
  - [`discord_comments.php`](#discordcommentsphp)
  - [`dark.css`/`light.css`/`main.css`](#darkcsslightcssmaincss)
  - [`includes.php`](#includesphp)
  - [`links.xml`](#linksxml)
  - [`main.js`](#mainjs)
  - [`manifest.json`](#manifestjson)
  - [`nav.php`](#navphp)
  - [`Parsedown.php`](#parsedownphp)
  - [`jbbcode`](#jbbcode)
  - [`php_stuff.php`](#phpstuffphp)
  - [`search.php`](#searchphp)
  - [`table-of-contents.php`](#table-of-contentsphp)

## `article.php`

This is the file that dictates how the article looks. It requires an `article.md` file in the website's folder.
Dependencies:

- [php-table-of-contents](https://github.com/jenstornell/php-table-of-contents)
- [parsedown](https://github.com/erusev/parsedown)
- The `$root` variable which is set with `$root = $_SERVER['DOCUMENT_ROOT'];` at the start of the page

## `asciimoji.jquery.js`/`asciimoji.js`

These files are dependencies from [ASCIImoji](https://github.com/hpcodecraft/ASCIImoji) which give comments a bit more style \\(°^°)/

## `comments_html.php`

This is where the comment section goes. The text boxes for names and the comment itself

> NOTE: This is **not** where the formating for the comments goes to, that goes to [`php_stuff.php`](#php_stuff.php)
> Dependencies:

- [`php_stuff.php`](#php_stuff.php)
- The `$root` variable which is set with `$root = $_SERVER['DOCUMENT_ROOT'];` at the start of the page

## `discord_comments.php`

This is a webhook which will send the name and comment to discord. It requires a `discordWebhook.txt` in the same folder as the website which contains the URL for a webhook and **nothing else**

## `dark.css`/`light.css`/`main.css`

`dark.css` and `light.css` set variables based on the prefered color scheme. These variables are then used in `main.css`.

> NOTE: Default color scheme is `dark.css`, which is set in `main.js`.  
> DOUBLE NOTE: Internet explorer doesn't support variables

## `includes.php`

This is where HTML/CSS/JS dependencies go. It is recommanded to include this file on all files in the `<head>` tag.

## `links.xml`

These are the search results. File structure goes like

```xml
<pages>
	<link>
		<title>TITLE OF PAGE</title>
		<url>URL FROM SERVER ROOT</url>
            <keywords>KEYWORDS (WORK IN PROGRESS)</keywords>
	</link>
<pages>
```

There should only be 1 `<pages>` tag, and as many search results as `<link>` tags there are.

## `main.js`

This is where all the javascript goes for all websites

## `manifest.json`

This is the file that is responsable for PWA functionality. That being the "add to home" function or the display mode for example.

## `nav.php`

This is the navbar that is included on all pages. It is highly recommanded to include a function like

```php
if (strpos($current_file_name, 'WORD') !== false) {echo "class='nav-item active'";} else {echo "class='nav-item'";}
```

Which will add the class active to a button if the URL has the word `WORD`. The word should be changed of course.

## `Parsedown.php`

This file is a dependency from [Parsedown](https://github.com/erusev/parsedown) which give comments and article the function to be formated using markdown.

## `jbbcode`

This file is a dependency from [jbowens/jBBCode](https://github.com/jbowens/jBBCode) which give comments the function to be formated using BBCode.

## `php_stuff.php`

This is the first file that is loaded on all pages. It includes the formating for comments and used to include an IP logger.

## `search.php`

This is the file that handles the live search server side functionality.

## `table-of-contents.php`

This file is a dependency from [table-of-contents.php](https://github.com/jenstornell/php-table-of-contents) which gives the article anchor points. It also can be used to make a table of contents by uncommenting 2 lines from [`article.php`](#articlephp)
