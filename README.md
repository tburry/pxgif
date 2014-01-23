
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

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 100 Continue</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAEBAQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 101 Switching Protocols</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAICAgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 102 Processing</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAMDAwAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 103 Checkpoint</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAACIiIgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 122 Request-URI too long</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAADdAAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 200 OK</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAHdAQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 201 Created</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAALdAgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 202 Accepted</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAPdAwAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 203 Non-Authoritative Information</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAATdBAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 204 No Content</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAXdBQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 205 Reset Content</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAbdBgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 206 Partial Content</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAfdBwAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 207 Multi-Status</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAACbdJgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 226 IM Used</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAB63QAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 300 Multiple Choices</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAF63QAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 301 Moved Permanently</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAJ63QAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 302 Found</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAN63QAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 303 See Other</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAR63QAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 304 Not Modified</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAV63QAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 305 Use Proxy</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAZ63QAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 306 (Unused)</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAd63QAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 307 Temporary Redirect</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAh63QAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 308 Resume Incomplete</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KAAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 400 Bad Request</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KAQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 401 Unauthorized</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KAgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 402 Payment Required</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KAwAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 403 Forbidden</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KBAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 404 Not Found</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KBQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 405 Method Not Allowed</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KBgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 406 Not Acceptable</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KBwAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 407 Proxy Authentication Required</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KCAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 408 Request Timeout</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KCQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 409 Conflict</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KEAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 410 Gone</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KEQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 411 Length Required</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KEgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 412 Precondition Failed</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KEwAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 413 Request Entity Too Large</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KFAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 414 Request-URI Too Long</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KFQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 415 Unsupported Media Type</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KFgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 416 Requested Range Not Satisfiable</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KFwAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 417 Expectation Failed</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KGAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 418 I'm a teapot</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KIgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 422 Unprocessable Entity</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KIwAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 423 Locked</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KJAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 424 Failed Dependency</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KJQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 425 Unordered Collection</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KJgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 426 Upgrade Required</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KKAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 428 Precondition Required</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KKQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 429 Too Many Requests</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KMQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 431 Request Header Fields Too Large</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KRAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 444 No Response</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KSQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 449 Retry With</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KUAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 450 Blocked by Windows Parental Controls</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP+KmQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 499 Client Closed Request</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/AAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 500 Internal Server Error</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/AQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 501 Not Implemented</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/AgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 502 Bad Gateway</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/AwAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 503 Service Unavailable</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/BAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 504 Gateway Timeout</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/BQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 505 HTTP Version Not Supported</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/BgAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 506 Variant Also Negotiates</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/BwAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 507 Insufficient Storage</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/CQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 509 Bandwidth Limit Exceeded</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/EAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 510 Not Extended</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/EQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 511 Network Authentication Required</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/mAAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 598 Network Read Timeout Error (Informal Convention)</div>

<div class="code-tile"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAN0/mQAAACH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" /> 599 Network Connect Timeout Error (Informal Convention)</div>
</div>