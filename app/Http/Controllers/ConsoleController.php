<?php

namespace App\Http\Controllers;

use App\Http\Resources\Collection\ConsoleCollection;
use App\Models\Console;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \Exception;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        //
        $model = new Console();
        ["page" => $page, "per_page" => $perPage] = $request->all(["page", "per_page"]);
        $itemsPerPage = $perPage > $model->getPerPage() ? $perPage : $model->getPerPage();

        $console = $model->query();
        $paginatedConsoles = $console->paginate($itemsPerPage, ["*"], "page", $page);
        $response = new ConsoleCollection($paginatedConsoles);
        return ($response)
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function show(Console $console)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function edit(Console $console)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Console $console)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function destroy(Console $console)
    {
        //
    }
}
