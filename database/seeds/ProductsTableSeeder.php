<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class ProductsTableSeeder extends Seeder
{
  /**
   * Auto generated seed file.
   */
  public function run()
  {


    //Products Recommends
    $productDataType = DataType::where('slug', 'products')->firstOrFail();
    if (!$productDataType->exists) {
      $productDataType->fill([
          'type' => 'relationship',
          'details' => [
              'model' => 'App\Product',
              'table' => 'products',
              'type' => 'belongsTo',
              'column' => 'product1_id',
              'key' => 'id',
              'label' => 'Рекомендованные',
              'pivot_table' => 'products_products',
              'pivot' => 1,
          ]])->save();
    }

  }


}
