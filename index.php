<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-slider.css">

    <style>
        .underline { text-decoration: underline;}
        .savings { color: green;}
    </style>
</head>
<body>
    <form>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <h3 class="text-center">How Much Will You Save?</h3>
            <p class="text-center">Selling price: <input type="text"
                                                         name="selling_price"
                                                         id="sellingPrice"
                                                         value="0"
                                                         oninput="calcFee()"
                                                    ></p>
            <hr>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-xs-12 col-md-4 col-md-offset-2">
                <h3 class="underline">Perfect Realty</h3>
                <div class="row">
                    <h4>Pro Lister Package</h4>
                    <p><strong>With this package you would save: </strong><span class="savings"
                                                                                id="proListerPackageSavings"></span></p>
                    <a href="" class="btn btn-primary">Buy Now</a>
                </div>
                <br>
                <div class="row">
                    <h4>Expert Seller Package</h4>
                    <p><strong>With this package you would save: </strong><span class="savings"
                                                                                id="expertSellerPackageSavings"></span></p>

                    <a href="" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <h3 class="underline">Traditional Real Estate Agent</h3>
                <div class="col-xs-8 col-xs-offset-2">
                    <label for="feePercentage">Agent Fee</label>
                    <input id="feePercentage"
                           type="text"
                           data-slider-ticks="[1, 5, 10, 15]"
                           data-slider-ticks-snap-bounds="1"
                           data-slider-ticks-labels="['1%', '5%', '10%', '15%']"
                           onchange="calcFee()"
                    />
                    <p></p><strong>Fee: </strong><span id="agentFee"></span></p>
                </div>
            </div>
        </div>
    </form>
<!-- Scripts -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.min.js"></script>
    <script type="text/javascript" src="calc.js"></script>
    <script type="text/javascript" src="bootstrap-slider.js"></script>
    <script>
        // Without JQuery
        var slider = new Slider("#feePercentage", {
            ticks: [1, 5, 10, 15],
            ticks_labels: ['1%', '5%', '10%', '15%'],
            ticks_snap_bounds: 1
        });
    </script>
<!-- /Scripts -->
</body>
</html>