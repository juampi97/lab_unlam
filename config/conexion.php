<?php
//    $con=@mysqli_connect('localhost', 'id19913514_root', 'Electronica.5000', 'id19913514_laboratorio');
//    $cnx=@mysqli_connect('localhost', 'id19913514_root', 'Electronica.5000', 'id19913514_laboratorio');

    $con=@mysqli_connect('localhost', 'root', '', 'laboratorio');
    $cnx=@mysqli_connect('localhost', 'root', '', 'laboratorio');

    mysqli_set_charset( $con, 'utf8');
?>