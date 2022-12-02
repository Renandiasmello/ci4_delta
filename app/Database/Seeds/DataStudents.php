<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataStudents extends Seeder
{
    public function run()
    {
        $dataSeeder = [
            [
                'nome' => 'Jeff Bezos',
                'endereco' => 'Rua amazon, 220 - World',
                'foto' => 'student_default.jpg'
            ],
            [
                'nome' => 'Neo Matrix',
                'endereco' => 'Rua da Matrix, pílula vermelha, 127',
                'foto' => 'student_default.jpg'
            ],
            [
                'nome' => 'Calvin Harris',
                'endereco' => 'Rua da escocia, 297',
                'foto' => 'student_default.jpg'
            ],
            [
                'nome' => 'Sheldon Lee Cooper',
                'endereco' => 'Avenida Los Robles, 2311, Pasadena, CA',
                'foto' => 'student_default.jpg'
            ],
            [
                'nome' => 'Ramon valdez',
                'endereco' => 'Rua dos chaves, 72 - Mexico',
                'foto' => 'student_default.jpg'
            ],
            [
                'nome' => 'Amy Farrah Fowler',
                'endereco' => 'Avenida perto do Sheldon, 254, Pasadena, CA',
                'foto' => 'student_default.jpg'
            ]
        ];

        foreach ($dataSeeder as $seed) {
            $this->db->table('students')->insert($seed);
        }
    }
}
