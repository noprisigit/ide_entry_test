<?php

class School {

}

$from = date('2020-01-01');
$to = date('2020-01-30');
$data = School::whereBetween('inaugurated_date', [$from, $to])->get();