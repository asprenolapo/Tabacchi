<div class="card text-bg-dark">
    <img src="https://templates.iqonic.design/hope-ui/pro/vue/img/top-header.92604be0.png" class="card-img" alt="...">
    <div class="card-img-overlay">
        <h5 class="card-title">Admin Area</h5>
        <p class="card-text">
            Area Admin per aggiungere prodotti e Widget inerenti al sito
        </p>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="d-flex justify-content-center" style="position: relative; top:-60px ">
            <x-admin.widget title='Utenti' data={{$countUser}} icon='fa-regular fa-user text-primary' />
            <x-admin.widget title='Prodotti' data={{$countCigar}} icon='fa-solid fa-smoking text-warning' />
            <x-admin.widget title='Ordinati' data='2' icon='fa-solid fa-truck-fast text-info' />
            <x-admin.widget title='Esauriti' data='5' icon='fa-solid fa-triangle-exclamation text-danger' />
        </div>

        {{-- <livewire:product-form /> --}}


    </div>
</div>