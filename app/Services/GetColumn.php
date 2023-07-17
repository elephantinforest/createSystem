<?php

namespace App\Services;

use Illuminate\Support\Facades\Schema;

class GetColumn
{
  public static function getColumn(){
      $columns = Schema::getColumnListing('registers');
        $columnsToExclude = ['id',  'created_at', 'updated_at', 'Url'];

        $columns = array_diff($columns, $columnsToExclude);
        return $columns;
  }
}
