<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();

        $curso-> nombre = 'Laravel';
        $curso-> descripcion = 'El mejor framework de PHP';
        $curso-> categoria = 'Desarrollo Web';

        $curso->save();

        $curso2 = new Curso();

        $curso2-> nombre = 'Laravel';
        $curso2-> descripcion = 'El mejor framework de PHP';
        $curso2-> categoria = 'Desarrollo Web';

        $curso2->save();

        $curso3 = new Curso();

        $curso3-> nombre = 'Laravel';
        $curso3-> descripcion = 'El mejor framework de PHP';
        $curso3-> categoria = 'Desarrollo Web';

        $curso3->save(); $curso = new Curso();

        $curso-> nombre = 'Laravel';
        $curso-> descripcion = 'El mejor framework de PHP';
        $curso-> categoria = 'Desarrollo Web';

        $curso->save();

        $curso2 = new Curso();

        $curso2-> nombre = 'Laravel';
        $curso2-> descripcion = 'El mejor framework de PHP';
        $curso2-> categoria = 'Desarrollo Web';

        $curso2->save();

        $curso3 = new Curso();

        $curso3-> nombre = 'Laravel';
        $curso3-> descripcion = 'El mejor framework de PHP';
        $curso3-> categoria = 'Desarrollo Web';

        $curso3->save();
    }
}
