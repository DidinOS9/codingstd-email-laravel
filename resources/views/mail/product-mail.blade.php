<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Mail Template</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <h1>Congratulations</h1>
        <p>Anda sukses membeli <strong>{{ $product->product_name }}</strong> </p>
        <p>Thanks</p>
        <strong>Brillearn</strong>
    </div>
<script src="{{asset('script/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('script/bootstrap.min.js')}}"></script>
</body>
</html>