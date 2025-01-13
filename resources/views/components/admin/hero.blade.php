<div class="card text-bg-dark">
    <img src="https://templates.iqonic.design/hope-ui/pro/vue/img/top-header.92604be0.png" class="card-img" alt="...">
    <div class="card-img-overlay">
        <h5 class="card-title">Admin Area</h5>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="d-flex justify-content-center" style="position: relative; top:-60px ">
            <x-admin.widget title='Utenti' data={{$countUser}} icon='fa-regular fa-user text-primary' />
            <x-admin.widget title='Prodotti' data={{$countCigar}} icon='fa-solid fa-smoking text-warning' />
            <x-admin.widget title='Nessuno' data='-' icon='fa-solid fa-truck-fast text-info' />
            <x-admin.widget title='Nessuno' data='-' icon='fa-solid fa-triangle-exclamation text-danger' />
        </div>
    </div>
</div>