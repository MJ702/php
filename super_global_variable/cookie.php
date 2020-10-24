<?php
    setcookie('cname', 'meet', time()+5);

    echo 'Your cookie is'.$_COOKIE['cname']."<br>";

    setcookie('cname',"", time()-5);
//    delete cookie snatax

