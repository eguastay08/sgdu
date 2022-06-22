@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Nuevo Usuario</h5>
                        </div>
                   </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class="card-body">
                            <form role="form text-left"

                                  @if(isset($user->id))
                                  action="{{ route('users.update', ["user" => $user->id ]) }}"
                                  @else
                                  action="{{ route('users.store') }}"
                                  @endif
                                  method="POST" enctype="multipart/form-data">
                                  @if(isset($user->id)) {{ method_field("PUT") }} @endif
                                @csrf
                                <div class="mb-3">
                                    <input required  type="text" class="form-control" placeholder="Nombre" name="name" id="name" aria-label="Name" aria-describedby="name" value="{{ old('name',$user->name??null) }}">
                                    @error('name')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input required type="email" class="form-control" placeholder="Correo Electronico" name="email" id="email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email',$user->email??null) }}">
                                    @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" aria-label="Password" aria-describedby="password-addon">
                                    @error('password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input required type="text" class="form-control" placeholder="Teléfono" name="phone" id="phone" aria-label="Phone" aria-describedby="phone-addon" value="{{ old('phone',$user->phone??null) }}">
                                    @error('phone')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input required type="text" class="form-control" placeholder="Dirección" name="location" id="location" aria-label="Location" aria-describedby="location-addon" value="{{ old('location',$user->location??null) }}">
                                    @error('location')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <select required name="role" id="role"  class="form-control form-select" aria-label="Default select example">
                                        <option >Seleccione el rol</option>
                                        @foreach($roles as $role)
                                            <option {{isset($user->role)?old('location',$user->role)==$role->name?'selected':null:null}} value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="text-center d-flex">
                                    <a href="{{route('users.index')}}" class="btn w-40 my-4 mb-2 bg-gradient-danger">Cancelar</a>
                                    <button type="submit" class="btn bg-gradient-dark w-40 my-4 mb-2 ms-5">Guardar</button>
                                </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
