<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Dropdown Hover</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://kybarg.github.io/bootstrap-dropdown-hover/css/docs.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://kybarg.github.io/bootstrap-dropdown-hover/assets/social-likes/social-likes_classic.css">
    <link rel="stylesheet" href="https://kybarg.github.io/bootstrap-dropdown-hover/assets/bootstrap-dropdownhover/css/animate.min.css">
    <link rel="stylesheet" href="https://kybarg.github.io/bootstrap-dropdown-hover/assets/bootstrap-dropdownhover/css/bootstrap-dropdownhover.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://kybarg.github.io/bootstrap-dropdown-hover/css/demo.css" rel="stylesheet">
    <link href="https://kybarg.github.io/bootstrap-dropdown-hover/css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-material-blue " role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-animations">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-animations" data-hover="dropdown" data-animations="fadeInDownNew fadeInRightNew fadeInUpNew fadeInLeftNew">
                <ul class="nav navbar-nav">
                    @foreach ($categories as $category)
                        @if ($category->parent_id == 0)
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ $category->name }} <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                <?php multilevelMenu($categories, $category->id) ?>

                                </ul>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://kybarg.github.io/bootstrap-dropdown-hover/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://kybarg.github.io/bootstrap-dropdown-hover/js/docs.js"></script>
<script src="https://kybarg.github.io/bootstrap-dropdown-hover/assets/bootstrap-dropdownhover/js/bootstrap-dropdownhover.min.js"></script>
<script src="https://kybarg.github.io/bootstrap-dropdown-hover/assets/social-likes/social-likes.min.js"></script>
</body>
</html>
