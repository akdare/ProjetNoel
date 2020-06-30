<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <style>
        .bg-img-overlay {
            background-image: linear-gradient(rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)) url("{{$answer->getFirstMediaUrl('images')}}");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 300px 300px;
            min-height: 300px;
        }
    </style>
</head>
<body>


  <div  style="background-image: linear-gradient(rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)), url({{$answer->getFirstMediaUrl('images')}});
            background-repeat: no-repeat;
            background-position: center;
            background-size: 300px 300px;
            min-height: 300px;">
                                <div class="card-text text-justify">
                                    {!! $answer->content !!}
                                </div>
                            </div>
                        

</body>
</html>
