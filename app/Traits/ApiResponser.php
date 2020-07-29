<?php
namespace App\Traits;

use App\User;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
trait ApiResponser
{
    private function succesResponse($data,$code)
    {
        return response()->json($data,$code);
    }

    protected function errorResponse($message,$code)
    {
        return response()->json(['mensaje' => $message,'code' =>$code],$code);
    }

    protected function showAll(Collection $collection, $code=200)
    {
        return $this->succesResponse($collection, $code);
    }

    protected function showOne(Model $instance, $code=200)
    {
        return $this->succesResponse($instance,$code);
    }

    protected function showCurrent(User $user, $code=200)
    {
        return $this->succesResponse($user ,$code);
    }

    protected function showMessage($message, $code=200)
    {
        return $this->succesResponse(['data'=>$message],$code);
    }

    protected function showDatosApp($message, $cantidad, $code=200)
    {
        return $this->succesResponse(['data'=>$message, 'numero'=>$cantidad],$code);
    }

    protected function tokenSucces($bool, $token, $user)
    {
        return response()->json(['ok' => $bool, 'token' => $token, 'user' => $user]);
    }

    protected function tokenExpiredSucces($bool,$mensaje, $code=200)
    {
        return response()->json([ 'ok'=> $bool, 'mensaje' => $mensaje],$code);
    }
}
