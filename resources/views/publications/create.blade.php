@extends('layouts.app')

@section('content')

<form action={{route('publicationsStore')}} method="POST" id="form-create" enctype="multipart/form-data">
@csrf


    <div class="container">
        <div class="jumbotron row">

            <div class="col-8 mx-auto text-center">

                <div class="mt-5">
                    <h3 class="text-danger">Nombre:&nbsp;{{Auth::user()->name}}</h3>
                </div>

                <label for="image" class="text-danger">Carga una Imágen</label>
                <input type="file" name="image" id="image" class="form-control p-1" value="{{old('image')}}">
                @error('image')
                    <div class="invalid-feedback d-block w-50 mx-auto" role="alert">
                        {{$message}}
                    </div>
                @enderror
                <div class="row">
                    <div class="col-6">

                        <div class="form-group w-75 mx-auto">
                            <label for="occupation">Ocupación</label>
                            <select id='occupation' name='occupation' class="form-control">
                                <option value="">--Seleccione la Ocupación--</option>
                                @foreach ($occupations as $occupation)
                                    <option value="{{$occupation->id}}" {{old('occupation') == $occupation->id ? 'selected' : ''}}>{{$occupation->occupation}}</option>
                                @endforeach
                            </select>
                        </div>

                        @error('occupation')
                            <div class="invalid-feedback d-block w-50 mx-auto" role="alert">
                                {{$message}}
                            </div>
                        @enderror

                    </div>

                    <div class="col-6">
                        <div class="form-group w-75 mx-auto">
                            <label for="type">Tipo de publicación</label>
                            <select id='type' name='type' class="form-control">
                                <option value="">--Seleccione el Tipo--</option>
                                @foreach ($types as $type)
                                    <option value="{{$type->id}}" {{old('type') == $type->id ? 'selected' : ''}}>{{$type->type}}</option>
                                @endforeach
                            </select>
                        </div>

                        @error('type')
                            <div class="invalid-feedback d-block w-50 mx-auto" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>


                <div class="mt-2">
                    <label for='title' class="text-danger">Titulo:&nbsp</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title')}}">
                </div>

                @error('title')
                    <div class="invalid-feedback d-block w-50 mx-auto" role="alert">
                        {{$message}}
                    </div>
                @enderror

                <div class="mt-2">
                    <label for='text' class="text-danger">Descripción:&nbsp</label>
                    <textarea class="form-control" id="text" name="text" rows="5">{{old('text')}}</textarea>
                </div>

                @error('text')
                    <div class="invalid-feedback d-block w-50 mx-auto" role="alert">
                        {{$message}}
                    </div>
                @enderror

                <div class="mt-2">
                    <label for='telephone' class="text-danger">Teléfono:&nbsp</label>
                    <input type="number" class="form-control" name="telephone" id="telephone" value="{{ old('telephone')}}">
                </div>

                @error('telephone')
                    <div class="invalid-feedback d-block w-50 mx-auto" role="alert">
                        {{$message}}
                    </div>
                @enderror


                <div class="col-12 mt-5">
                    <div class="w-50 mx-auto">
                        <input type="submit" class="form-control btn btn-dark" value="Agregar Publicación">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
