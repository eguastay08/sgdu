<?php

namespace App\Http\Controllers;

use App\Rules\isCedula;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Contact extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function sendMail(Request $request){
        return env('MAIL_PASSWORD');
        $messages = [
            'required'  => 'El campo :attribute es requerido.',
            'unique'    => ':attribute ya existe',
            'exists'=>':attribute no existe',
        ];


        request()->validate([
            'nombre' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50'],
            'apellido' => ['required', 'max:50'],
            'cedula' => ['required',new isCedula],
            'asunto' => ['required'],
            'mensaje' => ['required'],
        ],$messages);

        return \Mail::to('eduardoguastay1999@gmail.com')->send(new \App\Mail\sendEmail($request));
        return \Mail::to(env('send_email'))->send(new \App\Mail\sendEmail($request));

    }
}
