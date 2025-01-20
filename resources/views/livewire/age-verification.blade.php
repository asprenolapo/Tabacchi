{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
<div>
    @if (!$ageVerified)
        <div class="overlay">
            <div class="container text-center">
                <h3>Per entrare nel sito devi essere maggiorenne?</h3>
                <div class="form-group">
                    <button wire:click="verifyAge('yes')" class="btn btn-success">Sì</button>
                    <button wire:click="verifyAge('no')" class="btn btn-danger">No</button>
                </div>
            </div>
        </div>
    @endif
</div>

