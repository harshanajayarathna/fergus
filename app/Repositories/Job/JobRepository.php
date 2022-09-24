<?php

namespace App\Repositories\Job;

use App\Repositories\Job\JobInterface;
use App\Models\Job;


class JobRepository implements JobInterface
{

    public function getAll($request)
    {
        $filterColumns = ['statuses.code', 'statuses.name', 'clients.first_name', 'clients.last_name', 'clients.email', 'clients.phone', 'jobs.number', 'jobs.description'];

        return Job::select('*')
            ->join('statuses', 'jobs.status_id', '=', 'statuses.id')
            ->join('clients', 'jobs.client_id', '=', 'clients.id')
            ->when($request->has('filter'), function ($query) use ($request, $filterColumns) {
                foreach ($filterColumns as $filterColumn) {
                    $query->orWhere($filterColumn, 'like', '%' . $request->filter . '%');
                }
            })
            ->when($request->has('sort_by'), function ($query) use ($request) {
                $query->orderBy($request->sort_by, $request->order_by);
                
            })
            //->orderBy('jobs.number', 'desc')
            ->paginate(5);
    }

    public function get($id)
    {
        return Job::with(['Notes'])->Where('jobs.id', '=', $id)->get();
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @param [type] $data
     * @return void
     */
    public function update($data, $id)
    {
        Job::whereId($id)->update($data);
        return Job::find($id);
    }
}
