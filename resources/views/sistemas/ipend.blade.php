@extends('layouts.main')
@section('conteudo')
    <main class="container">
        <br>
        <div class="table-responsive">
            <table class="table" id="tabelaIpend">
                <thead>
                    <tr>
                        <th scope="col">ID Task</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">Data de criação</th>
                        <th scope="col">Data de finalização</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Descrição</th>
                    </tr>
                </thead>
                <tbody id="corpoTabelaIpend">
                </tbody>
            </table>
        </div>
    </main>
@endsection
@push('jsPersonalizado')
    <script src={{url('js/sistemas/ipend.js')}}></script>
@endpush