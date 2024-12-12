@extends('layouts.app')

@section('title', 'Quotes | Admin CMM Store')

@section('content')

    <div class="col-lg-12 mb-4 order-0">
        @if (session('warning'))
            <div class="alert alert-warning alert-dismissible fade show border-2" role="alert">
                {{ session('warning') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="datatables-basic table table-bordered table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#dataTables_length").addClass("mb-0");
            var videoTable = $('.datatables-basic').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: `{{ route('admin.quotes') }}`,
                    type: 'GET'
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    }
                ],
                dom: '<"card-header d-flex justify-content-between align-items-center flex-wrap p-0"' +
                    '<"col-12 col-md-auto"l>' +
                    '<"col-12 col-md-auto text-center mt-2 mt-md-0"B>' +
                    '<"col-12 col-md-auto d-flex justify-content-end mt-2 mt-md-0"f>' +
                    '>' +
                    '<"table-responsive"tr>' +
                    '<"row"' +
                    '  <"col-sm-12 col-md-6"i>' +
                    '  <"col-sm-12 col-md-6"p>' +
                    '>',
                buttons: [{
                    extend: 'collection',
                    className: 'btn btn-label-secondary dropdown-toggle mx-3',
                    text: '<i class="bx bx-export me-2"></i>Export',
                    buttons: [{
                            extend: 'print',
                            title: 'Quotes',
                            text: '<i class="bx bx-printer me-2"></i>Print',
                            className: 'dropdown-item',
                        },
                        {
                            extend: 'csv',
                            title: 'Quotes',
                            text: '<i class="bx bx-file me-2"></i>Csv',
                            className: 'dropdown-item',
                        },
                        {
                            extend: 'excel',
                            title: 'Quotes',
                            text: '<i class="bx bxs-file-export me-1"></i>Excel',
                            className: 'dropdown-item',
                        },
                        {
                            extend: 'pdf',
                            title: 'Quotes',
                            text: '<i class="bx bxs-file-pdf me-2"></i>Pdf',
                            className: 'dropdown-item',
                        },
                        {
                            extend: 'copy',
                            title: 'Quotes',
                            text: '<i class="bx bx-copy me-2"></i>Copy',
                            className: 'dropdown-item',
                        },
                    ],
                }, ],
                lengthMenu: [5, 10, 25, 50, 100],
                pageLength: 5,
                language: {
                    paginate: {
                        next: '<i class="bx bx-chevron-right bx-18px"></i>',
                        previous: '<i class="bx bx-chevron-left bx-18px"></i>'
                    }
                },

            });


            $(".create-new").on('click', function() {
                window.location.href = $(this).attr('data-url');
            });

            let deleteUrl = '';
            let restoreUrl = '';

            $(document).on('click', 'a[id^="delete-"]', function(e) {
                e.preventDefault();

                deleteUrl = $(this).attr('href');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: deleteUrl,
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(result) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your record has been deleted.',
                                    'success'
                                ).then(() => {
                                    videoTable.ajax.reload();
                                });
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'Error!',
                                    'An error occurred while deleting the record.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
