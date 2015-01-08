<?php
//Recommended
echo "TAGS: \n";
?>
<script language="php">
    echo 'Hi from <script language="php">';
</script>

<?= 'short echo'."\n"; ?>
<?
//Only available if short_open_tags is On in php.ini
$a = 0;
?>

<%
//Only available if asp_tags is On in php.ini
echo 'ASP TAGS'."\n";
%>

<?= 'Short echo'; ?>
