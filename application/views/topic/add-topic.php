<?php ?>
<div class="row">
    <div class="span8">
        <div class="row">
            <div class="span8">
                <legend>Add a New Topic</legend>
                <form class="list-form add-topic-form" action="http://www.google.com">
                    <div class="control-group">
                        <label>Topic</label>
                        <input class="input-xlarge inputTitle" type="text" placeholder="Type your topic here" />
                        <span class="help-block"></span>
                    </div>
                    


                    <div class="control-group">
                        <label>Description</label>
                        <textarea rows="6" style="width:271px;" placeholder="Enter the description about your topic" class="inputDescription"></textarea>
                        <span class="help-block"></span>
                    </div>
                    

                    <div class="control-group">
                        <label>Tags: </label>
                        <div class="input-append">
                            <div class="input-prepend input-append">
                                <span class="add-on"><i class="icon-tags"></i></span><input class="span4 inputTags" id="appendedPrependedInput" size="16" type="text" placeholder="Add tags to your list"><button class="btn btn-inverse" id="addTags"type="button">Add</button>
                            </div>
                        </div>
                        <span class="help-block"></span>    
                    </div>
                    <div class="tags-container"></div>

                    <button type="submit" class="btn btn-primary form-submit">Add Topic</button>


                </form>
            </div>
        </div>
    </div>