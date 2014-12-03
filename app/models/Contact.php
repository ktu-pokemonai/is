<?php

/**
 * Contact
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $position
 * @property string $email
 * @property string $phone
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Contact whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact wherePosition($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereUpdatedAt($value)
 */
class Contact extends \Eloquent {
	protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'position'];
}