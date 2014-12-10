<?php

/**
 * Guest
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $id_nr
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $user
 * @method static \Illuminate\Database\Query\Builder|\Guest whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Guest whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Guest whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\Guest whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\Guest whereIdNr($value)
 * @method static \Illuminate\Database\Query\Builder|\Guest whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Guest whereUpdatedAt($value)
 */
class Guest extends \Eloquent {

	// Don't forget to fill this array
	protected $fillable = ['first_name', 'last_name', 'id_nr', 'user_id', 'updated_at'];

    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'id_nr' => 'required',
        'user_id' => 'required',
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }

}