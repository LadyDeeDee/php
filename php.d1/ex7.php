<?php
$heure = 17.00;
if ($heure <= 12.00 && $heure >=6.00):
echo "C'est le matin";
elseif ($heure <= 18.00 && $heure >=12.00):
echo "C'est l'après-midi";
else:
echo "C'est la nuit";
endif
?>