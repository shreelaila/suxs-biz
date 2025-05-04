<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class UserList extends Model
{
    use HasFactory;
    protected $table = 'lists_users';



    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'gender',
        'email',
        'contact_number',
        'date_of_birth',
        'address_line1',
        'address_line2',
        'country',
        'state',
        'city',
        'pin_code',
        'pan',
        'aadhar',
        'shop',
        'profile_picture',
        'status_id',
        'role',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function cities(): BelongsTo
    {
        return $this->belongsTo(Cities::class, 'city', 'id');
    }
    public function states(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state', 'id');
    }
    public function countries(): BelongsTo
    {
        return $this->belongsTo(Countries::class, 'country', 'id');
    }
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
