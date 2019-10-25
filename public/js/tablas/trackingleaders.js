(function($) {

    'use strict';
    var table = $('#leaders');
    const inf = $('#inf');
    $(document).ready(function () {
            table.DataTable({
                search: {
                    smart: true
                },
                lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                responsive: true,
                processing: true,
                serverSide: true,
                select: true,
                sDom: '<"text-right mb-md"T><"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t>p',
                ajax: inf.data('urltabla'),
                dom: 'Bfrtip',
                columns: [
                    {data: null, defaultContent: '', className: 'control', orderable: false, searchable: false },
                    {data: "id", name: "id", className: 'never', orderable: false, visible: false, searchable: false},
                    { data: "name", name:"name",orderable: true, searchable: true },
                    { data: "lastname", name:"lastname",orderable: true, searchable: true },
                    { data: "phone", name:"phone",orderable: true, searchable: true },
                    { data: "name",name:'votantes', orderable: false, searchable: true },
                    { data: "name",name:'nsufragados', orderable: true, searchable: true },
                    { data: "pending_sufragio_count",name:'pending_sufragio_count', orderable: true, searchable: true },
                    {
                        data: "id", render: function (data, type, row) {
                            return '<a href="' + inf.data('url') + "/leaders/" + data + '/edit"' + ' class="mb-1 mt-1 on-default edit-row btn btn-xs btn-info simple-ajax-modal" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i> </a>  ' +
                                '<a href="#modalEliminar" data-nasg ="'+row.name+'" data-urldestroy = "' + inf.data('url') + '/leaders/' + data +'" class="mb-1 mt-1 mr-1 on-default remove-row modal-basic btn btn-xs btn-danger " data-toggle="tooltip" data-placement="top" title="Eliminar">' +
                                '<i class="far fa-trash-alt"></i>' +
                                '</a>'+'<a href="' + inf.data('url') + "/reports/" + data + '"' + ' class=" mb-1 mt-1 mr-1 btn btn-xs btn-success "  data-toggle="tooltip" data-placement="top" title="Reporte"><i class="fas fa-print"></i></a>  ';
                        },

                    }
                ],
                buttons: [
                    {
                        extend: 'collection',
                        text: 'Export',
                        buttons: [
                            'copy',
                            'excel',
                            'csv',
                            'pdf',
                            'print'
                        ],
                        className: 'dropdown-toggle btn-primary'
                    }
                ],
                language: {
                    lengthMenu: "_MENU_ Grupos por página",
                    search: "_INPUT_",
                    searchPlaceholder: "Buscar...",
                    zeroRecords: "Nada encontrado, lo sentimos",
                    info: "Mostrando página _PAGE_ de _PAGES_",
                    infoEmpty: "No hay registros disponibles",
                    infoFiltered: "(filtrado de _MAX_ registros totales)"
                }
            });
            $.fn.dataTable.ext.errMode = 'throw';

            $(document).on('click', '.edit-row', function (e) {
                e.preventDefault();
                $('.simple-ajax-modal').magnificPopup({
                    type: 'ajax',
                    modal: true
                });
            });
            $(document).on('click', '.remove-row', function (e) {
                $("#form-delete").attr('action', $(this).data('urldestroy') );
                $("#Nombreasg").text( $(this).data('nasg') );
                $('.modal-basic').magnificPopup({
                    type: 'inline',
                    preloader: false,
                    modal: true
                });
            });
        }
    );
}).apply(this, [jQuery]);
