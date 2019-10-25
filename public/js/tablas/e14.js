(function($) {

    'use strict';
    var table = $('#e14');
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
                    { data: "table.point.name", name:"puesto",orderable: true, searchable: true },
                    { data: "table.number", name:"mesa",orderable: true, searchable: true },
                    {
                        // name:"path",
                        data:"path",
                        render: function (data) {
                            return  '<a href="'+inf.data('url')+'/storage/'+data+'" data-plugin-lightbox data-plugin-options="{ \'type\'\:\'\image\'\ }" title="Caption"><img class="img-fluid" src="'+inf.data('url')+'/storage/'+data+'" width="145"></a>';
                        },
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "id", render: function (data, type, row) {
                            return '<a href="' + inf.data('url') + "/votation/e14/" + data + '/edit"' + ' class="on-default edit-row simple-ajax-modal"><i class="fas fa-pencil-alt"></i></a>  ' +
                                '<a href="#modalEliminar" data-nasg ="'+row.name+'" data-urldestroy = "' + inf.data('url') + '/votation/e14/' + data +'" class="on-default remove-row modal-basic " >' +
                                '<i class="far fa-trash-alt"></i>' +
                                '</a>';
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
            $('.image-popup-vertical-fit').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-img-mobile',
                image: {
                    verticalFit: true
                }

            });
        }
    );
}).apply(this, [jQuery]);
