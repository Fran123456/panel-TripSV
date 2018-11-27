$("#table").dataTable({
      "language": {
        "url": "DataTables/lenguaje.js"
      },
      dom: 'Bfrtip',
        buttons: [

              {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [0, 2, 3,4,5 ]
                }
              },

              {
                extend: 'excel',
                exportOptions: {
                    columns: [0, 2, 3,4,5 ]
                }
              },
              
             
              {
                extend: 'pdfHtml5',
                  download: 'open',
                  exportOptions: {
                    columns: [ 0, 2, 3,4,5]
                }
              }
              ,'colvis'

              
          ],
    }); 


$("#unidades").dataTable({
      "language": {
        "url": "DataTables/lenguaje.js"
      },
      dom: 'Bfrtip',
        buttons: [

              {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [0, 1,2,3 ]
                }
              },

              {
                extend: 'excel',
                exportOptions: {
                    columns: [0, 1,2,3 ]
                }
              },
              
             
              {
                extend: 'pdfHtml5',
                  download: 'open',
                  exportOptions: {
                    columns: [0, 1,2,3 ]
                }
              }
              ,'colvis'

              
          ],
    }); 





$("#usuarios").dataTable({
      "language": {
        "url": "DataTables/lenguaje.js"
      },
      dom: 'Bfrtip',
        buttons: [

              {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [0, 1,3 ]
                }
              },

              {
                extend: 'excel',
                exportOptions: {
                    columns: [0, 1,3 ]
                }
              },
              
             
              {
                extend: 'pdfHtml5',
                  download: 'open',
                  exportOptions: {
                    columns: [0, 1,3 ]
                }
              }
              ,'colvis'

              
          ],
    });




$("#paquete").dataTable({
      "language": {
        "url": "DataTables/lenguaje.js"
      },
      dom: 'Bfrtip',
        buttons: [

              {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [0, 1,2 ]
                }
              },

              {
                extend: 'excel',
                exportOptions: {
                    columns: [0, 1,2 ]
                }
              },
              
             
              {
                extend: 'pdfHtml5',
                  download: 'open',
                  exportOptions: {
                    columns: [0, 1,2 ]
                }
              }
              ,'colvis'

              
          ],
    });








$("#multimedia").dataTable({
      "language": {
        "url": "DataTables/lenguaje.js"
      },
      dom: 'Bfrtip',
        buttons: [

              {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [0,2]
                }
              },

              {
                extend: 'excel',
                exportOptions: {
                    columns: [0,2 ]
                }
              },
              
             
              {
                extend: 'pdfHtml5',
                  download: 'open',
                  exportOptions: {
                    columns: [0,2 ]
                }
              }
              ,'colvis'

              
          ],
    });