/*
Name: 			Tables / Advanced - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	2.2.0
*/

(function ($) {

    'use strict';

    var datatableInit = function () {
        var $table = $('#datatable-tabletools');
        const inf = $('#inf');
        var table = $table.dataTable({
            search: {
                smart: false
            },
            lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: inf.data('urltabla'),
            dom: 'Bfrtip',
            sDom: '<"text-right mb-md"T><"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t>p',
            buttons: ['print', 'excel', 'pdf'],
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

        new $.fn.dataTable.Buttons(table, {
            buttons: [{
                extend: 'pdfHtml5',
                text: 'PDF',
                title: 'Listado de Votantes',
                pageSize: 'FOLIO',
                orientation: 'landscape',
                exportOptions: {
                    columns: [2, 3, 4, 5, 6, 7, 8, 9]
                },
                margin: [0, 0, 0, 12],
                alignment: 'center',
                customize: function (doc) {
                    doc.content[1].table.widths =
                        Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                }
            },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    title: 'Listado de Votantes',
                    exportOptions: {
                        columns: [2, 3, 4, 5, 6, 7, 8,9],
                    }
                }]
        });
        $('<div />').addClass('dt-buttons mb-2 pb-1 float-right text-right').prependTo('#datatable-botones');
        console.log($table.DataTable().buttons());
        $table.DataTable().buttons().container().appendTo('#datatable-botones .dt-buttons');

        $('#datatable-botones').find('.btn-secondary').removeClass('btn-secondary').addClass('btn-primary');
    };

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
    $(function () {
        datatableInit();
    });

}).apply(this, [jQuery]);
