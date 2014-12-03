<?php

/**
 * Penalty
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $reason
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $user
 * @method static \Illuminate\Database\Query\Builder|\Penalty whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Penalty whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Penalty whereReason($value)
 * @method static \Illuminate\Database\Query\Builder|\Penalty whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Penalty whereUpdatedAt($value)
 */
class Penalty extends \Eloquent {

    protected $table = 'penalties';
	// Don't forget to fill this array
	protected $fillable = ['user_id', 'reason'];

    public static $rules = [
        'user_id' => 'required',
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }

}