<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'        => 'Nome do Produto'.uniqid(date('YmdHis')),
            'description' => 'Descrição do Produto'.uniqid(date('YmdHis')),
            'image'       => 'Produto01.jpg',
            'price'       => 10.1,
        ]);
        Product::create([
            'name'        => 'Nome do Produto'.uniqid(date('YmdHis')),
            'description' => 'Descrição do Produto'.uniqid(date('YmdHis')),
            'image'       => 'Produto02.jpg',
            'price'       => 10.1,
        ]);
        Product::create([
            'name'        => 'Nome do Produto'.uniqid(date('YmdHis')),
            'description' => 'Descrição do Produto'.uniqid(date('YmdHis')),
            'image'       => 'Produto03.jpg',
            'price'       => 10.1,
        ]);
        Product::create([
            'name'        => 'Nome do Produto'.uniqid(date('YmdHis')),
            'description' => 'Descrição do Produto'.uniqid(date('YmdHis')),
            'image'       => 'Produto04.jpg',
            'price'       => 10.1,
        ]);
    }
}
