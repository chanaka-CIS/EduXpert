<!DOCTYPE html>
<html>
<head>
    <title>Attendent Mark</title>
</head>
<body>
    
<div class="visible-print text-center" style="padding-top: 150px;">
    <h1 style="text-align: center;">Please Scan the QR code</h1>
     <div style="padding-left: 605px;">
    {!! QrCode::size(300)->generate('ItSolutionStuff.com'); !!}
     </div>
</div>
    
</body>
</html>