$(document).ready(function(){
    count = 0;
    countLimit = 3;
    
    $('.login-button').click(function(){
        var addr = $('.login-button').attr('id');
        window.location.href = addr;
    });
    
    $('#addTags').click(function(){
        $('.tags-error').hide();
        var tagValue = $.trim($('.inputTags').val());
        if(tagValue == '') {
            $('.tags-controlgroup').addClass('error');
            $('.tags-error').html('Keyword cannot be blank');
            $('.tags-error').show();
        }
        else if(tagExists(tagValue)) {
            $('.tags-controlgroup').addClass('error');
            $('.tags-error').html('You have already added this keyword');
            $('.tags-error').css('display','block');
        }
        else {
            count = getExistingTagsCount();
            if(count<countLimit) {
                checkErrorBefore();
                var tagsHTML = "<span class='"+tagValue+" tag'><input type='hidden' name='tags[]' value="+tagValue+" class='"+tagValue+"'/> <span class='label label-info'><a href='"+tagValue+"' class='remove-tag'><i class='icon-remove icon-white'></i></a><span class='tag-value'>"+tagValue+"</span></span></span>";
                $('.tags-container').append(tagsHTML);
                $('.tags-value').val('');
                $('.inputTags').val('');
            }
            else {
                $('.tags-controlgroup').addClass('error');
                $('.tags-error').html('You can add maximum of '+countLimit +" keywords");
                $('.tags-error').css('display','block');
                $('.tags-value').val('');
            }
        }
    });
    
    $(document).on("click", "a.remove-tag", function(e){
        e.preventDefault(); 
        $(this).parent().parent().remove();
    });
    
    
    $('.add-topic-form').on("submit",function(){
        clearErrorList();
        return validateForm();
    });
    
    $('#btnAddTopic').on("click",function(e){
        e.preventDefault();
        addTopic();
    })
});

function validateForm(){
    var flag = true;
    var title = $.trim($('.inputTitle').val());
    var desc = $.trim($('.inputDescription').val());
    
    if(title == ''){
        $('.title-cg').addClass('error');
        $('.title-error').html('Title cannot be left blank');
        flag = false;
    }
    if(desc == '') {
         $('.desc-cg').addClass('error');
         $('.desc-error').html('Title cannot be left blank');
         flag = false;
    }
    if(getExistingTagsCount() == 0) {
        $('.tags-controlgroup').addClass('error');
        $('.tags-error').html("You must add atleast 1 tag");
        $('.tags-error').css('display','block');
        flag=false;
    }

    if(flag == false) {
        console.log('false');
        return false;
    }
    else {
        return true;
    }
}

function checkErrorBefore(){
    if($('.tags-controlgroup').hasClass('error')){
        $('.tags-controlgroup').removeClass('error');
        $('.tags-error').css('display','none');
        $('.tags-error').html('');
    }
}
function getExistingTagsCount(){
    return $('.tags-container').children('.tag').size()
}
function tagExists(tagValue) {
    if($('.'+tagValue).length != 0) {
        return true;
    }
    else {
        return false;
    }
}

function addTopic() {
    $.ajax({
        url:'/my-top-five/index.php/User/isLoggedIn',
        type:'GET',
        beforeSend: function(){
            
        },
        complete: function(){
            
        },
        success: function(data){
            if (data == "0") {
                 showAddTopicModal();
            }
            else {
                 showLoginModal();
            }
        }
    });
}

function showAddTopicModal() {
    $('#addTopic').modal({
        show:true,
        backdrop:'static',
        keyboard: true
    });
}

function showLoginModal() {
    $('#login').modal({
        show:true,
        backdrop:'static',
        keyboard: true
    });
}
function clearErrorList() {
    $('.alert').css('display','none');
    $('.errorList').empty();
}

function displayErrorList(errorListArray) {
    $('.alert').css('display','block');
    for (i = 0;i<errorListArray.length;i++) {
        $('.errorList').append('<li>'+errorListArray[i]+'</li>');
    }
}
function addOverlay() {
    var docHeight = $(document).height();
    $("body").append("<div id='overlay'></div>");
    $("#overlay")
      .height(docHeight)
      .css({
         'opacity' : 0.4,
         'position': 'absolute',
         'top': 0,
         'left': 0,
         'background-color': 'black',
         'width': '100%',
         'z-index': 5000
    });
}

function removeOverlay() {
    $("#overlay").remove();
}