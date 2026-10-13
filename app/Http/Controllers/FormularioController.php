<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function formulario()
    {
        return view('formulario');
    }

    public function guardar(Request $request)
    {
        $datos = $request->validate(
            [
                'nombre' => [
                    'required',
                    'string',
                    'min:2',
                    'max:50'
                ],

                'edad' => [
                    'required',
                    'integer',
                    'min:1',
                    'max:120'
                ],

                'correo' => [
                    'required',
                    'email',
                    'max:100'
                ],

                'promedio' => [
                    'required',
                    'numeric',
                    'min:1',
                    'max:10'
                ],

                'promedio_titulo' => [
                    'required',
                    'numeric',
                    'min:1',
                    'max:10'
                ]
            ],
            [
                'nombre.required' => 'Debe ingresar el nombre.',
                'nombre.string' => 'El nombre debe contener texto.',
                'nombre.min' => 'El nombre debe tener al menos 2 caracteres.',
                'nombre.max' => 'El nombre no puede superar los 50 caracteres.',

                'edad.required' => 'Debe ingresar la edad.',
                'edad.integer' => 'La edad debe ser un número entero.',
                'edad.min' => 'La edad debe ser mayor que cero.',
                'edad.max' => 'La edad no puede superar los 120 años.',

                'correo.required' => 'Debe ingresar un correo electrónico.',
                'correo.email' => 'El correo ingresado no es válido.',
                'correo.max' => 'El correo no puede superar los 100 caracteres.',

                'promedio.required' => 'Debe ingresar el promedio.',
                'promedio.numeric' => 'El promedio debe ser un número.',
                'promedio.min' => 'El promedio debe ser mayor o igual a 1.',
                'promedio.max' => 'El promedio no puede superar 10.',

                'promedio_titulo.required' => 'Debe ingresar el promedio título.',
                'promedio_titulo.numeric' => 'El promedio título debe ser un número.',
                'promedio_titulo.min' => 'El promedio título debe ser mayor o igual a 1.',
                'promedio_titulo.max' => 'El promedio título no puede superar 10.'
            ]
        );

        return view('resultado', [
            'datos' => $datos
        ]);
    }
}