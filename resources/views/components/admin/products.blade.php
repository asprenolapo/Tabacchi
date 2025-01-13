@if (session()->has('success'))
    <div class="alert alert-dismissible fade show w-25 ms-auto my-3 shadow-lg z-1"
        style="border-left: 6px solid green; transition: all 0.5s ease-out; position:absolute; top: 80px; right:0"
        id="sessionMSG">
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-circle-check display-6 me-4 text-success"></i>
            <div>
                <p class="text-success fw-bold m-0">Aggiunto</p>
                <p class="text-muted m-0">{{ session('success') }}</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@elseif (session()->has('error'))
    <div class="alert alert-dismissible fade show w-25 ms-auto my-3 shadow-lg z-1"
        style="border-left: 6px solid red; transition: all 0.5s ease-out; position:absolute; top: 80px; right:0"
        id="sessionMSG">
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-circle-check display-6 me-4 text-success"></i>
            <div>
                <p class="text-danger fw-bold m-0">Error</p>
                <p class="text-muted m-0">{{ session('error') }}</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif

<div class="container-fluid">
    <div class="row ">

        <livewire:product-form />

    </div>
</div>
