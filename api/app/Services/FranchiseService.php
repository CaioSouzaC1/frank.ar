<?php

namespace App\Services;

use App\Models\Franchise;
use Illuminate\Pagination\LengthAwarePaginator;

class FranchiseService
{

    public function index(array $data): LengthAwarePaginator
    {

        $search = $data['search'] ?? '';

        return Franchise::when($search, function ($query) use ($search) {
            $query->where('id', 'like', '%$search%');
        })->paginate(perPage: $data['per_page'], page: $data['page']);
    }

    public function store(array $data): Franchise
    {
        return Franchise::create($data);
    }

    public function destroy(array $data): bool
    {
        return Franchise::where('id', $data['id'])->delete();
    }

    public function show(array $data): Franchise
    {
        return Franchise::where('id', $data['id'])->first();
    }

    public function update(array $data): bool
    {
        return Franchise::where('id', $data['id'])->update($data);
    }
}    
        