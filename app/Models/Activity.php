<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Activity extends Model
{
    const CREATED_AT = 'created_at';
    
    const UPDATED_AT = NULL;

    protected $table = 'user_activities';

    protected $dateFormat = 'Y-m-d H:i:s.u';
    
    protected $fillable = ['user_id', 'subject', 'reference_id', 'type', 'description', 'ip_address', 'user_agent'];

    protected $guarded = ['id'];

    public static function Log($subject, $reference_id, $type, $description)
    {
        $activity = self::create([
            'user_id' => Auth::user()->id ?? null,
            'subject' => $subject,
            'ref_id' => $reference_id,
            'type' => $type,
            'description' => $description,
            'ip_address' => request()->ip(),
            'user_agent' => request()->header('User-Agent')
        ]);
        return $activity;
    }
}
