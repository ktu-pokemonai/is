<?php

/**
 * Complaint
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $text
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\ComplaintResponse[] $responses
 * @method static \Illuminate\Database\Query\Builder|\Complaint whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Complaint whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Complaint whereText($value)
 * @method static \Illuminate\Database\Query\Builder|\Complaint whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Complaint whereUpdatedAt($value)
 */
class Complaint extends \Eloquent {

    public static $rules = [
        'user_id' => 'required',
        'text' => 'required',
    ];
	// Don't forget to fill this array
	protected $fillable = ['user_id', 'text'];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function responses()
    {
        return $this->hasMany('ComplaintResponse');
    }

}