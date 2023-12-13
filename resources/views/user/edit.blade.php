<x-layout title='Create'>
    <section class="log-container d-flex justify-content-center align-items-center">
        <div class="log-form-container rounded">
            <form action="{{Route('user.store')}}" method="post" >
                @csrf
                <div class="d-flex justify-content-center mb-3"><span><i
                            class="bi bi-browser-edge text-light fs-1"></i></span></div>
                <div>
                    <div class="form-group   rounded mb-3">
                        <input type="text" name="name" placeholder="Nome" value="{{old('name')}}" class="form-control text-light raunded-input">
                    </div>

                    <div class="form-group   rounded mb-3">
                        <input type="text" name="email" placeholder="E-mail" value="{{old('email')}}" class="form-control text-light raunded-input">
                    </div>

                    <div class="form-group text-light rounded mb-2">
                        <input type="password" name='password' placeholder="Senha" class="form-control text-light raunded-input">
                    </div>
                </div>
                <div class=" w-100 mt-3">
                    <button class="btn btn-primary w-100 mb-2">Criar conta</button>
                    <p class="text-light p-2">Já possui uma conta? <a class="text-decoration-none" href="{{Route('user.index')}}">Entrar</a></p>
                </div>
            </form>
        </div>
    </section>
</x-layout>