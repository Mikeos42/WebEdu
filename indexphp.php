<style>
    .box {
        width: <?php echo $_POST['breite']?>;
        height: <?php echo $_POST['hoehe']?>;
        background-color: #ff0000;
        transition: width 2s,height 2s, background-color 2s;
    }
    .box:hover {
        width: <?php echo $_POST['breite'] * $_POST['multi']?>;
        height: <?php echo $_POST['hoehe'] * $_POST['multi']?>;
        background-color: #0000ff;
    }
</style>

<?php

echo "<div class='box'></div>";

?>