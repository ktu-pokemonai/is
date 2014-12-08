<?php

/**
 * Message
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $message
 * @property string $inbox_deleted_at
 * @property string $outbox_deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $user
 * @method static \Illuminate\Database\Query\Builder|\Message whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Message whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Message whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\Message whereInboxDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Message whereOutboxDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Message whereUpdatedAt($value)
 * @property string $subject
 * @property string $viewed_at
 * @method static \Illuminate\Database\Query\Builder|\Message whereSubject($value)
 * @method static \Illuminate\Database\Query\Builder|\Message whereViewedAt($value)
 */
class Message extends \Eloquent {

    public static $rules = [
        'user_id' => 'required',
        'subject' => 'required',
    ];
	// Don't forget to fill this array
	protected $fillable = ['user_id', 'message', 'subject'];

    public function user()
    {
        return $this->belongsTo('User');
    }

}