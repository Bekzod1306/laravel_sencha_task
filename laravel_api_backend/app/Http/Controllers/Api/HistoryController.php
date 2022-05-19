<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\HistoryStoreRequest;
use App\Http\Resources\HistoryResource;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    //HistoryResource::collection()
        $arr=History::leftJoin('categories', function($join) {
            $join->on('histories.category_id', '=', 'categories.id');
        })
        
        ->get([
            'categories.cat_type',
            'categories.cat_name',
            'histories.sum',
            'histories.total',
            'histories.comments',
            'histories.created_at',
    ]);
        return $arr;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HistoryStoreRequest $request)
    {
        $new_his = History::create($request->validated());
        //new HistoryResource()
        return $new_his;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {           //new HistoryResource()
        return History::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HistoryStoreRequest $request, $id)
    {
        $history = History::find($id);
        $history->update($request->validated());
        //new HistoryResource()
        return $history;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $history = History::find($id);
        $history->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }

}
