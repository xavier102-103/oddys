@extends('back789658.admin')

@section('title', 'Tous les collaborateurs')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('back789658.collaborator.form') }}" class="btn btn-primary">Ajouter un collaborateur</a>
    </div>

    <table class="table table-striped data-table">
        <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Profession</th>
            <th>Description</th>
            <th class="text-end">Actions</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
   
@endsection

@section('scripts')

    <script>
        $(function () {
            var table = $('.data-table').DataTable({

                ajax: {
                    url: "{{ route('back789658.collaborator.index') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                },
                columns: [
                    {data: 'first_name', name: 'first_name'},
                    {data: 'last_name', name: 'last_name'},
                    {data: 'profession', name: 'profession'},
                    {data: 'description', name: 'description'},
                    {data: 'actions', name: 'actions', orderable: false, searchable: false},
                ],
                
            });
        });
    </script>

@endsection