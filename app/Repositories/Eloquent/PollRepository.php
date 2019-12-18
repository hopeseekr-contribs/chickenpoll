<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;
use App\Repositories\Contracts\PollRepositoryInterface;
use App\Repositories\Eloquent\Traits\Sortable;

class PollRepository extends Repository implements PollRepositoryInterface {

    use Sortable;

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\Models\Poll';
    }

}