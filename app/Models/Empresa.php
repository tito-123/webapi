<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Empresa extends Model{

    protected $table = 'Empresas';
    protected $fillable=['nombre','direccion','telefono','propietario','email'];

}