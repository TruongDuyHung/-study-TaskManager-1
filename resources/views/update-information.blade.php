<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Horizontal form: control states</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="disabledInput" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" id="disabledInput" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="disabledInput" class="col-sm-2 control-label">LasttName</label>
            <div class="col-sm-10">
                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="disabledInput" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" id="disabledInput" type="text">
            </div>
        </div>
        <div class="form-group has-success has-feedback">
            <label class="col-sm-2 control-label" for="inputSuccess">Input with success and glyphicon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSuccess">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
            </div>
        </div>
        <div class="form-group has-warning has-feedback">
            <label class="col-sm-2 control-label" for="inputWarning">Input with warning and glyphicon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputWarning">
                <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
            </div>
        </div>
        <div class="form-group has-error has-feedback">
            <label class="col-sm-2 control-label" for="inputError">Input with error and glyphicon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputError">
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
        </div>
    </form>
</div>

</body>
</html>
