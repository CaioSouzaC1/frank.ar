<?php

namespace App\Http\Controllers;

use App\Builder\ReturnApi;
use App\Exceptions\ApiException;
use App\Http\Requests\AddressController\DestroyRequest;
use App\Http\Requests\AddressController\IndexRequest;
use App\Http\Requests\AddressController\ShowRequest;
use App\Http\Requests\AddressController\StoreRequest;
use App\Http\Requests\AddressController\UpdateRequest;
use App\Services\AddressService;

class AddressController extends Controller
{

    public function __construct(public AddressService $addressService) {}


    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->addressService->index(
                    $request->validated(),
                ),
                'Address successfully listed!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on listing address.', $e->getCode() ?? 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->addressService->store(
                    $request->validated(),
                ),
                'Address successfully created!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on creating address.', $e->getCode() ?? 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ShowRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->addressService->show(
                    $request->validated(),
                ),
                'Address successfully consulted!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on consulting address.', $e->getCode() ?? 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->addressService->update(
                    $request->validated(),
                ),
                'Address successfully updated!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on updating address.', $e->getCode() ?? 400);
        }
    }

    /**
    * Destroy the specified resource in storage.
    */
    public function destroy(DestroyRequest $request)
    {
        try {
            return ReturnApi::success(
                $this->addressService->destroy(
                    $request->validated(),
                ),
                'Address successfully deleted!'
            );
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage() ?? 'Error on deleting address.', $e->getCode() ?? 400);
        }
    }
}