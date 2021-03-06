<?php

namespace App\Http\Controllers;

use App\Http\Resources\Collection\ProfileCollection;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \Exception;

class ProfileController extends Controller
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
        $model = new Profile();
        ["page" => $page, "per_page" => $perPage] = $request->all(["page", "per_page"]);
        $itemsPerPage = $perPage > $model->getPerPage() ? $perPage : $model->getPerPage();

        $profiles = $model->query();

        $paginatedProfiles = $profiles->paginate($itemsPerPage, ["*"], "page", $page);
        $response = new ProfileCollection($paginatedProfiles);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
