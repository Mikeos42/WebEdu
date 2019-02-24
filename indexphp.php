<?php
echo "<form action='' method='post'>";
echo    "<input type='range' name='hoehe' min='50' max='250'>";
echo    "<p>50-250px</p>";
echo    "<br>";
echo    "<input type='range' name='breite' min='50' max='250'>";
echo    "<p>50-250px</p>";
echo    "<br>";
echo    "<button type='submit' name='ok'>Submit</button>";
echo "</form>";

//-----------------------

echo "<form action='' method='post'>";
echo    "<br>";
echo    "<button type='submit' name='again'>Reset</button>";
echo    "<br>";
if (isset($_POST['ok'])) {
    $hoehe = $_POST['hoehe'];
    $breite = $_POST['breite'];
    echo "<style>
        .box {
            width: $hoehe;
            height: $breite;
            background-color: red;
            transition: width 2s,height 2s;
            text-align: center;
        }
        .box:hover {
            width: 100px;
            height: 100px;
        }
        </style>";
    echo "<div class='box'><p>Height: $hoehe</p><p>Breite: $breite</p></div>";
}
echo "</form>";
?>