<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gcispherenouvellestechnologies</title>
 <link rel="stylesheet" href="/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {margin: 0 -5px;}

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }
    </style>
</head>

<body class="bg-white-900 text-white">



<header class="border-b , border-gray-800">

</header>

 <main class="py-8">
     @yield('content')
 </main >

 <footer class="border-t border-white-800">
     <div class="container mx-auto px-4 py-6">
         poyer by <a href="#" class="underline hover:text-gray-400">IGD API</a>
     </div>

 </footer>

</body>

</html>
