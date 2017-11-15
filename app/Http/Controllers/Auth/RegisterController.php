<?php

namespace App\Http\Controllers\Auth;

use App\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Mail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      $messages = [
        'CURP.required' => 'Es necesario el CURP.',
        'Nombre_Usuario.required' => 'Es necesario el Nombre.',
        'Apellido_Paterno.required' => 'Es necesario el Apellido Paterno.',
        'Apellido_Materno.required' => 'Es necesario el Apellido Materno.',
        'email.required' => 'Es necesario el Correo.',
        'Genero.required' => 'Es necesario el Genero.',
        'Fecha_Nacimiento.required' => 'Es necesario la Fecha de Nacimiento.',
        'Telefono.required' => 'Es necesario un Numero de Telefono.',
        'Celular.required' => 'Es necesario un Numero de Celular.',
        'password.required' => 'Es necesario poner una Contraseña.',
        'password.confirmed' => 'La confirmación de contraseña no coincide.',
        'password.min' => 'La contraseña debe tener al menos :min caracteres.',
      ];

        return Validator::make($data, [
            'CURP' => 'required|string|max:255',
            'Nombre_Usuario' => 'required|string|max:255',
            'Apellido_Paterno' => 'required|string|max:255',
            'Apellido_Materno' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:Usuario',
            'Genero' => 'required|string|max:255',
            'Fecha_Nacimiento' => 'required|date|max:255',
            'Telefono' => 'required|string|max:255',
            'Celular' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ],$messages);
    }

/**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data['confirmacioncode']=str_random(25);
        $user = Usuario::create([
            'CURP' => $data['CURP'],
            'Nombre_Usuario' => $data['Nombre_Usuario'],
            'Apellido_Paterno' => $data['Apellido_Paterno'],
            'Apellido_Materno' => $data['Apellido_Materno'],
            'email' => $data['email'],
            'Genero' => $data['Genero'],
            'Fecha_Nacimiento' => $data['Fecha_Nacimiento'],
            'Telefono' => $data['Telefono'],
            'Celular' => $data['Celular'],
            'password' => bcrypt($data['password']),
            'confirmacion_code'=>$data['confirmacioncode'],
        ]);
        Mail::send('Correo.Plantillacorreo',$data,function($message) use ($data)
        {
            $message->from('cunicontrol@gmail.com','Modulo de Cunicultura');
            $message->to($data['email'])->subject('Confirmacion CuniControl');
        });
        return $user;
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $this->create($request->all());
        return redirect('/login')->with('status', 'Te hemos enviado un enlace de activación. Revisa tu correo.');
    }
    public function activarcode($code)
    {
      $user=Usuario::where('confirmacion_code',$code)->first();
      if (!$user) {
        return redirect('/');
      }
      $user->activated=true;
      $user->roles()->attach('ROLADM');
      $user->save();
      return redirect('/login')->with('status','Correo confirmado. Puedes Iniciar Sesion.');
    }
}
