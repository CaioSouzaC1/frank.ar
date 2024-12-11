<?php

namespace App\Services;

use App\Models\Franchisee;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

class FranchiseeService
{

    public function index(array $data): LengthAwarePaginator
    {
        $search = $data['search'] ?? '';
        return Franchisee::where(['admin_id' => $data['admin_id']])
            ->when($search, function ($query) use ($search) {
                $query->where('id', 'like', '%$search%');
            })->paginate(perPage: $data['per_page'], page: $data['page']);
    }

    public function store(array $data)
    {
        $user = User::create($data);
        return Franchisee::create(['admin_id' => $data['admin_id'], 'user_id' => $user->id]);
    }

    public function destroy(array $data): bool
    {
        return Franchisee::where('id', $data['id'])->delete();
    }

    public function show(array $data): Franchisee
    {
        return Franchisee::where('id', $data['id'])->first();
    }

    public function update(array $data): bool
    {
        return Franchisee::where('id', $data['id'])->update($data);
    }
}
