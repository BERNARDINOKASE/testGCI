<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productsData = [
            [
                'name' => 'Fullstack Web Developer',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam architecto iusto impedit nesciunt? Amet sed itaque provident impedit odit consequatur placeat dolore enim, reiciendis repellat numquam, iusto quaerat quod consectetur.',
                'price' => 1500000,
                'image' => 'Fullstack Web Developer'
            ],
            [
                'name' => 'BackEnd Developer Laravel',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam architecto iusto impedit nesciunt? Amet sed itaque provident impedit odit consequatur placeat dolore enim, reiciendis repellat numquam, iusto quaerat quod consectetur.',
                'price' => 1999000,
                'image' => 'BackEnd Developer Laravel'
            ],
            [
                'name' => 'React Developer',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam architecto iusto impedit nesciunt? Amet sed itaque provident impedit odit consequatur placeat dolore enim, reiciendis repellat numquam, iusto quaerat quod consectetur.',
                'price' => 2500000,
                'image' => 'React Developer'
            ]
        ];
        foreach ($productsData as $key => $value) {
            Products::create($value);
        }
    }
}
