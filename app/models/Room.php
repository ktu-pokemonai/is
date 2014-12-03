<?php

/**
 * Room
 *
 * @property integer $id
 * @property string $name
 * @property integer $capacity
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Equipment[] $equipment
 * @property-read \Illuminate\Database\Eloquent\Collection|\Key[] $keys
 * @method static \Illuminate\Database\Query\Builder|\Room whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Room whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Room whereCapacity($value)
 * @method static \Illuminate\Database\Query\Builder|\Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Room whereUpdatedAt($value)
 */
class Room extends \Eloquent {

    public static $rules = [
        'name' => 'required',
        'capacity' => 'required',
    ];

	protected $fillable = ['name', 'capacity'];

    public function equipment()
    {
        return $this->hasMany('Equipment');
    }

    public function keys()
    {
        return $this->hasMany('Key');
    }
}