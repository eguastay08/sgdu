@extends('layouts.user_type.guest')

@section('content')

  <main class="main-content  mt-0 vh-100 login">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="c-form col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient text-center">INICIO DE SESIÓN</h3>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="/session">
                    @csrf
                    <label>Correo Institucional</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Correo Institucional" value="" aria-label="Email" aria-describedby="email-addon">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label>Contraseña</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" value="" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                      <button type="submit" class="btn bg-gradient-dark w-100 mt-4 mb-0">Ingresar</button>
                  </form>
                    <form role="form" method="POST" action="/session">
                        @csrf
                        <input type="hidden" name="email" id="email" value="guest@ueb.edu.ec">
                        <input type="hidden" name="password" id="password" value="guest">
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-danger w-100 mt-4 mb-0">Invitado</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
