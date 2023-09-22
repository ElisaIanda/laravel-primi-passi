<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>HomePage</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        header {
            background-color: black;
            margin-top: -16px;
            padding: 1.5rem 0;
        }

        ul {
            display: flex;
            list-style: none;
            gap: 1rem;
            align-items: center;
            justify-content: center;
        }

        li {
            font-size: 18px;
        }

        .nav-link {
            text-decoration: none;
            color: #ff2d20;
            font-weight: bolder;
        }

        .nav-link:hover{
            color: white;
        }

        .active{
            color: white;
        }

        h1 {
            font-size: 4.5rem;
            line-height: 1;
            text-align: center;
            font-weight: 700;
        }

        .title {
            max-width: 48rem;
            margin: 0 auto;
        }

        .text {
            max-width: 36rem;
            margin: 0 auto;
        }

        .text-text {
            text-align: center;
        }

        .btn {
            display: flex;
            justify-content: center;
            margin: 1.5rem;
            gap: 1.5rem;
        }

        .btn a{
            text-decoration: none;
        }

        .red {
            background-color: #f9322c;
            color: white;
            border: 1px solid #f9322c;
            padding: 0.7rem;
            font-size: .875rem;
            line-height: 1.25rem;
            font-weight: 700;
        }
        .red >a{
            color: white;
        }

        .white >a{
            color: #f9322c;
        }

        .white {
            background-color: white;
            color: #f9322c;
            border: 1px solid #f9322c;
            padding: 0.7rem;
            font-size: .875rem;
            line-height: 1.25rem;
            font-weight: 700;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/36/Logo.min.svg" alt="">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/1">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/2">Contact</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>

    </header>

    <!-- Main -->
    <main>
        <div class="container">
            <div class="title">
                <h1>{{ $h1 }}</h1>
            </div>
            <div class="text">
                <div class="text-text">{{ $text }}</div>
            </div>
            <div class="btn">
                <button class="red">
                    <a href="#">{{$red}}</a>
                </button>
                <button class="white">
                    <a href="#">{{$white}}</a>
                </button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>

    </footer>

</body>

</html>