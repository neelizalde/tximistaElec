/**
 * Clientes
 * 
 * @author Nerea Elizalde <neelizalde@gmail.com>
 * @copyright 2020 Electrodomésticos Tximista
 */
$(() => {

    'use strict';

    // Activa el menú de Clientes
    Menu.active(Menu.Clientes);


    // *******************************************************
    // Inicia la tabla
    // *******************************************************
    
    let myTable = $('#dataTable');

    myTable.DataTable({
        language: {
            url: "js/datatable/lang/es.json"
        },
        dom: 'Bfprtipl',
        buttons: [
            {
                text: `<i class="fas fa-2x fa-plus-square"></i><div class="text">`,
                className: '',
                action: () => {
                    location.href = `/tximistaElec/app/Http/Controllers/Controller/cliente`;
                },
            }
        ],
        responsive: true,
        info: true,
        pageLength: 25,
        order: [[0, 1]],
        columnDefs: [
            {
                targets: [0, 1, 3],  
                responsivePriority: -1
            }
        ]
    }).on('init', () => {
        $("#colorlib-page").removeClass('loading');
    });

});