<?php

    $firstName = "Grace";
    $lastName = "Bisimwa";

    echo ($firstName ?? "Unknown"). " " . ($lastName ?? "");

    print (1 <=> 2);
    print (2 <=> 2);
    print (3 <=> 2);

    $output = `ls`;

    print "<pre>$output</pre>";

    $id = 10;

    ($id < 19) ? print "Cool php" : print "Fake code";

    