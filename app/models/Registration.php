<?php

/**
 * Registration
 *
 * @property integer $id
 * @property integer $apartment_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Registration whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Registration whereApartmentId($value)
 * @method static \Illuminate\Database\Query\Builder|\Registration whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\Registration whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\Registration whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Registration wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\Registration whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Registration whereUpdatedAt($value)
 * @property-read \Apartment $apartment
 */
class Registration extends \Eloquent {
    public static $rules = [];

	protected $fillable = ['apartment_id', 'first_name', 'last_name', 'email', 'phone'];

    public function apartment()
    {
        return $this->belongsTo('Apartment');
    }
}