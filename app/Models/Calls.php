<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calls extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'client_id',
        'opened_at',
        'closed_at',
        'status',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    // public static function countByStatus()
    // {
    // return self::selectRaw('status, COUNT(*) as total')
    //     ->groupBy('status')
    //     ->get();
    // }

    // public static function averageResolutionTime()
    // {
    // return self::whereNotNull('closed_at')
    //     ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, opened_at, closed_at)) as avg_time')
    //     ->value('avg_time');
    // }

}
