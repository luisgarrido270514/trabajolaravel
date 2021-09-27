@extends('layouts.app')

@section('content')

    @if (Session::has('Mensaje'))
     <div class="alert alert-success" role="alert">
        {{ Session::get('Mensaje') }}
     </div>


    @endif

    <div class="container p5">
        <div class="row">
            <div class="col-md-6 ">
                <h1>crear usuario</h1>
                <a class="btn btn-success btn-block" href="{{ route('empleado.create') }}">crear usuario</a>

                <div class="">
                    <div class="card-body ">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">apellido</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">ciudad</th>
                                    <th scope="col">Acion #1 </th>
                                    <th scope="col">Acion #2 </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($empleado as $user)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->Nombre }} </td>
                                        <td>{{ $user->Apellido }}</td>
                                        <td>{{ $user->Correo }}</td>
                                        <td>{{ $user->Telefono }}</td>
                                        <td>{{ $user->ciudad }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{ route('empleado.edit', $user->id) }}"
                                                class="btn btn success ">Modificar</a>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('empleado.destroy', $user->id) }}"
                                                style="display: inline">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger" type="submit"
                                                    onclick="return confirm('¿Borrar?');">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        {{ $empleado->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
