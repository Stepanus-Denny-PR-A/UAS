<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data_filem>
 */
class DataFilemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Judul'=>'House of Lies',
            'Gambar'=>'https://d2j05qp2jb3mfw.cloudfront.net/film-artwork/520/_filmArtworkLarge/AV_HouseOfLies_2160x2880.jpg',
            'Tahun_Terbit'=>'2023',
            'Deskripsi'=>'After retreating to her lake house, a troubled widow learns of her recently murdered husband’s corrupt past and hidden fortune. Now she must risk her life, face off against a violent killer and claim what is rightfully hers.',
            'Biaya_Pembuatan'=>'200',
            'Pendapatan'=>'300'
        ];
    }
}
