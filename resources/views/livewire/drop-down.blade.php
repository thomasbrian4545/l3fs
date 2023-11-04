<div class="offset-3 col-6">
    <h1 class="h5">Dynamic Dependent Dropdown</h1>
    <div class="mb-3">
        <select wire:model.live='selectedCounty' class="form-select">
            <option value="">Select County</option>
            @foreach ($counties as $county)
                <option value="{{ $county->id }}">{{ $county->name }}</option>
            @endforeach
        </select>
    </div>
    @if (!is_null($selectedCounty))
        <div class="mb-3">
            <select wire:model='selectedSubCounty' class="form-select">
                <option value="">Select Sub County</option>
                @foreach ($subCounties as $subcounty)
                    <option value="{{ $subcounty->id }}">{{ $subcounty->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>
