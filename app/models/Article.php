<?php

/**
 * Article
 *
 * @property integer        $id
 * @property string         $title
 * @property string         $short_text
 * @property string         $long_text
 * @property string         $published_on
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Article whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Article whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\Article whereShortText($value)
 * @method static \Illuminate\Database\Query\Builder|\Article whereLongText($value)
 * @method static \Illuminate\Database\Query\Builder|\Article wherePublishedOn($value)
 * @method static \Illuminate\Database\Query\Builder|\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Article whereUpdatedAt($value)
 */
class Article extends \Eloquent
{
    public static $rules = [];

    protected $table = 'articles';

    protected $fillable = ['title', 'short_text', 'long_text', 'published_at'];

    public function publish()
    {
        if (!$this->published_on) {
            $this->published_on = \Carbon\Carbon::now();
            $this->save();
        }
    }

    public function unpublish()
    {
        $this->published_on = null;
        $this->save();
    }
}