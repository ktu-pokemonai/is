<?php

/**
 * Equipment
 *
 * @property integer $id
 * @property integer $room_id
 * @property string $name
 * @property integer $capacity
 * @property integer $from_min
 * @property integer $to_min
 * @property integer $duration
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Room $room
 * @method static \Illuminate\Database\Query\Builder|\Equipment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Equipment whereRoomId($value)
 * @method static \Illuminate\Database\Query\Builder|\Equipment whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Equipment whereCapacity($value)
 * @method static \Illuminate\Database\Query\Builder|\Equipment whereFromMin($value)
 * @method static \Illuminate\Database\Query\Builder|\Equipment whereToMin($value)
 * @method static \Illuminate\Database\Query\Builder|\Equipment whereDuration($value)
 * @method static \Illuminate\Database\Query\Builder|\Equipment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Equipment whereUpdatedAt($value)
 */
class Equipment extends \Eloquent
{
    public static $rules = [];
    protected $fillable = ['room_id', 'name', 'from_min', 'to_min', 'duration', 'capacity'];

    public function room()
    {
        return $this->belongsTo('Room');
    }

    public function reservations()
    {
        return $this->hasMany('Reservation');
    }

    public function setFromMinAttribute($value)
    {
        if(strpos($value, ':') === false) {
            $this->attributes['from_min'] = (int)$value;
        } else {
            list($hour, $min) = explode(':', $value);

            $this->attributes['from_min'] = $hour * 60 + $min;
        }
    }

    public function getFromMinAttribute($value)
    {
        $hours = floor($value / 60);
        $min = $value - ($hours * 60);

        return str_pad($hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($min, 2, '0', STR_PAD_LEFT);
    }

    public function setToMinAttribute($value)
    {
        if(strpos($value, ':') === false) {
            $this->attributes['to_min'] = (int)$value;
        } else {
            list($hour, $min) = explode(':', $value);

            $this->attributes['to_min'] = $hour * 60 + $min;
        }
    }

    public function getToMinAttribute($value)
    {
        $hours = floor($value / 60);
        $min = $value - ($hours * 60);

        return str_pad($hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($min, 2, '0', STR_PAD_LEFT);
    }

    public function from()
    {
        return (int)$this->attributes['from_min'];
    }

    public function to()
    {
        return (int)$this->attributes['to_min'];
    }
}