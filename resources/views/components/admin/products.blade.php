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
        <h2 class="mb-4">Widget</h2>
        <div class="d-flex justify-content-center">
            <x-admin.widget title='Utenti' data={{$countUser}} icon='fa-regular fa-user' color='bg-primary' />
            <x-admin.widget title='Prodotti' data={{$countCigar}} icon='fa-solid fa-smoking' color='bg-warning' />
            <x-admin.widget title='Ordinati' data='2' icon='fa-solid fa-truck-fast' color='bg-info' />
            <x-admin.widget title='Esauriti' data='5' icon='fa-solid fa-triangle-exclamation' color='bg-danger' />
        </div>

        <livewire:product-form />


    </div>
</div>
