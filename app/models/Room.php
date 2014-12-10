<?php
use Carbon\Carbon;

/**
 * Room
 *
 * @property integer $id
 * @property string $name
 * @property integer $capacity
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Equipment[] $equipment
 * @property-read \Illuminate\Database\Eloquent\Collection|\Key[] $keys
 * @method static \Illuminate\Database\Query\Builder|\Room whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Room whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Room whereCapacity($value)
 * @method static \Illuminate\Database\Query\Builder|\Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Room whereUpdatedAt($value)
 */
class Room extends \Eloquent {

    public static $rules = [
        'name' => 'required',
        'capacity' => 'required',
    ];

	protected $fillable = ['name', 'capacity'];

    public function equipment()
    {
        return $this->hasMany('Equipment');
    }

    public function keys()
    {
        return $this->hasMany('Key');
    }

    /**
     * @param int $from Timestamp from where to start looking
     */
    public function findEmptyTime($from)
    {
        /** @var EquipmentDayComposer $composer */
        $composer = App::make('EquipmentDayComposer');
        $from = Carbon::createFromTimestamp($from);

        for($i = 0; $i < 10; $i++) {
            $date = $from->addDay()->format('Y-m-d');

            foreach($this->equipment as $item) {
                $day = $composer->getDay($item, $date);

                foreach($day as $min => $status) {
                    if($status == 'open') {
                        $time = min_to_time($min);
                        list($year, $month, $day) = explode('-', $date);
                        list($hour, $minutes) = explode(':', $time);

                        $dateTime = Carbon::create($year, $month, $day, $hour, $minutes, 0);

                        return [$item, $dateTime];
                    }
                }
            }
        }

        return null;
    }
}