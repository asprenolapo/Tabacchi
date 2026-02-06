{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
<div>
    @if (!$ageVerified)
        <div class="overlay"
            style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.9); display: flex; justify-content: center; align-items: center; z-index: 2147483647 !important; pointer-events: auto !important;">

            <div class="container text-center" style="position: relative; z-index: 2147483648 !important;">

                <h3 style="color: white; margin-bottom: 20px;">Per entrare nel sito devi essere maggiorenne?</h3>

                <div class="form-group">
                    {{-- Bottone SI: Forziamo il cursore e la cliccabilità --}}
                    <button wire:click="verifyAge('yes')" class="btn btn-success"
                        style="position: relative; z-index: 2147483649 !important; pointer-events: auto !important; cursor: pointer !important;">
                        Sì
                    </button>

                    {{-- Bottone NO --}}
                    <button wire:click="verifyAge('no')" class="btn btn-danger"
                        style="position: relative; z-index: 2147483649 !important; pointer-events: auto !important; cursor: pointer !important;">
                        No
                    </button>
                </div>

            </div>
        </div>
    @endif
</div>
