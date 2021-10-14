<?php

function VarDumb($statement)
{
    if (!empty($statement))
         echo  "<pre>" . print_r($statement, 1) . "</pre>";
}