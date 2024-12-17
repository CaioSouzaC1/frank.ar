<?php

namespace App\Services;

use App\Models\Address;
use Illuminate\Pagination\LengthAwarePaginator;

class AddressService
{

    public function index(array $data): LengthAwarePaginator
    {

        $search = $data['search'] ?? '';

        return Address::when($search, function ($query) use ($search) {
            $query->where('id', 'like', '%$search%');
        })->paginate(perPage: $data['per_page'], page: $data['page']);
    }

    public function store(array $data): Address
    {
        return Address::create($data);
    }

    public function destroy(array $data): bool
    {
        return Address::where('id', $data['id'])->delete();
    }

    public function show(array $data): Address
    {
        return Address::where('id', $data['id'])->first();
    }

    public function update(array $data): bool
    {
        return Address::where('id', $data['id'])->update($data);
    }
}    
        