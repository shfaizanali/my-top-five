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
        clearErrorList();
        var errorList = new Array();
        if($('.inputTitle').val() == ''){
            errorList.push("Title cannot be left blank")
            flag = false;
        }
        if($('.inputDescription').val() == '') {
            errorList.push("Description cannot be left blank")
            flag = false;
        }
        
        if(flag == false) {
            displayErrorList(errorList);
            return false;
        }
        else {
            return true;
        }
    });
    $('.typeahead').typeahead({
    source: function (query, process) {
        return $.get('/my-top-five/index.php/Topic/getTagsList', { query: query }, function (data) {
            return(process(data.options));
        });
    }
});
});

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