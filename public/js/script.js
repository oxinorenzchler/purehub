$(document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#post').on('focus', function(){

        $(this).attr('rows','5').attr('class','form-control mb-3');

        $(this).on('blur', function(){
            $(this).attr('rows','1').attr('class','form-control');
        });
        
        
    });
   

    //Image name preview
    $('form#post-form input[type="file"]').change(function(e) {
        var path = $('#attachment').val().split('\\').pop();
        $('#path-preview').html(path);
    });

    // Image Handler
    $('#post-form').on('submit', function(e){
        e.preventDefault();
        var formData = new FormData($('#post-form')[0]);
      
        $.ajax({
            url : '/publish',
            data : formData,
            contentType : false,
            cache : false,
            processData: false,
            method : 'POST'
        }).done(function(data){
            // location.reload();
            console.log(data);
        });

    });

    // publish post
    $('#publish-btn').on('click',function(){
        var text = $('#post').val();
        var img = $('#attachment').val().split('\\').pop();
        console.log(img);
        $.ajax({
            url:"/publishPost",
            data:{'text':text,'img':img},
            method:'POST'
        }).done(function(data){

           data = JSON.parse(data);

            var post = '<div class="panel panel-success post'+data.post.id+'"><div class="panel-heading"> <a href=""><img src="'+ data.path + data.user.profile_picture + '" height="50" width="50" class="img-circle" alt=""><span class="ml-1">'+ data.name +'</span></a> <span class="postTime'+data.post.id+'">'+ data.diffForHumans +'</span> <span class="dropdown text-right"> <button class="btn btn-default btn-sm dropdown-toggle pull-right" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="fas fa-cogs"></span> </button> <ul class="dropdown-menu" aria-labelledby="dropdownMenu1"> <li><a  onclick="showEdit('+data.post.id+')"><i class="fas fa-edit"></i> Edit</a></li> <li><a onclick="deletePost('+data.post.id+')"><i class="fas fa-trash"></i> Delete</a></li> </ul> </span> </div> <div class="panel-body"> <div class="text-body post-text'+data.post.id+'">'+ ( data.post.post_body != null ? '<p>'+ data.post.post_body+'</p>' : ' ') +'</div> <textarea name="editposttext'+ data.post.id +'" id="editposttext" cols="1" rows="3" class="form-control editposttext'+ data.post.id +'">'+ data.post.post_body +'</textarea> <button onclick="editPost('+ data.post.id +')" class="btn btn-sm btn-primary editpostbtn'+ data.post.id +'" id="editpostbtn">Save <i class="fas fa-save"></i></button> <button onclick="cancelEditPost('+ data.post.id +')" id="cancelpostbtn" class="btn btn-sm btn-secondary cancelpostbtn'+ data.post.id +'">Cancel <i class="fas fa-ban"></i></button> '+ (data.image != null ? '<div class="img-post-container"> <img src="'+ data.path + data.image +'" alt="'+ data.image +'" class="img-responsive post-img img-rounded"></div>' : ' ' ) +'</div> <div class="panel-footer"> <a class="postClass'+data.post.id+'" onclick="like('+data.user.id+','+data.post.id+')">Like <i class="far fa-heart"></i></a> <div class="commentDiv'+ data.post.id +'"> </div> <div class="row"> <div class="col-sm-1"></div> <div class="col-sm-11"> <div class="media"> <div class="media-left"> <a href="#"> <img class="media-object img-circle" src="'+ (data.picture == null ? data.defaultProfile : data.path + data.picture) +'" alt="'+data.name+'" height="30"> </a> </div> <div class="media-body"> <form action="" class="comment-form"> <div class="form-group"> <textarea name="comment-body" class="comment-body'+data.post.id+' form-control ta5" cols="65" rows="3" placeholder="Anong say mo?"></textarea> </div> <div class="form-group"> <button id="btn-comment" class="btn btn-primary btn-sm" onclick="comment('+data.post.id+')">Comment</button> </div> </form> </div> </div> </div> </div> </div> </div>';
            console.log(data.image);
            $('.postDiv').prepend(post);
            $('#post').val("");
            $('#path-preview').html(" ");
            $('#post-form')[0].reset();
            $('.comment-form').on('submit',function(e){
                e.preventDefault();
            });
            $('.alertpublish').show().fadeOut(2500);
        });

    });

    //publish comment 
    $('.comment-form').on('submit',function(e){
        e.preventDefault();
    });

    //Image name preview profile edit
    $('form#profile-picture-form input[type="file"]').change(function(e) {
        var path = $('#attachment').val().split('\\').pop();
        $('#path-preview').html(path);
    });

    //Change Profile
    $('#profile-picture-form').on('submit',function(e){
        e.preventDefault();

        var formData = new FormData($('#profile-picture-form')[0]);
      
        $.ajax({
            url : '/editProfilePicture',
            data : formData,
            contentType : false,
            cache : false,
            processData: false,
            method : 'POST'
        }).done(function(data){
            data = JSON.parse(data);
            console.log(data.path);
            $('#profile-picture').attr('src',data.profilePath+data.path);
            $('#path-preview').html(' ');
            $('.alertPP').show().fadeOut(2500);
        });

    });

});//End $(document).ready()


