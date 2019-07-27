
$(document).ready(function () {
    
    function deletePost(){
        $('.delete').click(function (e) {
            
            let id = $(this).attr('data-post_id');
            console.log(id)
            $('.del').click(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: 'posts/'+id,
                    type: 'delete',
                    success : function ($result) {
                        $('#delete').modal('hide');
                        $('#post-'+id).remove();
                    }
                });
            });
            
        });
    }
    deletePost();
})