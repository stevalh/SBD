<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
       #reader{
            width: 600px;
        }
    </style>


</head>
<body>
    
<h1>Camera</h1>

<img>

<div class="row" >
    <center><div class="col-4"><div id ="reader" ></div></div></center>
</div>

 
       
       
       
       
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
   
   <script>
    function onScanSuccess(decodedText, decodedResult) {
        // handle the scanned code as you like, for example:
        console.log(`Code matched = ${decodedText}`, decodedResult);
      }
      
      function onScanFailure(error) {
        // handle scan failure, usually better to ignore and keep scanning.
        // for example:
        console.warn(`Code scan error = ${error}`);
      }
      
      let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader",
        { fps: 10, qrbox: {width: 250, height: 250} },
        /* verbose= */ false);
      html5QrcodeScanner.render(onScanSuccess, onScanFailure);
      </script>
</body>
</html>