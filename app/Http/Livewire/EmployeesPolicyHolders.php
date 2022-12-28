<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeesPolicyHolders extends Component
{
    use WithPagination;
    public $searchTerm;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $users = User::when(!empty($this->searchTerm), function($q) use($searchTerm) {
                $q->where('employee_code', 'like', $searchTerm)
                    ->orWhere('policy_number', 'like', $searchTerm);
            })
            ->whereHas('roles', function($q) {
                $q->whereIn('name', ['employee', 'policy-holder']);
            })
            ->orderBy('id', 'desc')
            ->with(['permissions', 'roles', 'providers'])
            ->paginate();

        return view('livewire.employees-policy-holders', compact('users'));
    }
}
