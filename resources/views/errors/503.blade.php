<!DOCTYPE html>
<html>
    <head>
        <title>@lang('message.maintain')</title>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Microsoft YaHei', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 4em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">@lang('message.maintain')</div>
                <p>@lang('message.maintain_start_at', ['time' => $exception->wentDownAt])</p>
                @if($exception->retryAfter)
                    <p>@lang('message.maintain_retry_after', ['seconds' => $exception->retryAfter])</p>
                @endif
            </div>
        </div>
    </body>
</html>
