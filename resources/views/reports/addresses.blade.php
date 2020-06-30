<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

    </style>
</head>
<body>
<div class="card bg-light" style="height: 100%">


        <table border="1" style="border-collapse: collapse; width: 100%;">
            <tbody>
            @foreach($addresses as $address)
            <tr style="magin-bottom:5px;">
                @foreach($address->persons()->get() as $person)
                <tr style="magin-bottom:2px;">
                    <td style="width: 100%;">{{$address->toString()}}</td>
                </tr>
                <tr style="magin-bottom:2px;">
                    <td style="width: 100%;">{{$person->fullname()}}</td>
                </tr>
                @endforeach
            </tr>
            <hr style="border-top: 1px solid">
            @endforeach
            </tbody>
        </table>

</div>

</body>
</html>
