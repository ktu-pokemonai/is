<?php

/**
 * Apartment
 *
 * @property integer $id
 * @property integer $nr
 * @property integer $capacity
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\Apartment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Apartment whereNr($value)
 * @method static \Illuminate\Database\Query\Builder|\Apartment whereCapacity($value)
 * @method static \Illuminate\Database\Query\Builder|\Apartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Apartment whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Registration[] $registrations
 */
class Apartment extends \Eloquent {

    public static $rules = [
        'nr' => 'required|integer|unique:apartments,nr',
        'capacity' => 'required|integer',
    ];
	// Don't forget to fill this array
	protected $fillable = ['nr', 'capacity'];

    public function users()
    {
        return $this->hasMany('User');
    }

    public function registrations()
    {
        return $this->hasMany('Registration');
    }

}