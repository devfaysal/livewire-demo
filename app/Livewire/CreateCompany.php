<?php

namespace App\Livewire;

use App\Models\Company;
use Devfaysal\BangladeshGeocode\Models\District;
use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\Upazila;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class CreateCompany extends Component
{
    use WithPagination; 
    
    public $perPage;
    public array $divisions;
    public array $districts;
    public array $upazilas;
    public array $unions;
    public string $name;
    public string $website;
    public string $division;
    public string $district;
    public string $upazila;
    public string $union;

    public function mount()
    {
        $this->divisions = Division::pluck('name', 'name')->toArray();
    }

    public function updatedPerPage()
    {
        $this->resetPage();
    }

    public function updatedDivision($value)
    {
        $division = Division::where('name', $value)->first();
        if ($division) {
            $this->districts = $division->districts->pluck('name', 'name')->toArray();
        }
    }

    public function updatedDistrict($value)
    {
        $district = District::where('name', $value)->first();
        if ($district) {
            $this->upazilas = $district->upazilas->pluck('name', 'name')->toArray();
        }
    }

    public function updatedUpazila($value)
    {
        $upazila = Upazila::where('name', $value)->first();
        if ($upazila) {
            $this->unions = $upazila->unions->pluck('name', 'name')->toArray();
        }
    }

    public function save()
    {
        Company::create([
            'name' => $this->name,
            'website' => $this->website,
            'division' => $this->division,
            'district' => $this->district,
            'upazila' => $this->upazila,
            'union' => $this->union,
        ]);
    }

    public function render()
    {
        return view('livewire.create-company',[
            'companies' => Company::orderByDesc('created_at')->paginate($this->perPage)
        ]);
    }
}
