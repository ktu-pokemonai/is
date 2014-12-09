<?php

/**
 * Reservation
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $equipment_id
 * @property string $reserved_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Reservation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Reservation whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Reservation whereEquipmentId($value)
 * @method static \Illuminate\Database\Query\Builder|\Reservation whereReservedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Reservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Reservation whereUpdatedAt($value)
 */
class Reservation extends \Eloquent
{
    protected $fillable = ['user_id', 'equipment_id', 'reserved_at'];

    protected $dates = ['reserved_at'];

    public function equipment()
    {
        return $this->belongsTo('Equipment');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}