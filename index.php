<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
    <form method="post" action="import.php" enctype="multipart/form-data" style="margin-top: 80px">
    <input type="file" name="excel_file" accept=".csv">
    <input type="submit" name="import" value="Import">
    </form>
    <div align="center"><a type="button" id="print" class="toggle btn btn-primary" href="delete.php">Clear all previous data</a></div>
<div class="row" style="padding-top: 50px">
    <div class="col-md-12 col-lg-6">
        <div align="center"><a type="button" id="print" class="toggle btn btn-primary" href="khalashidisplay.php">খালাসী নিয়োগ পরীক্ষা</a></div>

    </div>
    <div class="col-md-12 col-lg-6">
    <div align="center"><a type="button" id="print" class="toggle btn btn-primary" href="display.php">সমাজকর্মী নিয়োগ পরীক্ষা</a></div>
    </div>
</div>
</div>
</body>
</html>