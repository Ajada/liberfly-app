<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class LawyersProgress extends Model
{
    use HasFactory;

    protected $table = 'lawyers_progress';

    protected $fillable = [
        'client_name',
        'process_number',
        'sentence_size',
        'n_order',
        'file',
        'cpf',
        'type_process',
        'action',
        'status',
    ];

    protected $casts = [
        'id' => 'string',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }

}
