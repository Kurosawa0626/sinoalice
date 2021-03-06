<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>SINoALICE Announce Search</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--    <script>-->
    <!--        var portraitWidth;-->
    <!--        $(window).bind("resize", function(){-->
    <!--            portraitWidth = $(window).width();-->
    <!--            if (portraitWidth) {-->
    <!--                $("html").css("zoom" , portraitWidth/375);-->
    <!--            }-->
    <!--        }).trigger("resize");-->
    <!--    </script>-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/storage/css/pokerabo/reset.css?202007291630">
    <link rel="stylesheet" href="/storage/css/pokerabo/common.css?202007291630">
    <link rel="stylesheet" href="/storage/css/pokerabo/announce.css?202007291630">
    <link rel="stylesheet" href="/storage/css/announce.css?202007291631">
</head>
<body>
<div style="height: 15px;"></div>
@foreach($announces as $announce)
    <a href="/announce/detail/{{ $announce->id }}">
        {!! $announce->html !!}
    </a>
@endforeach
<div style="height: 60px;"></div>
<form action="/announce" style="margin: 0 55px 20px; position: fixed; bottom: 0;">
    <div class="input-group">
        <div style="width: 75%">
            <input class="form-control" type="text" name="word" placeholder="お知らせ本文検索" value="{{ $word }}">
        </div>
        <div class="input-group-append">
            <button class="btn btn-dark" type="submit">検索</button>
        </div>
    </div>
</form>
</body>
</html>
