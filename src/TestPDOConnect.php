<?php
$dbh = new PDO("mysql:host=localhost;dbname=oaidb", "irwan", "");
$sth = $dbh->query ("SELECT serial, dc_title FROM oai_records where serial = 1");
while ($row = $sth->fetch (PDO::FETCH_ASSOC)) {
printf ("Name: %s, Category: %s\n", $row["serial"], $row["dc_title"]);
}
?>
