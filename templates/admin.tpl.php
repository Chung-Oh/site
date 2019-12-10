<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel Administrativo</title>
    <!-- css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <!-- Emmet command to create two divs with id attribute = div#header+div#main -->
    <div id="header">
        <!-- Emmet command to create tag below with classes = nav.navbar.navbar-expand-lg.navbar-dark.bg-dark>a.navbar-brand -->
        <nav class="navbar-expand-lg navbar-dark bg-dark">
            <a href="" class="navbar-brand">Admin site</a>
            <!-- Emmet command = span.navbar-text -->
            <span class="navbar-text">Painel Administrativo do Sistema</span>
        </nav>
    </div>
    <div id="main">
        <!-- Emmet command = div.row>div.col*2 -->
        <div class="row">
            <div class="col">
                <!-- Emmet commnand = ul.nav.nav-pills.bg-secondary.text-withe -->
                <ul class="nav flex-column nav-pills bg-secondary text-with p-2">
                    <!-- Emmet command = li.nav-item*3>a.nav-link -->
                    <li class="nav-item">
                        <span href="" class="nav-link text-white-50">
                            <small>MENU</small>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">Págias</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Usuários</a>
                    </li>
                </ul>
            </div>
            <div class="col-10">
                <?php include $content ?>
            </div>
        </div>
    </div>
    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>