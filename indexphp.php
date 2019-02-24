<style>
    .box {
        width: <?php echo $_POST['breite']?>;
        height: <?php echo $_POST['hoehe']?>;
        background-color: black;
        transition: width 2s,height 2s, background-color 2s;
    }
    .box:hover {
        width: <?php echo $_POST['breite'] * 2?>;
        height: <?php echo $_POST['hoehe'] * 2?>;
        background-color: white;
    }
</style>

<?php

echo "<div class='box'></div>";

?>