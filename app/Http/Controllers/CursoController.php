<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    private $cursos =[
        [
            'id' => 1,
            'nombre' => 'curso laravel basico',
            'descripcion'=>'aprende rutas, controladores, vistas y blade',
            'duracion'=> '20 horas',
            'precio'=> 30
        ],
        [
            'id' => 2,
            'nombre' => 'curso angular basico',
            'descripcion'=>'introducion a componentes, templates y servicios',
            'duracion'=> '20 horas',
            'precio'=> 40
        ],
        [
            'id' => 3,
            'nombre' => 'curso de PHP desde cero',
            'descripcion'=>'varibales, estructutas, arreglos, formularios y sesiones',
            'duracion'=> '25 horas',
            'precio'=> 30
        ],
    


    ];

    public function inicio()
    {
        return view('layouts.inicio');
    }

    public function cursos()
    {
        $cursos = $this ->cursos;
        return view('layouts.cursos',compact('cursos'));
    }

public function detalle($id)
{
    $curso = collect($this->cursos)->firstWhere('id', $id);

    if (!$curso) {
        abort(404);
    }

    return view('layouts.detalle', compact('curso'));

}

public function contacto()
{
    return view('layouts.contacto');
}

}
