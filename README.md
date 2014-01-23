
# Pxgif

Pxgif is a little class for generating 1 pixel gifs.

## Why do I need to generate 1 pixel gifs?

You probably don't need to generate 1 pixel gifs unless you are a little [OCD](http://en.wikipedia.org/wiki/Ocd) about
returning the correct content type from your rest api. And the purpose of this class is just that.
Here are some use-cases:

* You are making a google-anlytics style tracker that adds an image to the page to track a pageview.
  You can write out a 1 pixel transparent gif with `echo Pxgif::gifStr(0, 0, 0, true)`.

* Say you are writing a php script to manipulate an image in some way (ex. facebook passes most images through a safe_image.php script).
  If that script fails you should still write a valid image since the browser expecting one.
  You can write out a 1 pixel gif to indicate the http error code `echo Pxgif::httpStr($code)`.


## Installation

To use Pxgif you only need to include one file: **Pxgif.php**. Then all you need to do is call any of the static methods on the Pxgif class.
  
## Basic Example

The following example will output a 1 pixel transparent gif.


```
// Require the class.
require 'Pixgif.php';

// Do something interesting, like track a page view.
// ...

// Set the appropriate response headers.
header("Content-type:  image/gif");
header("Expires: Wed, 11 Nov 1998 11:11:11 GMT");
header("Cache-Control: no-cache");
header("Cache-Control: must-revalidate");

// Dump the gif.
Pxgif::gifStr();
```

## Fancy Http Status Colors (Oh My!)

When you call `Pxgif::httpStr()` you will get a string that represents an a 1 pixel gif for an http status code. The gif is color-coded to represent the success or severity of the error.

The gifs are color coded according to their error types.

1xx Informational
: black

2xx Success
: green

3xx Redirection
: blue (although you're unlikely to see this one)

4xx Client Error
: orange

5xx Server error
: red

### A Status Code Easter Egg

If you are really observant you'll be able to figure out the response code just by looking at the color of the generated gif (hint, read the hex code) (hint, hint: look at the source code).