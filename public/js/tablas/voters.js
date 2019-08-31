(function ($) {

    'use strict';
    var table = $('#voters');
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
                buttons: [ 'print', 'excel', 'pdf' ],
                ajax: inf.data('urltabla'),
                dom: 'Bfrtip',
                columns: [
                    {data: null, defaultContent: '', className: 'control', orderable: false, searchable: false},
                    {data: "id", name: "id", className: 'never', orderable: false, visible: false, searchable: false},
                    {data: "cedula", name: "", orderable: true, searchable: true},
                    {data: "name", name: "name", orderable: true, searchable: true},
                    {data: "lastname", name: "lastname", orderable: true, searchable: true},
                    {data: "phone", name: "phone", orderable: true, searchable: true},
                    {data: "sector", name: 'sector', orderable: false, searchable: true},
                    {data: "leader", name: 'leader', orderable: false, searchable: true},
                    {data: "point", name: 'point', orderable: false, searchable: true},
                    {data: "table_number", name: 'table_number', orderable: false, searchable: true},
                    {data: "sufrago", name: "sufrago", orderable: true, searchable: true},
                    {
                        data: "id", render: function (data, type, row) {
                            return '<a href="' + inf.data('url') + "/voters/" + data + '/edit"' + ' class="on-default edit-row simple-ajax-modal"><i class="fas fa-pencil-alt"></i></a>  ' +
                                '<a href="#modalEliminar" data-nasg ="' + row.name + '" data-urldestroy = "' + inf.data('url') + '/voters/' + data + '" class="on-default remove-row modal-basic " >' +
                                '<i class="far fa-trash-alt"></i>' +
                                '</a>';
                        },
                    }
                ],
                language: {
                    lengthMenu: "_MENU_ Votantes por página",
                    search: "_INPUT_",
                    searchPlaceholder: "Buscar...",
                    zeroRecords: "Nada encontrado, lo sentimos",
                    info: "Mostrando página _PAGE_ de _PAGES_",
                    infoEmpty: "No hay registros disponibles",
                    infoFiltered: "(filtrado de _MAX_ registros totales)"
                }
            });
            $('<div />').addClass('dt-buttons mb-2 pb-1 text-right').prependTo('#datatable-tabletools_wrappertkt');
            table.DataTable().buttons().container().prependTo('#datatable-tabletools_wrapper .dt-buttons');
            $('#datatable-tabletools_wrapper').find('.btn-secondary').removeClass('btn-secondary').addClass('btn-default');
            // console.log(table.DataTable().container().prependTo('#datatable-tabletools_wrapper .dt-buttons'));

        }
    );
}).apply(this, [jQuery]);
