<?php

/**
 * ComplaintResponse
 *
 * @property integer $id
 * @property integer $complaint_id
 * @property integer $user_id
 * @property string $text
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Complaint $complaint
 * @property-read \User $user
 * @method static \Illuminate\Database\Query\Builder|\ComplaintResponse whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\ComplaintResponse whereComplaintId($value)
 * @method static \Illuminate\Database\Query\Builder|\ComplaintResponse whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\ComplaintResponse whereText($value)
 * @method static \Illuminate\Database\Query\Builder|\ComplaintResponse whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\ComplaintResponse whereUpdatedAt($value)
 */
class ComplaintResponse extends \Eloquent {
    public static $rules = [
        'complaint_id' => 'required',
        'user_id' => 'required',
        'text' => 'required',
    ];

	protected $fillable = ['complaint_id', 'user_id', 'text'];

    public function complaint()
    {
        return $this->belongsTo('Complaint');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}