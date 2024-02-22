<?php
/**
 * Created By Mudassar Ali
 *
 * @author      Mudassar Ali <sahil_bwp@yahoo.com>
 */
namespace Modules\Dashboard\Entities;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    protected $fillable = ['widgets', 'user_id'];
    protected $table = 'dashboard__widgets';

    /**
     * @return mixed
     */
    public function user()
    {
        $driver = config('cms.user.config.driver');

        return $this->belongsTo("Modules\\User\\Entities\\{$driver}\\User");
    }
}
