@extends('layouts.user_type.auth')

@section('content')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h5 class="bold text-center" style="color: darkred">UBICACIÓN</h5>
                        </div>
                       <div class="card-body pb-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22561.301362073635!2d-78.9983110577399!3d-1.5743115197654975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d316085da1f499%3A0x1ce14b998d6b7583!2sUniversidad%20Estatal%20de%20Bol%C3%ADvar!5e0!3m2!1ses-419!2sec!4v1655878440954!5m2!1ses-419!2sec" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="d-flex">
                            <div class="w-50 m-5">
                                <div class="card-header pb-0">
                                    <h5 class="bold text-center" style="color: darkred">CONTÁCTANOS</h5>
                                </div>
                                <form>
                                    <div class="d-flex">
                                        <div class="form-group px-1 w-50">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required="">
                                        </div>
                                        <div class="form-group w-50">
                                            <label for="apellido">Apellido</label>
                                            <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" required="">
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="form-group px-1 w-50">
                                            <label for="cedula">Cédula</label>
                                            <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Cédula" required="">
                                        </div>
                                        <div class="form-group w-50">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="asunto">Asunto</label>
                                        <input type="text" id="asunto" name="asunto" class="form-control" placeholder="Asunto" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="mensaje">Mensaje</label>
                                        <textarea  id="mensaje" name="mensaje" class="form-control" placeholder="Escribe aqui tu mensaje." required="">
                                        </textarea>
                                    </div>
                                    <button type="submit" class="btn bg-gradient-dark w-100">Enviar</button>
                                </form>
                            </div>
                            <div class="w-50 m-5">
                                <div class="card-header pb-0">
                                    <h5 class="bold text-center" style="color: darkred">ENCUÉNTRANOS</h5>
                                </div>
                                <br>
                                    <b>Campus Matriz:</b>
                                    <span>Av. Ernesto Che Guevara s/n
                                        y Av. Gabriel Secaira.</span></br>
                                    <span>Tel: (593) 32206010 - 32206014</span></br>
                                    <span>Guaranda- Ecuador</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

