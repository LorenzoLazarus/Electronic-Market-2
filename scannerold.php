<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCommerce | Scanner</title>
    <script src="https://cdn.rawgit.com/serratus/quaggaJS/0420d5e0/dist/quagga.min.js"></script>
    <style>
        #scannerSpace {
 
  max-width: 480px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
   a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}

    </style>
</head>

<body>
    <h1 style="text-align:center"> OPEN SCANNER </h1>
    <h3 style="text-align:center">when ready to scan items please click the button to start</h3>
    <div id="scannerSpace">
        -- space for the scanner to show
        <p><button id="videoStopStart">Add to Cart</button></p>
    </div>
  <!--  <aside>
        <li>
            <ul>
                Scannner
            </ul>
            <ul>
                busket
            </ul>

        </li>
    </aside> -->
  <a href="uCart.php">Press here to view cart after viewing scanner</a>
    <script>
        let scannerBusy = false;

        function videoStreamScanning() {
            Quagga.init({
                inputStream: {
                    name: "Live",
                    type: "LiveStream",
                    target: document.querySelector('#scannerSpace'),
					numOfWorkers: navigator.hardwareConcurrency, // to allow max CPU 
                    constraints: {
                        width: 480,
                        height: 320,
                        facingMode: "user"
                    },
                },
                decoder: { //this is the types of barcodes 
                    readers: [
                        "code_128_reader",
                        "ean_reader",
                        "ean_8_reader",
                        "code_39_reader",
                        "code_39_vin_reader",
                        "codabar_reader",
                        "upc_reader",
                        "upc_e_reader",
                        "i2of5_reader"
                    ],
                    debug: {
                        showCanvas: true,
                        showPatches: true,
                        showFoundPatches: true,
                        showSkeleton: true,
                        showLabels: true,
                        showPatchLabels: true,
                        showRemainingPatchLabels: true,
                        boxFromPatches: {
                            showTransformed: true,
                            showTransformedBox: true,
                            showBB: true
                        }
                    }
                },

            }, function (err) {
                if (err) {
                    console.log(err);
                    return
                }

                console.log("Initialization finished. Ready to start");
                Quagga.start();

                // set scanning boolean to true
                scannerBusy = true;
            });
            Quagga.onProcessed(function (result) {
                let drawingCtx = Quagga.canvas.ctx.overlay,
               drawingCanvas = Quagga.canvas.dom.overlay;

                if (result) {
                    // if (result.boxes) {
                    //     drawingCtx.clearRect(0, 0, parseInt(drawingCanvas.getAttribute("width")), parseInt(drawingCanvas.getAttribute("height")));
                    //     result.boxes.filter(function (box) {
                    //         return box !== result.box;
                    //     }).forEach(function (box) {
                    //         Quagga.ImageDebug.drawPath(box, { x: 0, y: 1 }, drawingCtx, { color: "green", lineWidth: 2 });
                    //     });
                    // }

                    // if (result.box) {
                    //     Quagga.ImageDebug.drawPath(result.box, { x: 0, y: 1 }, drawingCtx, { color: "#00F", lineWidth: 2 });
                    // }

                    if (result.codeResult && result.codeResult.code) {
                        Quagga.ImageDebug.drawPath(result.line, { x: 'x', y: 'y' }, drawingCtx, { color: 'red', lineWidth: 3 });
                    }
                }
            });

            Quagga.onDetected(function (result) {
				//show on screen code
                alert("Barcode detected and processed : [ " + result.codeResult.code + "]", result);
				//capture variable so we can use barco  des
				var last_code = result.codeResult.code;
				// optional to stop scanner
				Quagga.stop();
				//initialize ajax so we can use php and db
				$.ajax({
					type: "POST",
					url: '/products/get_barcode', //check with ajax methods
					data: {upc: last_code}
				});
            });
        }
        // Start/stop scanner
        document.getElementById("videoStopStart").addEventListener("click", function () {
            if (scannerBusy==true) {
                Quagga.stop();  
                scannerBusy = false;
            } else {
                videoStreamScanning();
            }
        });
    </script>
</body>
</html>
