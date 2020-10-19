<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clienteBD extends Model
{
    use HasFactory;
    protected $table='clientes';
    protected $primaryKey = 'IdCliente';

    protected $fillable = ['IdLCliente','Nombre','Apellido','Cedula','Telefono','Direccion','Email'];
}
