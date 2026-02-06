{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

<div>
    @if (!session()->has('age_verified') || session('age_verified') !== true)
        
        <div class="overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.9); display: flex; justify-content: center; align-items: center; z-index: 2147483647 !important; pointer-events: auto !important;">
            
            <div class="container text-center" style="position: relative; z-index: 2147483648 !important;">
                
                <h3 style="color: white; margin-bottom: 20px;">Per entrare nel sito devi essere maggiorenne</h3>
                
                <div class="form-group" style="display: flex; justify-content: center; gap: 10px;">
                    
                    <form method="POST" action="{{ route('force.age.verify') }}">
                        @csrf
                        <button type="submit" class="btn btn-success" 
                            style="position: relative; z-index: 2147483649 !important; pointer-events: auto !important; cursor: pointer !important;">
                            Sì
                        </button>
                    </form>

                    <a href="https://www.google.it" class="btn btn-danger" 
                        style="position: relative; z-index: 2147483649 !important; pointer-events: auto !important; cursor: pointer !important; text-decoration: none;">
                        No
                    </a>

                </div>
            </div>
        </div>
    @endif
</div>

