@extends('layout')

@section('title', 'Prueba4')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form class="bg-white shadow rounded py-3 px-4">
                <h1 class="display-6 text-center"> Suma la diferencia entre números</h1>
                    <hr>
                        <h3> En una cadena de número compara el valor del índice 0 con el valor del índice 1, y despues el valor del índice 1 con el 2 y así sucesivamente. Finalmente la diferencia entre todos los índices se suma</h3>
                        <div class="form-group">
                            <label for="numbers5">Ingresa una cadema de número separados por comas  </label>
                            <input class="form-control bg-light shadow-sm"
                            type="text"
                            id="numbers5"
                            name="numbers5">
                        </div>

                            <button class="btn btn-primary btn-lg btn-block"
                            type="submit"
                            name="procesar"
                            value="procesar" id="enviar" >Resultado
                            </button><br><br>

                            @isset($desa)
                            <ul class="aling-items-center">
                                <h3>
                                    {{$desa}}
                                </h3>

                            </ul>
                            @endisset
            </form>
        </div>
    </div>
</div>
@endsection