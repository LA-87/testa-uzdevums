<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Requests\LogRequest;
use App\Http\Resources\LogResource;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LogController extends Controller
{
    public function index(LogRequest $request): AnonymousResourceCollection
    {
        $query = Activity::query();

        if($request->has('from')) {
            $query->whereDate('created_at', '>=', $request->input('from'));
        }

        if($request->has('till')) {
            $query->whereDate('created_at', '<=', $request->input('till'));
        }

        $query->orderBy('created_at', 'desc');

        return LogResource::collection($query->take(10)->get());
    }
}
