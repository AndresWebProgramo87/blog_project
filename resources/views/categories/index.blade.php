@extends('layouts.app')
@section('content')
    <div class="container">
        listar categorias exixtentes
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <th>
                        columna 1
                    </th>
                    <th>
                        columna 2
                    </th>
                    <th>
                        columna 3
                    </th>
                </thead>
                <tbody>
                    <tr class="align-bottom">
                        <td>text columna 1</td>
                        <td>text columna 2</td>
                        <td class="align-top">Esta celda está alineada en la parte superior.</td>
                        <td>...</td>
                    </tr>
                    <tr class="align-bottom">
                        <td>text columna 1</td>
                        <td>text columna 2</td>
                        <td class="align-top">Esta celda está alineada en la parte superior.</td>
                        <td>...</td>
                    </tr>
                </tbody>
            </table>
        </div>  
    </div>
@endsection