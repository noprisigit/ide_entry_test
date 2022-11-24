<?php

// file web routes
Route::get('getInauguratedSchool', function () {
  return json_encode([
    'code' => 200,
    'message' => 'Success',
    'data' => [
      'id' => 1,
      'school_name' => 'School ABC',
      'inaugurated_date' => '2020-01-01'
    ]
  ]);
});