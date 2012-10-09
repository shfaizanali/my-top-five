$(document).ready(function(){
    count = 0;
    countLimit = 3;
    $('.login-button').click(function(){
        var addr = $('.login-button').attr('id');
        window.location.href = addr;
    });
    
    $('#addTags').click(function(){
        var tagValue = $('.inputTags').val();
        var tagsHTML = "<span class='"+tagValue+"'><input type='hidden' name='tags[]' value="+tagValue+" class='"+tagValue+"'/> <span class='label label-info'><a href='"+tagValue+"' class='remove-tag'><i class='icon-remove icon-white'></i></a><span class='tag-value'>"+tagValue+"</span></span></span>";
        $('.tags-container').append(tagsHTML);
        $('.tags-value').val('');
    });
    
    $('.add-topic-form').submit(function(){
        var flag = true;
        if($('.inputTitle').val() == ''){
            $('.inputTitle').parent('.control-group').addClass('error');
            $('.inputTitle').siblings('.help-block').html('Title cannot be left blank');
            flag = false;
        }
        if($('.inputDescription').val() == '') {
            $('.inputDescription').parent('.control-group').addClass('error');
            $('.inputDescription').siblings('.help-block').html('Title cannot be left blank');
            flag = false;
        }
        return flag;
    })
});

