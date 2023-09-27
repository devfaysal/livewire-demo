<div class="row">
    <div class="col-4">
        <div class="sidebar p-5">
            <div class="step {{ $currentStep > 1 ? 'success' : 'active' }}">
                <div>
                    <h5>Language</h5>
                    <p>Language Information</p>
                </div>
            </div>
            <div class="step {{ $currentStep > 2 ? 'success' : '' }} {{ $currentStep == 2 ? 'active' : '' }}">
                <div>
                    <h5>Name</h5>
                    <p>Full Name</p>
                </div>
            </div>
            <div class="step {{ $currentStep > 3 ? 'success' : '' }} {{ $currentStep == 3 ? 'active' : '' }}">
                <div>
                    <h5>Email</h5>
                    <p>Business Email</p>
                </div>
            </div>
            <div class="step {{ $currentStep > 4 ? 'success' : '' }} {{ $currentStep == 4 ? 'active' : '' }}">
                <div>
                    <h5>Phone</h5>
                    <p>Phone Number</p>
                </div>
            </div>
            <div class="step {{ $currentStep > 5 ? 'success' : '' }} {{ $currentStep == 5 ? 'active' : '' }}">
                <div>
                    <h5>Biography</h5>
                    <p>Your Biography</p>
                </div>
            </div>
            <div class="step {{ $currentStep > 6 ? 'success' : '' }} {{ $currentStep == 6 ? 'active' : '' }}">
                <div>
                    <h5>Profile Picture</h5>
                    <p>Add Profile Picture</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="step1 {{ $currentStep != 1 ? 'd-none' : '' }}">
            <div class="pb-4">
                <h5>What languages do you speak?</h5>
                <div class="mb-3">
                    <input wire:model="language" type="text" class="form-control py-3" placeholder="eg. English">
                </div>
            </div>
            <hr class="pb-4">
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-outline-secondary px-5">Back</button>
                <button wire:click="firstStepSubmit" type="button" class="btn btn-success px-5">Next</button>
            </div>
        </div>
        <div class="step2 {{ $currentStep != 2 ? 'd-none' : '' }}">
            <div class="pb-4">
                <h5>What is your name?</h5>
                <div class="mb-3">
                    <input wire:model="name" type="text" class="form-control py-3" placeholder="eg. John Doe">
                </div>
            </div>
            <hr class="pb-4">
            <div class="d-flex justify-content-between">
                <button wire:click="backToStep(1)" type="button" class="btn btn-outline-secondary px-5">Back</button>
                <button wire:click="secondStepSubmit" type="button" class="btn btn-success px-5">Next</button>
            </div>
        </div>
        <div class="step3 {{ $currentStep != 3 ? 'd-none' : '' }}">
            <div class="pb-4">
                <h5>What is your email address?</h5>
                <div class="mb-3">
                    <input wire:model="email" type="email" class="form-control py-3" placeholder="eg. john@example.com">
                </div>
            </div>
            <hr class="pb-4">
            <div class="d-flex justify-content-between">
                <button wire:click="backToStep(2)" type="button" class="btn btn-outline-secondary px-5">Back</button>
                <button wire:click="thirdStepSubmit" type="button" class="btn btn-success px-5">Next</button>
            </div>
        </div>
        <div class="step4 {{ $currentStep != 4 ? 'd-none' : '' }}">
            <div class="pb-4">
                <h5>What is your phone number?</h5>
                <div class="mb-3">
                    <input wire:model="phone" type="phone" class="form-control py-3" placeholder="eg. +8801712345678">
                </div>
            </div>
            <hr class="pb-4">
            <div class="d-flex justify-content-between">
                <button wire:click="backToStep(3)" type="button" class="btn btn-outline-secondary px-5">Back</button>
                <button wire:click="fourthStepSubmit" type="button" class="btn btn-success px-5">Next</button>
            </div>
        </div>
        <div class="step5 {{ $currentStep != 5 ? 'd-none' : '' }}">
            <div class="pb-4">
                <h5>Write few line about you</h5>
                <div class="mb-3">
                    <textarea wire:model="biography" class="form-control py-3" cols="30" rows="10" placeholder="eg. +8801712345678"></textarea>
                </div>
            </div>
            <hr class="pb-4">
            <div class="d-flex justify-content-between">
                <button wire:click="backToStep(4)" type="button" class="btn btn-outline-secondary px-5">Back</button>
                <button wire:click="fifthStepSubmit" type="button" class="btn btn-success px-5">Next</button>
            </div>
        </div>
        <div class="step6 {{ $currentStep != 6 ? 'd-none' : '' }}">
            <div class="pb-4">
                <h5>Upload an image of you</h5>
                <div class="mb-3">
                    <input wire:model="image" type="file" class="form-control py-3">
                </div>
            </div>
            <hr class="pb-4">
            <div class="d-flex justify-content-between">
                <button wire:click="backToStep(5)" type="button" class="btn btn-outline-secondary px-5">Back</button>
                <button wire:click="sixthStepSubmit" type="button" class="btn btn-success px-5">Next</button>
            </div>
        </div>
    </div>
</div>
