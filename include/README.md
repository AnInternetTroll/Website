# The include folder
This is where all code related files that are used in more places around the site go with an explenation.

## `article.php`
This is the file that dictates how the article looks. It requires an `article.md` file in the website's folder. 
Dependencies: 
* [php-table-of-contents](https://github.com/jenstornell/php-table-of-contents)
* [parsedown](https://github.com/erusev/parsedown)
* And the `$root` variable which is set with `$root = $_SERVER['DOCUMENT_ROOT'];` at the start of the page

## 