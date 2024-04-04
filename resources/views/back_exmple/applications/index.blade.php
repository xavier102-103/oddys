@extends('back789658.admin')

@section('title', 'Toutes les candidatures')

@section('content')

    <table class="table table-striped data-table">
        <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Offre</th>
            <th>Message</th>
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
                    url: "{{ route('back789658.application.index') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                },
                columns: [
                    {data: 'firstname', name: 'firstname'},
                    {data: 'lastname', name: 'lastname'},
                    {data: 'offer', name: 'offer'},
                    {data: 'message', name: 'message'},
                    {data: 'actions', name: 'actions', orderable: false, searchable: false},
                ],
                
            });
        });
    </script>

@endsection