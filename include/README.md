# The include folder
This is where all code related files that are used in more places around the site go with an explenation.

## `article.php`
This is the file that dictates how the article looks. It requires an `article.md` file in the website's folder. 
Dependencies: 
* [php-table-of-contents](https://github.com/jenstornell/php-table-of-contents)
* [parsedown](https://github.com/erusev/parsedown)
* The `$root` variable which is set with `$root = $_SERVER['DOCUMENT_ROOT'];` at the start of the page

## `asciimoji.jquery.js`/`asciimoji.js`
These files are dependencies from [ASCIImoji](https://github.com/hpcodecraft/ASCIImoji) which give comments a bit more style \\(°^°)/

## `comments_html.php`
This is where the comment section goes. The text boxes for names and the comment itself
> NOTE: This is **not** where the formating for the comments goes to, that goes to [`php_stuff.php`](#php_stuff.php)
Dependencies: 
* [`php_stuff.php`](#php_stuff.php)
* The `$root` variable which is set with `$root = $_SERVER['DOCUMENT_ROOT'];` at the start of the page

## `dark.css`/`light.css`/`main.css`
`dark.css` and `light.css` set variables based on the prefered color scheme. These variables are then used in `main.css`. 
> NOTE: Default color scheme is `dark.css`, which is set in `main.js`. 
> DOUBLE NOTE: Internet explorer doesn't support variables

## includes.php
This is where HTML/CSS/JS dependencies go. It is recommanded to include this file on all files in the `<head>` tag.

## `links.xml`
These are the search results. File structure goes like
```xml
<pages>
	<link>
		<title>TITLE OF PAGE</title>
		<url>URL FROM SERVER ROOT</url>
	</link>
<pages>```
There should only be 1 `<pages>` tag, and as many search results as `<link>` tags there are. 
