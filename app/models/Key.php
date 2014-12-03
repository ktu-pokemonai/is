<?php

/**
 * Key
 *
 * @property integer $id
 * @property integer $room_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Room $room
 * @method static \Illuminate\Database\Query\Builder|\Key whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Key whereRoomId($value)
 * @method static \Illuminate\Database\Query\Builder|\Key whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Key whereUpdatedAt($value)
 */
class Key extends \Eloquent {
	protected $fillable = ['room_id'];

    public function room()
    {
        return $this->belongsTo('Room');
    }

    public static function options()
    {
        $issues = KeyIssue::whereNull('returned_at')->lists('key_id');
        if($issues) {
            $keys = static::whereNotIn('id', $issues)->get();
        } else {
            $keys = static::all();
        }

        $result = [];

        foreach ($keys as $key) {
            $result[$key->id] = $key->id . ' [' . $key->room->name . ']';
        }

        return $result;

    }

    public function issues()
    {
        return $this->hasMany('KeyIssue');
    }
}