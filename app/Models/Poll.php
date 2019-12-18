<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poll extends Model
{
    use Sortable, SoftDeletes;

    protected $table = 'polls';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title', 'ip', 'agent'
    ];

    protected $guarded = [
        'id'
    ];

    public $sortable = [
        'title', 'created_at'
    ];

    public $sortableAs = ['votes_count'];

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function votes()
    {
        return $this->hasManyThrough(Answer::Class, Option::Class);
    }

    public function settings()
    {
        return $this->hasMany(Setting::Class);
    }

    public function reports()
    {
        return $this->hasMany(Report::Class);
    }
}

