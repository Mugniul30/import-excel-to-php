<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <link rel="stylesheet" href="banglafont.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript">
        function printpage()
        {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
            printButton.style.visibility = 'visible';
        }
    </script>
    <title>Document</title>
</head>
<body class="A4 landscape bangla-font">
<div class="container">
<?php
$db = mysqli_connect('localhost','root','','import_excel_php');
$i = 1;
$rows = mysqli_query($db, "SELECT * FROM students");
foreach($rows as $row) :
    ?>
    <section class="sheet padding-25mm" style="padding-top: 120px">
        <table class="table table-bordered">
            <tr style="font-size: 42px">
                <td> সমাজ কর্মী(ইউনিয়ন) নিয়োগ পরীক্ষা</br>
                    <strong>প্রশ্নপত্রের খাম</strong> </br>
                    জেলার নাম: <?php echo $row["DIST_NAME"]; ?> </br>
                    কেন্দ্রের নাম: <?php echo $row["CENTER_NAME"]; ?> </br>
                    ভবন নাম: <?php echo $row["BUILDING_NAME"]; ?> </br>
                    কক্ষ নং: <?php echo $row["ROOM_ID"]; ?> </br>
                    মোট পরীক্ষার্থী: <?php echo $row["SEATS"]; ?> </br>
                </td>
            </tr>
        </table>
    </section>
<?php endforeach; ?>
    <div align="center" style="margin-top: 10px"><input type="button" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></div>
</div>
</body>
</html>