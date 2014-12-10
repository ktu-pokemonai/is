<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * User
 *
 * @property integer $id
 * @property integer $room_id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $remember_token
 * @property boolean $is_admin
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereRoomId($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereUpdatedAt($value)
 * @property integer $apartment_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Penalty[] $penalties
 * @property-read \Illuminate\Database\Eloquent\Collection|\Message[] $messages
 * @property-read \Apartment $apartment
 * @property-read \Illuminate\Database\Eloquent\Collection|\Guest[] $guests
 * @property-read \Illuminate\Database\Eloquent\Collection|\Complaint[] $complaints
 * @property-read \Illuminate\Database\Eloquent\Collection|\ComplaintResponses[] $complaintResponses
 * @method static \Illuminate\Database\Query\Builder|\User whereApartmentId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\KeyIssue[] $keyIssues
 */
class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';

    protected $fillable = ['apartment_id', 'username', 'password', 'first_name', 'last_name', 'is_admin', 'email'];

	protected $hidden = array('password', 'remember_token');

    /**
     * Creates user from registration
     *
     * @param Registration $registration
     *
     * @return static
     */
    public static function register(Registration $registration)
    {
        $data = $registration->toArray();
        $data['id_admin'] = false;
        $data['username'] = null;
        $data['password'] = Str::random();
        unset($data['created_at']);
        unset($data['updated_at']);
        unset($data['id']);

        return User::create($data);
    }

    public function name()
    {
        $result = [];
        $result[] = $this->first_name;
        $result[] = $this->last_name;

        $result = trim(join(' ', $result));

        if(!$result) {
            return $this->username;
        }


        return $result;
    }

    public function penalties()
    {
        return $this->hasMany('Penalty');
    }

    public function messages()
    {
        return $this->hasMany('Message');
    }

    public function apartment()
    {
        return $this->belongsTo('Apartment');
    }

    public function guests()
    {
        return $this->hasMany('Guest');
    }

    public function complaints()
    {
        return $this->hasMany('Complaint');
    }

    public function complaintResponses()
    {
        return $this->hasMany('ComplaintResponses');
    }

    public function keyIssues()
    {
        return $this->hasMany('KeyIssue');
    }

    public function reservations()
    {
        return $this->hasMany('Reservation');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

}
