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
            ['golongan' => 'I (Juru)', 'pangkat' => 'juru muda', 'ruang' => 'A'],
            ['golongan' => 'I (Juru)', 'pangkat' => 'juru muda tingkat 1', 'ruang' => 'B'],
            ['golongan' => 'I (Juru)', 'pangkat' => 'juru', 'ruang' => 'C'],
            ['golongan' => 'I (Juru)', 'pangkat' => 'juru tingkat 1', 'ruang' => 'D'],
            ['golongan' => 'II (Pengatur)', 'pangkat' => 'pengatur muda', 'ruang' => 'A'],
            ['golongan' => 'II (Pengatur)', 'pangkat' => 'pengatur muda tingkat 1', 'ruang' => 'B'],
            ['golongan' => 'II (Pengatur)', 'pangkat' => 'pengatur', 'ruang' => 'C'],
            ['golongan' => 'II (Pengatur)', 'pangkat' => 'pengatur tingkat 1', 'ruang' => 'D'],
            ['golongan' => 'III (Penata)', 'pangkat' => 'penata muda', 'ruang' => 'A'],
            ['golongan' => 'III (Penata)', 'pangkat' => 'penata muda tingkat 1', 'ruang' => 'B'],
            ['golongan' => 'III (Penata)', 'pangkat' => 'penata', 'ruang' => 'C'],
            ['golongan' => 'III (Penata)', 'pangkat' => 'penata tingkat 1', 'ruang' => 'D'],
            ['golongan' => 'IV (Pembina)', 'pangkat' => 'pembina', 'ruang' => 'A'],
            ['golongan' => 'IV (Pembina)', 'pangkat' => 'pembina tingkat 1', 'ruang' => 'B'],
            ['golongan' => 'IV (Pembina)', 'pangkat' => 'pembina utama muda', 'ruang' => 'C'],
            ['golongan' => 'IV (Pembina)', 'pangkat' => 'pembina utama madya', 'ruang' => 'D'],
            ['golongan' => 'IV (Pembina)', 'pangkat' => 'pembina utama', 'ruang' => 'E'],
        ];

        foreach ($pangkat as $pangkat) {
            Pangkat::create($pangkat);
        }
    }
}
