<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- style  -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Major Cineplex Cambodia</title>
    <!-- tab logo -->
    <link rel="icon" href="images/majorcineplex-icon.png">
</head>
<body>
    <div class="homepage">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            @include('includes.navbar')
        </nav>

        <main>
            @yield('content-items')
        </main>

        <div class="footer">
            @include('includes.footer')
        </div>
    </div>

    
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>