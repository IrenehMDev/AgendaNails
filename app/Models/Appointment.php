<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public function appointmentType()
    {
        return $this->belongsTo(AppointmentType::class);
    }

    public function userCustomer() {
        return $this->belongsTo(User::class,  'id', 'user_customer_id');
    }

    public function userCreated() {
        return $this->belongsTo(User::class, 'id', 'user_created_id');
    }
}
