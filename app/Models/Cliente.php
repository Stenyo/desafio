<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $table = 'clientes';


    protected $primaryKey = 'id';


    protected $fillable = ['nome', 'documento', 'email', 'endereco', 'telefone'];

    public static $rules = [
      'nome' => 'required|min:3|max:100',
      'documento' => 'required|numeric',
      'email' => 'required|email',
        //'email' => 'exists:connection.staff,email',
      'endereco' => 'required|min:3|max:100',
      'telefone' => 'required|numeric',
    ];
}
