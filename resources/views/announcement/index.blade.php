<x-main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="h2 my-2 fw-bold neonText">Ecco i nostri annunci</h1>
                <div class="row">
                    @forelse ($announcements as $announcement)
                    <div class="col-12 col-md-6 col-lg-4 my-4">
                        <div class="card mx-auto shadow-mrk" style="width: 18rem;">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            <div class="card-body rounded bg-body-tertiary ">
                              <h5 class="card-title title-dimension overflow-hidden">{{$announcement->title}}</h5>
                              {{-- <p class="card-text">{{$anouncement->body}}</p> --}}
                              <p class="card-text">Prezzo: €{{$announcement->price}}</p>
                              <a href="{{route('announcement.show',compact('announcement'))}}" class="btn w-100 btn-warning">Visualizza</a>
                              <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="btn w-100 my-2 btn-warning">Categoria: {{$announcement->category->name}}</a>
                              <p class="card-footer bg-white">Pubblicato il: {{$announcement->created_at->format('d/m/y')}} <br>Autore: {{$announcement->user->name}}</p>

                            </div>
                          </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <div class="alert alert-warning py-3 shadow">
                            <p class="lead">Non ci sono annunci per questa ricerca. Prova a passare al lato oscuro</p>
                        </div>
                    </div>
                    @endforelse
                    {{$announcements->links()}}
                </div>
            </div>
        </div>
    </div>
</x-main>