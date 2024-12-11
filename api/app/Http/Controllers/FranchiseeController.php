<?php

namespace App\Http\Controllers;

use App\Builder\ReturnApi;
use App\Exceptions\ApiException;
use App\Http\Requests\FranchiseeController\DestroyRequest;
use App\Http\Requests\FranchiseeController\IndexRequest;
use App\Http\Requests\FranchiseeController\ShowRequest;
use App\Http\Requests\FranchiseeController\StoreRequest;
use App\Http\Requests\FranchiseeController\UpdateRequest;
use App\Services\FranchiseeService;

class FranchiseeController extends Controller
{

    public function __construct(public FranchiseeService $franchiseeService) {}


    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseeService->index(
                    $request->validated(),
                ),
                'Franchisee successfully listed!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on listing franchisee.', $e->getCode() ?? 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseeService->store(
                    $request->validated(),
                ),
                'Franchisee successfully created!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on creating franchisee.', $e->getCode() ?? 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ShowRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseeService->show(
                    $request->validated(),
                ),
                'Franchisee successfully consulted!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on consulting franchisee.', $e->getCode() ?? 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseeService->update(
                    $request->validated(),
                ),
                'Franchisee successfully updated!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on updating franchisee.', $e->getCode() ?? 400);
        }
    }

    /**
     * Destroy the specified resource in storage.
     */
    public function destroy(DestroyRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->franchiseeService->destroy(
                    $request->validated(),
                ),
                'Franchisee successfully deleted!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on deleting franchisee.', $e->getCode() ?? 400);
        }
    }
}
