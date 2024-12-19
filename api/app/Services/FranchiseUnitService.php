<?php

namespace App\Services;

use App\Models\Address;
use App\Models\FranchiseUnit;
use Illuminate\Pagination\LengthAwarePaginator;

class FranchiseUnitService
{

    public function index(array $data): LengthAwarePaginator
    {

        $search = $data['search'] ?? '';

        return FranchiseUnit::when($search, function ($query) use ($search) {
            $query->where('id', 'like', '%$search%');
        })->paginate(perPage: $data['per_page'], page: $data['page']);
    }

    public function store(array $data): FranchiseUnit
    {

        $address = Address::create($data);

        return FranchiseUnit::create([...$data, 'address_id' => $address->id]);
    }

    public function destroy(array $data): bool
    {
        return FranchiseUnit::where('id', $data['id'])->delete();
    }

    public function show(array $data): FranchiseUnit
    {
        return FranchiseUnit::where('id', $data['id'])->first();
    }

    public function update(array $data): bool
    {
        return FranchiseUnit::where('id', $data['id'])->update($data);
    }
}