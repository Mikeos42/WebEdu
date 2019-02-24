<?php


echo "<form action='' method='post'>";
echo    "<input type='number' name='hoehe'>";
echo    "<br>";
echo    "<button type='submit' name='ok'>Submit</button>";
echo "</form>";

//-----------------------

echo "<form action='' method='post'>";
echo    "<br>";
echo    "<button type='submit' name='again'>Reset</button>";
echo    "<br>";
if (isset($_POST['ok'])) {
    echo "<style>
        .box {
            width: ".$_POST['hoehe'].";
            height: ".$_POST['hoehe'].";
            background-color: red;
            transition: width 2s,height 2s}
        .box:hover {
            width: 100;
            height: 100;
        }
        </style>";
    echo "<div class='box'></div>";
}
echo "</form>";

//-----------------------
?>