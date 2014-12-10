<?php

/**
 * Image
 *
 * @property integer $id
 * @property string $filename
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Image whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Image whereFilename($value) 
 * @method static \Illuminate\Database\Query\Builder|\Image whereDescription($value) 
 * @method static \Illuminate\Database\Query\Builder|\Image whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Image whereUpdatedAt($value) 
 */
class Image extends \Eloquent
{
    public static $rules = [
        'filename' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = ['filename', 'description'];

}