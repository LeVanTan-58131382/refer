$(function() {
    $('.js-basic-example').DataTable({
        responsive: true,

        // bổ sung
        pageLength: 5,
        language: {
            paginate: {
                previous: "<",
                next: ">"
            }
        },

        'oder': [
            [0, 'asc']
        ],
        "language": {
            "lengthMenu": "Hiên _MENU_ tin trong mỗi trang",
            "zeroRecords": "Không tìm thấy",
            "info": "Đang Hiện Trang _PAGE_ trong _PAGES_ trang",
            "infoEmpty": "Không có dòng nào",
            "infoFiltered": "(Lọc trong _MAX_ tin)",
            "search": "Tìm kiếm",
            "paginate": { "first": "<<", "last": ">>", "next": ">", "previous": "<" }
        }
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});