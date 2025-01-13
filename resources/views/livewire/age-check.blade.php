    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div>
        @if ($showModal)
            <!-- Modal per il controllo dell'età -->
            <div class="modal fade show" tabindex="-1" style="display: block;" aria-hidden="false" id="ageCheckModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Verifica Età</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form wire:submit.prevent="checkAge">
                                <div class="mb-3">
                                    <label for="dob" class="form-label">Inserisci la tua data di nascita</label>
                                    <input type="date" wire:model="dob" class="form-control" id="dob" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Verifica Età</button>
                            </form>
                            @if (session()->has('error'))
                                <div class="alert alert-danger mt-3">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    