<?php

namespace App\Http\Controllers;

use App\Builder\ReturnApi;
use App\Exceptions\ApiException;
use App\Http\Requests\FranchiseController\DestroyRequest;
use App\Http\Requests\FranchiseController\IndexRequest;
use App\Http\Requests\FranchiseController\ShowRequest;
use App\Http\Requests\FranchiseController\StoreRequest;
use App\Http\Requests\FranchiseController\UpdateRequest;
use App\Services\FranchiseService;

class FranchiseController extends Controller
{

    public function __construct(public FranchiseService $franchiseService) {}


    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseService->index(
                    $request->validated(),
                ),
                'Franchise successfully listed!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on listing franchise.', $e->getCode() ?? 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseService->store(
                    $request->validated(),
                ),
                'Franchise successfully created!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on creating franchise.', $e->getCode() ?? 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ShowRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseService->show(
                    $request->validated(),
                ),
                'Franchise successfully consulted!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on consulting franchise.', $e->getCode() ?? 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseService->update(
                    $request->validated(),
                ),
                'Franchise successfully updated!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on updating franchise.', $e->getCode() ?? 400);
        }
    }

    /**
    * Destroy the specified resource in storage.
    */
    public function destroy(DestroyRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseService->destroy(
                    $request->validated(),
                ),
                'Franchise successfully deleted!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on deleting franchise.', $e->getCode() ?? 400);
        }
    }
}