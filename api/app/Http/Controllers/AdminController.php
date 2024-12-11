<?php

namespace App\Http\Controllers;

use App\Builder\ReturnApi;
use App\Exceptions\ApiException;
use App\Http\Requests\AdminController\DestroyRequest;
use App\Http\Requests\AdminController\IndexRequest;
use App\Http\Requests\AdminController\ShowRequest;
use App\Http\Requests\AdminController\StoreRequest;
use App\Http\Requests\AdminController\UpdateRequest;
use App\Services\AdminService;

class AdminController extends Controller
{

    public function __construct(public AdminService $adminService) {}


    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->adminService->index(
                    $request->validated(),
                ),
                'Admin successfully listed!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on listing admin.', $e->getCode() ?? 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->adminService->store(
                    $request->validated(),
                ),
                'Admin successfully created!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on creating admin.', $e->getCode() ?? 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ShowRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->adminService->show(
                    $request->validated(),
                ),
                'Admin successfully consulted!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on consulting admin.', $e->getCode() ?? 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->adminService->update(
                    $request->validated(),
                ),
                'Admin successfully updated!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on updating admin.', $e->getCode() ?? 400);
        }
    }

    /**
    * Destroy the specified resource in storage.
    */
    public function destroy(DestroyRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->adminService->destroy(
                    $request->validated(),
                ),
                'Admin successfully deleted!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on deleting admin.', $e->getCode() ?? 400);
        }
    }
}