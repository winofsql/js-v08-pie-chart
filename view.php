<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta charset="utf-8">
<title>円グラフ</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://www.gstatic.com/charts/loader.js"></script>

<script src="client.js?_=<?= time() ?>"></script>

<style>
#content {
    margin: 26px;
}

#piechart {
    width: 700px;
    height: 500px;
}
</style>

</head>
<body>
<h3 class="alert alert-primary"><a href="control.php">円グラフ</a></h3>
<div id="content">

    <div>
        <a href="." class="btn btn-secondary">フォルダ</a>
    </div>

    <div id="piechart"></div>

</div>

</body>
</html>
