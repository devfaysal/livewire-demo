<div>
    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> --}}
    <button type="button" class="btn btn-primary" wire:click="openModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade @if($showModal) show @endif" @if($showModal) style="display: block" @endif>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Modal title</h1>
                <button wire:click="closeModal" type="button" class="btn-close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button wire:click="closeModal" type="button" class="btn btn-secondary">Close</button>
                <button wire:click.prevent="store()" type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    @if($showModal)
    <div class="modal-backdrop fade show"></div>
    @endif
</div>