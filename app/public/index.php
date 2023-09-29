<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>PHP SMS demo</title>
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="post" action="send-twillio.php">
                <div class="form-group">
                    <label for="personName" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="personName" name="personName" required placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required placeholder="Phone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="textMsg" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                        <textarea id="textMsg" name="textMsg" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<?php
