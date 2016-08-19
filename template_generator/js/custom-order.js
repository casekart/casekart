function reload_datatable(){

    $('#mytable').dataTable().fnDestroy();
    var oTable = $('#mytable').dataTable({


        "ajax": "customerorder/load",

        "columns": [  

        {"data": "first_name"},

        {"data": "mobile_number"},

        {"data": "order_id"},

        {"data": "order_date"},

        {"data": "status"},
        {"render": function ( data, type, full, meta ) {
                 return '<a href="customerorder/detailed_order?id='+full.order_id+'">View order</a>';}},
        {"render": function ( data, type, full, meta ) {
                 return '<a href="customerorder/order_particular?id='+full.order_id+'">Download</a>';}}, 

        ]
    });
}
/*Get all data on load*/

$('document').ready(function(){

    reload_datatable();
});