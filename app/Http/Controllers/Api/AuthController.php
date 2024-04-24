<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(): JsonResponse
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', request()->email)->first();

        if ($user?->persona?->deleted_at) {
            throw new NotFoundHttpException('El usuario esta deshabilitado');
        }

        if (!$user || !Hash::check(request()->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        if (!$user->email_verified_at) {
            return response()->json([
                'message' => "El correo del usuario no está validado"
            ]);
        }
        $usuario = (object) [];
        $usuario->id = $user->id;
        $usuario->email = $user->email;
        $usuario->name = $user->name;
        // $usuario->primer_nombre = $user->primer_nombre;
        // $usuario->primer_apellido = $user->primer_apellido;

        //Logica para verificar si tiene solicitud asociada
        // $tieneSolicitud = Solicitud::where('id_usuario', $user->id)->first();

        return response()->json([
            'token' => $user->createToken($user->name)->plainTextToken,
            'user' => $usuario,
            // 'estadoSolictud' => $tieneSolicitud ? $tieneSolicitud->id_estado_solicitud : 0
        ]);
    }
    
}
