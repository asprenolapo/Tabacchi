<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Utenti registrati ({{$users->count()}})</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Data creazione</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <th scope="row">{{$loop->count}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>admin</td>
                            <td>{{$user->created_at->format('d M Y  -  H:i')}}</td>
                        </tr>
                    @empty
                        <tr>
                            <th scope="row" colspan="100%">Nessun utente creato!</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
