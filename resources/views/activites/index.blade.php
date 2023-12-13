<x-layout title='activites'>
    <x-msg msg='{{$msg}}'></x-msg>
    <section class="log-container d-flex justify-content-center align-items-center">
        <div class="log-form-container rounded">
            <div class="d-grid justify-content-center align-items-center">
                <div class="dropdown-custom m-auto  ">
                    <a href="#"
                        class="d-flex flex-column align-items-center justify-content-center p-3 link-light text-decoration-none dropdown-toggle"
                        id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-1 m-0 text-light"></i>
                        <p class="fw-bold mb-1 mt-0">{{auth()->user()->name}}</p>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{Route(('user.destroy'))}}">Sair</a></li>
                    </ul>
                </div>
                <form action="{{Route('activites.store')}}"
                    class="form d-flex rounded bg-dark w-100 -right-3 border border-primary" method="post" id="form">
                    @csrf
                    <input type="text" name="name" class="form-control bg-dark  border-0 text-light"
                        placeholder="Ex:study" value="{{old('name')}}"> <button class="btn "><i
                            class="bi bi-plus-circle text-light fs-4 m-3"></i></i></button>
                </form>

                <section class="mt-3 w-100">
                    @isset($activites)
                    @foreach($activites as $ativ)

                    <ul class="list-group w-100" data-bs-theme="dark">
                        <li
                            class="d-flex justify-content-between text-left w-100  text-light p-1 mb-1 ">
                            @if($ativ->status == 'fazer')
                            <p class="pt-2 mb-0">{{$ativ->name}}</p>
                            <div class="d-flex gap-1">
                                <form action="{{Route('activites.update',$ativ->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-transparent"><i
                                            class="bi bi-check-circle text-light"></i></button>
                                </form>
                                <form action="{{Route('activites.destroy',$ativ->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-transparent"><i
                                            class="bi bi-trash3-fill text-light"></i></button>
                                </form>


                            </div>

                            @else
                            <p class="pt-2 mb-0 text-decoration-line-through">{{$ativ->name}}</p>
                            <div class="d-flex gap-1">

                                <form action="{{Route('activites.destroy',$ativ->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-transparent"><i
                                            class="bi bi-trash3-fill text-light"></i></button>
                                </form>


                            </div>
                            @endif


                        </li>


                    </ul>
                    @endforeach


                    @endisset
                </section>

            </div>

        </div>
    </section>




</x-layout>