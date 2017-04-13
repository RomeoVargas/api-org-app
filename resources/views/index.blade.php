<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">Project name</h3>
    </div>
    <ul class="nav nav-tabs wizard-menu wizard-menu">
        <li role="presentation" class="active"><a class="wizard-item step-1-menu active" href="#" data-for=".step-1">TODO</a></li>
        <li role="presentation"><a class="wizard-item step-2-menu" href="#" data-for=".step-2">NOTES</a></li>
    </ul>


    <!-- Load content in-->
    <div class="well wizard-content" style="border-radius: 0 0 5px 5px;">

    </div>
    <!-- Content to load-->
    <div class="hide">
        <div class="step-1">
            @include('partial.todo')
        </div>
        <div class="step-2">
            @include('partial.notes')
        </div>
    </div>
</div>


@yield('modal')
<script src="http://www.tutorialspoint.com/bootstrap/scripts/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script src="{{ asset('js/tab-change.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
