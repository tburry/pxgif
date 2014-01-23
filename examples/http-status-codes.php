<!DOCTYPE html>
<!--
This example writes a contact sheet of all http status code gifs.
-->
<html>
  <head>
    <title>HTTP Status Codes</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <style>
        body {
            color: #073642;
            font: 20px/1.5 'Helvetica Neue';
        }

        .media { margin:10px; }
        .media, .media-body {overflow:hidden; _overflow:visible; zoom:1;}
        .media .media-object { float:left; margin-right: 10px; }
        .media .media-object img { display:block; }

        .media-body {
            padding-top: 5px;
        }

        img {
            height: 40px;
            width: 40px;
        }
    </style>
  </head>
  <body>
    <h1>HTTP Status Codes</h1>
    <?php
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
//        499 => 'Client Closed Request',
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
//        598 => 'Network Read Timeout Error (Informal Convention)',
//        599 => 'Network Connect Timeout Error (Informal Convention)',
    );

    foreach ($codes as $code => $message) {
        $gif = Pxgif::dataUri(Pxgif::httpStr($code));

        echo
            '<div class="media">',
            "<img src='$gif' class=\"media-object\" /> ",
            '<div class="media-body">',
            "$code $message",
            '</div>',
            '</div>'."\n\n";
    }
    ?>
  </body>
</html>