// Like
function like(id,postid){
    var postClass = '.postClass'+postid;

    $.ajax({
        url:'/like',
        data:{'user_id':id, 'post_id':postid},
        method:'POST', 
    }).done(function(){
        $(postClass).attr('onclick','unlike('+id+','+postid+')').html('Unlike').append(' <i class="fas fa-heart"></i>');
    });
}
// Dislike
function unlike(id,postid){
    var postClass = '.postClass'+postid;
    $.ajax({
        url:'/unlike',
        data:{'user_id':id, 'post_id':postid},
        method:'POST', 
    }).done(function(){
        $(postClass).attr('onclick','like('+id+','+postid+')').html('Like').append(' <i class="far fa-heart"></i>');
    });
}

//Comment
function comment(postid){
    var postid = postid;
    var comment = $(".comment-body"+postid).val();
    // console.log(comment);

    $.ajax({
        url:'/comment',
        data:{'postid':postid,'comment':comment},
        method:'POST'
    }).done(function(data){
        console.log(data);
    
        var comment = '<div class="row mt-2 mb-3"><div class="col-sm-12"><div class="media comment'+data.commentid+'"><div class="media-left"><a href="#"><img class="media-object img-circle" src="'+(data.user == null ? data.defaultProfile : data.path + data.user)+'" alt="'+data.name+'" height="30"></a></div><div class="media-body"><a href="" class="bold elegant">'+data.name+'</a><div class="text-body commenttext'+data.commentid+'"><p>'+data.comment+'</p></div><textarea name="editcommenttext'+data.commentid+'" id="editcommenttext" cols="1" rows="3" class="form-control editcommenttext'+data.commentid+'">'+data.comment+'</textarea><button onclick="editComment('+data.commentid+')" class="btn btn-sm btn-primary editcommentbtn'+data.commentid+'" id="editcommentbtn">Save <i class="fas fa-save"></i></button><button onclick="cancelEditComment('+data.commentid+')" id="cancelcommentbtn" class="btn btn-sm btn-secondary cancelcommentbtn'+data.commentid+'">Cancel <i class="fas fa-ban"></i></button><div class="pull-right"><a onclick="showComment('+data.commentid+')"><i class="fas fa-edit mr-1"></i></a><a onclick="deleteComment('+data.commentid+')"><i class="fas fa-trash"></i></a></div></div></div></div></div>';
        $('.commentDiv'+postid).append(comment);

        $('.comment-body'+postid).val("");
        
    });
}

//Show edit Post
function showEdit(postid){
    $('.editposttext'+postid).show();
    $('.post-text'+postid).hide();
    $('.editpostbtn'+postid).show();
    $('.cancelpostbtn'+postid).show();
}
// Cancel edit Post
function cancelEditPost(postid){
    $('.editposttext'+postid).hide();
    $('.post-text'+postid).show();
    $('.editpostbtn'+postid).hide();
    $('.cancelpostbtn'+postid).hide();
}
//Edit Post
function editPost(postid){
    // console.log(postid);
    var post = $('.editposttext'+postid).val();
    // console.log(post);
    $.ajax({
        url:'/editPost',
        data:{'post':post,'postid':postid},
        method:"PATCH"
    }).done(function(data){
        // console.log(data);
        $('.post-text'+postid).html(data.text);
        $('.postTime'+postid).html(data.updated_at);
        $('.editposttext'+postid).hide();
        $('.post-text'+postid).show();
        $('.editpostbtn'+postid).hide();
        $('.cancelpostbtn'+postid).hide();
        $('.alertedit').show().fadeOut(2500);
    });
}

//Delete Post
function deletePost(postid){
    var postid = postid;
    $.ajax({
        url:'/deletePost',
        data:{'postid':postid},
        method:'POST'
    }).done(function(data){
        console.log(data);
        $('.post'+postid).remove();
        $('.alertdelete').show().fadeOut(2500);
    });
   
}

//Show Edit Comment
function showComment(commentid){
    $('.editcommenttext'+commentid).show();
    $('.editcommentbtn'+commentid).show();
    $('.cancelcommentbtn'+commentid).show();
    $('.commenttext'+commentid).hide();
    // console.log(commentid);  
}

//Cancel Edit Comment 
function cancelEditComment(commentid){
    $('.editcommenttext'+commentid).hide();
    $('.editcommentbtn'+commentid).hide();
    $('.cancelcommentbtn'+commentid).hide();
    $('.commenttext'+commentid).show();
}

function editComment(commentid){
    var comment = $('.editcommenttext'+commentid).val();
    $.ajax({
        url:'/editComment',
        data:{'comment':comment,'commentid':commentid},
        method:'PATCH'
    }).done(function(data){
        console.log(data);
        $('.commenttext'+commentid).html(data.text);
        $('.editcommenttext'+commentid).hide();
        $('.editcommentbtn'+commentid).hide();
        $('.cancelcommentbtn'+commentid).hide();
        $('.commenttext'+commentid).show();
    });
}

//Delete Comment
function deleteComment(commentid){
    var commentid = commentid;
    // console.log(commentid);
    $.ajax({
        url:'/deleteComment',
        data:{'commentid':commentid},
        method:'DELETE'
    }).done(function(data){
        console.log(data);
        $('.comment'+commentid).remove();
    });
}  

// refresh people nearby
$('.refresh').on('click',function(){
    $('.people-nearby').load('/refresh');
});
    





