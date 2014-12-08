<?php

/**
 * KeyIssue
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $key_id
 * @property string $issued_at
 * @property string $returned_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\KeyIssue whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\KeyIssue whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\KeyIssue whereKeyId($value)
 * @method static \Illuminate\Database\Query\Builder|\KeyIssue whereIssuedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\KeyIssue whereReturnedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\KeyIssue whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\KeyIssue whereUpdatedAt($value)
 * @property-read \User $user
 * @property-read \Key $key
 */
class KeyIssue extends \Eloquent {
	protected $fillable = ['user_id', 'key_id', 'issued_at', 'returned_at'];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function key()
    {
        return $this->belongsTo('Key');
    }

}