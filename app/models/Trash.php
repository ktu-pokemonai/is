<?php

/**
 * Trash
 *
 * @property integer $id
 * @property integer $apartment_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Apartment $apartment
 * @method static \Illuminate\Database\Query\Builder|\Trash whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Trash whereApartmentId($value)
 * @method static \Illuminate\Database\Query\Builder|\Trash whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Trash whereUpdatedAt($value)
 */
class Trash extends \Eloquent {

	// Don't forget to fill this array
	protected $fillable = ['apartment_id'];

    public static $rules = [
        'apartment_id' => 'required',
    ];

    public function apartment()
    {
        return $this->belongsTo('Apartment');
    }

}