<?php

function VarDumper($statement)
{
    if (!empty($statement))
         echo  "<pre>" . print_r($statement, 1) . "</pre>";
}