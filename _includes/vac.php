<div id="vac_cont" class="jobscont">
    <div id="vac_nav" >
        <div id="sluit"></div>
    </div>
    <h1 id="vac_title">Jobs</h1>
    <div id="container_vacs" class="scroll-pane">
<?php include '_php/error.php' ?>
<?php include '_php/db_config.php' ?>
<?php include '_php/db_connect.php' ?>
<?php
$result=mysqli_query($connect,"
            SELECT *
            FROM 'vacatures'
            WHERE 'vac_active' = 1
            
        ");
        $numa=mysqli_num_rows($result);
        // mysqli_close();
            if (!$numa || mysqli_num_rows($numa) == 0) {
    ?>
    <?php
        $i=0;
        while ($i < $numa) {
            $f1=html_entity_decode(mysql_result($result,$i,"vac_id"));
            $f2=html_entity_decode(mysql_result($result,$i,"vac_functie"));
            $f3=html_entity_decode(mysql_result($result,$i,"vac_spec"));
            $f4=html_entity_decode(mysql_result($result,$i,"vac_txt"));
?>

<div id="vacs" class="job">

    <a href="jobs.php?id=<?php echo htmlspecialchars($f1); ?>"><?php echo ($f2); ?><br>
    <span id="spec"><?php echo htmlspecialchars($f3); ?></span></a>
</div>

<?php
    $i++;
    }
}
?>
<script src="_js/vacs.js"></script>
</div>
</div>
<script type="text/javascript">
//    $('.jobscont:not(:has(div.job))').hide();
</script>
