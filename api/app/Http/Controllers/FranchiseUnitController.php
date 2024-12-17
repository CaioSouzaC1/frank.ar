<?php

namespace App\Http\Controllers;

use App\Builder\ReturnApi;
use App\Exceptions\ApiException;
use App\Http\Requests\FranchiseUnitController\DestroyRequest;
use App\Http\Requests\FranchiseUnitController\IndexRequest;
use App\Http\Requests\FranchiseUnitController\ShowRequest;
use App\Http\Requests\FranchiseUnitController\StoreRequest;
use App\Http\Requests\FranchiseUnitController\UpdateRequest;
use App\Services\FranchiseUnitService;

class FranchiseUnitController extends Controller
{

    public function __construct(public FranchiseUnitService $franchiseUnitService) {}


    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseUnitService->index(
                    $request->validated(),
                ),
                'FranchiseUnit successfully listed!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on listing franchiseUnit.', $e->getCode() ?? 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseUnitService->store(
                    $request->validated(),
                ),
                'FranchiseUnit successfully created!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on creating franchiseUnit.', $e->getCode() ?? 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ShowRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseUnitService->show(
                    $request->validated(),
                ),
                'FranchiseUnit successfully consulted!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on consulting franchiseUnit.', $e->getCode() ?? 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseUnitService->update(
                    $request->validated(),
                ),
                'FranchiseUnit successfully updated!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on updating franchiseUnit.', $e->getCode() ?? 400);
        }
    }

    /**
    * Destroy the specified resource in storage.
    */
    public function destroy(DestroyRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseUnitService->destroy(
                    $request->validated(),
                ),
                'FranchiseUnit successfully deleted!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on deleting franchiseUnit.', $e->getCode() ?? 400);
        }
    }
}