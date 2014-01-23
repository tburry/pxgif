<?php
/**
 * Generate the project's readme file. This file is part of Pxgif.
 *
 * @author Todd Burry
 * @copyright Copyright 2008, 2009 Vanilla Forums Inc.
 * @link https://github.com/tburry/pxgif Pxgif on github.
 * @license MIT
 */

require_once __DIR__.'/../Pxgif.php';

$codes = array(
    // Informational 1xx
    100 => 'Continue',
    101 => 'Switching Protocols',
    102 => 'Processing',
    103 => 'Checkpoint',
    122 => 'Request-URI too long',
    // Successful 2xx
    200 => 'OK',
    201 => 'Created',
    202 => 'Accepted',
    203 => 'Non-Authoritative Information',
    204 => 'No Content',
    205 => 'Reset Content',
    206 => 'Partial Content',
    207 => 'Multi-Status',
    226 => 'IM Used',
    // Redirection 3xx
    300 => 'Multiple Choices',
    301 => 'Moved Permanently',
    302 => 'Found',
    303 => 'See Other',
    304 => 'Not Modified',
    305 => 'Use Proxy',
    306 => '(Unused)',
    307 => 'Temporary Redirect',
    308 => 'Resume Incomplete',
    // Client Error 4xx
    400 => 'Bad Request',
    401 => 'Unauthorized',
    402 => 'Payment Required',
    403 => 'Forbidden',
    404 => 'Not Found',
    405 => 'Method Not Allowed',
    406 => 'Not Acceptable',
    407 => 'Proxy Authentication Required',
    408 => 'Request Timeout',
    409 => 'Conflict',
    410 => 'Gone',
    411 => 'Length Required',
    412 => 'Precondition Failed',
    413 => 'Request Entity Too Large',
    414 => 'Request-URI Too Long',
    415 => 'Unsupported Media Type',
    416 => 'Requested Range Not Satisfiable',
    417 => 'Expectation Failed',
    418 => 'I\'m a teapot',
    422 => 'Unprocessable Entity',
    423 => 'Locked',
    424 => 'Failed Dependency',
    425 => 'Unordered Collection',
    426 => 'Upgrade Required',
    428 => 'Precondition Required',
    429 => 'Too Many Requests',
    431 => 'Request Header Fields Too Large',
    444 => 'No Response',
    449 => 'Retry With',
    450 => 'Blocked by Windows Parental Controls',
    499 => 'Client Closed Request',
    // Server Error 5xx
    500 => 'Internal Server Error',
    501 => 'Not Implemented',
    502 => 'Bad Gateway',
    503 => 'Service Unavailable',
    504 => 'Gateway Timeout',
    505 => 'HTTP Version Not Supported',
    506 => 'Variant Also Negotiates',
    507 => 'Insufficient Storage',
    509 => 'Bandwidth Limit Exceeded',
    510 => 'Not Extended',
    511 => 'Network Authentication Required',
    598 => 'Network Read Timeout Error (Informal Convention)',
    599 => 'Network Connect Timeout Error (Informal Convention)',
    );
?>

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

## Fancy Http Status Colors (Oh My!)

When you call `Pxgif::httpStr()` you will get a string that represents an a 1 pixel gif for an http status code.
The gif is color-coded to represent the success or severity of the error.

<style>

    .code-tiles {
        overflow: hidden;
    }
    .code-tile {
        width: 50%;
        float: left;
    }

    .code-tile img {
        height: 32px;
        width: 32px;
        vertical-align: bottom;
    }
</style>

<div class="code-tiles">
<?php
foreach ($codes as $code => $message) {
    $gif = Pxgif::dataUri(Pxgif::httpStr($code));

    echo
        "\n".'<div class="code-tile">',
        "<img src=\"$gif\" /> ",
        "$code $message",
        '</div>'."\n";
}
?>
</div>