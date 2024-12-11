<?php

namespace App\Services;

use App\Models\Admin;
use Illuminate\Pagination\LengthAwarePaginator;

class AdminService
{

    public function index(array $data): LengthAwarePaginator
    {

        $search = $data['search'] ?? '';

        return Admin::when($search, function ($query) use ($search) {
            $query->where('id', 'like', '%$search%');
        })->paginate(perPage: $data['per_page'], page: $data['page']);
    }

    public function store(array $data): Admin
    {
        return Admin::create($data);
    }

    public function destroy(array $data): bool
    {
        return Admin::where('id', $data['id'])->delete();
    }

    public function show(array $data): Admin
    {
        return Admin::where('id', $data['id'])->first();
    }

    public function update(array $data): bool
    {
        return Admin::where('id', $data['id'])->update($data);
    }
}    
        