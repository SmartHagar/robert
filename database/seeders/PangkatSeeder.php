<?php

namespace Database\Seeders;

use App\Models\Pangkat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pangkat = [
            ['golongan' => 'I', "nama" => 'Juru', 'pangkat' => 'juru muda', 'ruang' => 'A'],
            ['golongan' => 'I', "nama" => 'Juru', 'pangkat' => 'juru muda tingkat 1', 'ruang' => 'B'],
            ['golongan' => 'I', "nama" => 'Juru', 'pangkat' => 'juru', 'ruang' => 'C'],
            ['golongan' => 'I', "nama" => 'Juru', 'pangkat' => 'juru tingkat 1', 'ruang' => 'D'],
            ['golongan' => 'II', "nama" => 'Pengatur', 'pangkat' => 'pengatur muda', 'ruang' => 'A'],
            ['golongan' => 'II', "nama" => 'Pengatur', 'pangkat' => 'pengatur muda tingkat 1', 'ruang' => 'B'],
            ['golongan' => 'II', "nama" => 'Pengatur', 'pangkat' => 'pengatur', 'ruang' => 'C'],
            ['golongan' => 'II', "nama" => 'Pengatur', 'pangkat' => 'pengatur tingkat 1', 'ruang' => 'D'],
            ['golongan' => 'III', "nama" => 'Penata', 'pangkat' => 'penata muda', 'ruang' => 'A'],
            ['golongan' => 'III', "nama" => 'Penata', 'pangkat' => 'penata muda tingkat 1', 'ruang' => 'B'],
            ['golongan' => 'III', "nama" => 'Penata', 'pangkat' => 'penata', 'ruang' => 'C'],
            ['golongan' => 'III', "nama" => 'Penata', 'pangkat' => 'penata tingkat 1', 'ruang' => 'D'],
            ['golongan' => 'IV', "nama" => 'Pembina', 'pangkat' => 'pembina', 'ruang' => 'A'],
            ['golongan' => 'IV', "nama" => 'Pembina', 'pangkat' => 'pembina tingkat 1', 'ruang' => 'B'],
            ['golongan' => 'IV', "nama" => 'Pembina', 'pangkat' => 'pembina utama muda', 'ruang' => 'C'],
            ['golongan' => 'IV', "nama" => 'Pembina', 'pangkat' => 'pembina utama madya', 'ruang' => 'D'],
            ['golongan' => 'IV', "nama" => 'Pembina', 'pangkat' => 'pembina utama', 'ruang' => 'E'],
        ];

        foreach ($pangkat as $pangkat) {
            Pangkat::create($pangkat);
        }
    }
}
