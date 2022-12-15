<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\tempat__distribusi;
use App\Models\harga__jual;
use App\Models\jenis__produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //seeder tempat dikstribusi
        tempat__distribusi::create([
            'tempat_distribusi' => 'Kantin Raflesia mart - SMK Negeri 1 Garut',
        ]);
        //endseeder tempat disktribusi


        //seeder jenis produk
        jenis__produk::create([
            'jenis_produk' => 'Makanan',
            'slug' => 'makanan'
        ]);
        jenis__produk::create([
            'jenis_produk' => 'Minuman',
            'slug' => 'minuman'
        ]);
        //endseeder jenis produk


        //seeder harga jual
        harga__jual::create([
            'harga_jual' => '1000',
            'rp' => 'Seribu Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '1500',
            'rp' => 'Seribu Lima Ratus Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '2000',
            'rp' => 'Duaribu Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '2500',
            'rp' => 'Duaribu Lima Ratus Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '3000',
            'rp' => 'Tigaribu Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '3500',
            'rp' => 'Tigaribu Lima Ratus Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '4000',
            'rp' => 'Empatribu Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '4500',
            'rp' => 'Empatribu Lima Ratus Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '5000',
            'rp' => 'Limaribu Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '5500',
            'rp' => 'Limaribu Lima Ratus Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '6000',
            'rp' => 'Enamribu Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '6500',
            'rp' => 'Enamribu Lima Ratus Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '7000',
            'rp' => 'Tujuhribu Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '7500',
            'rp' => 'Tujuhribu Lima Ratus Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '8000',
            'rp' => 'Delapanribu Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '8500',
            'rp' => 'Delapanribu Lima Ratus Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '9000',
            'rp' => 'Sembilanribu Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '9500',
            'rp' => 'Sembilanribu Lima Ratus Rupiah',
        ]);
        harga__jual::create([
            'harga_jual' => '10000',
            'rp' => 'Sepuluhribu Rupiah',
        ]);
        //endseeder harga jual
    }
}
