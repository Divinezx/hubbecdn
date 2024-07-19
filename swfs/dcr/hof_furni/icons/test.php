<?php

$data = "Hellsinore_CasaBergstrom_42
Hellsinore_CasaBergstrom_02
Hellsinore_CasaBergstrom_07
Hellsinore_CasaBergstrom_03
Hellsinore_CasaBergstrom_04
Hellsinore_CasaBergstrom_05
Hellsinore_CasaBergstrom_06
Hellsinore_CasaBergstrom_08
Hellsinore_CasaBergstrom_10
Hellsinore_CasaBergstrom_11
Hellsinore_CasaBergstrom_12
Hellsinore_CasaBergstrom_13
Hellsinore_CasaBergstrom_14
Hellsinore_CasaBergstrom_15
Hellsinore_CasaBergstrom_16
Hellsinore_CasaBergstrom_17
Hellsinore_CasaBergstrom_18
Hellsinore_CasaBergstrom_19
Hellsinore_CasaBergstrom_20
Hellsinore_CasaBergstrom_21
Hellsinore_CasaBergstrom_22
Hellsinore_CasaBergstrom_23
Hellsinore_CasaBergstrom_24
Hellsinore_CasaBergstrom_25
Hellsinore_CasaBergstrom_26
Hellsinore_CasaBergstrom_27
Hellsinore_CasaBergstrom_28
Hellsinore_CasaBergstrom_29
Hellsinore_CasaBergstrom_30
Hellsinore_CasaBergstrom_31
Hellsinore_CasaBergstrom_32
Hellsinore_CasaBergstrom_33
Hellsinore_CasaBergstrom_34
Hellsinore_CasaBergstrom_35
Hellsinore_CasaBergstrom_36
Hellsinore_CasaBergstrom_37
Hellsinore_CasaBergstrom_38
Hellsinore_CasaBergstrom_39
Hellsinore_CasaBergstrom_40
Hellsinore_CasaBergstrom_41
Hellsinore_CasaBergstrom_01
Hellsinore_Habblet_43
Hellsinore_Habblet_42
Hellsinore_Habblet_41
Hellsinore_Habblet_40
Hellsinore_Habblet_39
Hellsinore_Habblet_38
Hellsinore_Habblet_37
Hellsinore_Habblet_36
Hellsinore_Habblet_35
Hellsinore_Habblet_34
Hellsinore_Habblet_33
Hellsinore_Habblet_32*4
Hellsinore_Habblet_32*3
Hellsinore_Habblet_32*2
Hellsinore_Habblet_32*1
Hellsinore_Habblet_32*0
Hellsinore_Habblet_29
Hellsinore_Habblet_28
Hellsinore_Habblet_27
Hellsinore_Habblet_26
Hellsinore_Habblet_25
Hellsinore_Habblet_24
Hellsinore_Habblet_23
Hellsinore_Habblet_22
Hellsinore_Habblet_21
Hellsinore_Habblet_20
Hellsinore_Habblet_19
Hellsinore_Habblet_18
Hellsinore_Habblet_17
Hellsinore_Habblet_16
Hellsinore_Habblet_15
Hellsinore_Habblet_14
Hellsinore_Habblet_13
Hellsinore_Habblet_12
Hellsinore_Habblet_11
Hellsinore_Habblet_10
Hellsinore_Habblet_09
Hellsinore_Habblet_08
Hellsinore_Habblet_07
Hellsinore_Habblet_05
Hellsinore_Habblet_04
Hellsinore_Habblet_03
Hellsinore_Habblet_02
Hellsinore_Habblet_01";

$classNames = preg_split("/\r\n|\n|\r/", $data);

$classNames = array_map('trim', $classNames);

$classNamesProcessed = [];

for($i = 0; $i < count($classNames); $i++) {
    if(in_array($classNames[$i], $classNamesProcessed)) {
        unset($classNames[$i]);
        continue;
    }

    exec("wget https://images.habblet.city/library/hof_furni/icons/{$classNames[$i]}_icon.png");
    array_push($classNamesProcessed, $classNames[$i]);
}
