<div>
    <form wire:submit="save">
        <div class="row">
            <div class="col mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" wire:model="name" class="form-control" id="name">
            </div>
            <div class="col mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" wire:model="website" class="form-control" id="website">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="division" class="form-label">Division</label>
                <select class="form-select" wire:model.live="division" id="division">
                    <option>Select Division</option>
                    @foreach ($divisions as $division)
                        <option value="{{ $division }}">{{ $division }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label for="district" class="form-label">District</label>
                <select class="form-select" wire:model.live="district" id="district">
                    <option>Select District</option>
                    @foreach ($districts as $district)
                        <option value="{{ $district }}">{{ $district }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label for="upazila" class="form-label">Upazila</label>
                <select class="form-select" wire:model.live="upazila" id="upazila">
                    <option>Select Upazila</option>
                    @foreach ($upazilas as $upazila)
                        <option value="{{ $upazila }}">{{ $upazila }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label for="union" class="form-label">Union</label>
                <select class="form-select" wire:model.live="union" id="union">
                    <option>Select Union</option>
                    @foreach ($unions as $union)
                        <option value="{{ $union }}">{{ $union }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="py-3">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
    <div class="pb-4">
        <select wire:model.live="perPage">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Website</th>
                    <th scope="col">Division</th>
                    <th scope="col">District</th>
                    <th scope="col">Upazila</th>
                    <th scope="col">Union</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->website }}</td>
                        <td>{{ $company->division }}</td>
                        <td>{{ $company->district }}</td>
                        <td>{{ $company->upazila }}</td>
                        <td>{{ $company->union }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $companies->links() }}
    </div>
</div>
