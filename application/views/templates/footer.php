<?php
?>
            </div>
        </div>
            </div>
            <div class="modal hide fade" id="addTopic" style="overflow: auto;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3>Add a new Topic</h3>
                  </div>
                <div class="alert alert-error" style="display:none">
                    <strong>Please Fix the following errors</strong>
                    <ul class="errorList">
                        
                    </ul>
                </div>
                  <form class="list-form add-topic-form form-horizontal" action="http://www.google.com">
                    <div class="control-group">
                        <label class="control-label">Topic :</label>
                        <div class="controls">
                            <input class="input-xlarge inputTitle" type="text" placeholder="Type your topic here" />
                        </div>
                        <span class="help-block"></span>
                    </div>
                    


                    <div class="control-group">
                        <label class="control-label">Description :</label>
                        <div class="controls">
                            <textarea rows="6" style="width:271px;" placeholder="Enter the description about your topic" class="inputDescription"></textarea>
                        </div>    
                        <span class="help-block"></span>
                    </div>
                    

                    <div class="control-group">
                        <label class="control-label">Tags :</label>
                        <div class="controls">
                            <div class="input-append">
                                <div class="input-prepend input-append">
                                    <span class="add-on"><i class="icon-tags"></i></span><input class="span4 inputTags" id="appendedPrependedInput" size="16" type="text" placeholder="Add tags to your list"><button class="btn btn-inverse" id="addTags"type="button">Add</button>
                                </div>
                            </div>
                        </div>
                        <span class="help-block"></span>    
                    
                    </div>
                    <div class="tags-container"></div>
                    
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary form-submit">Add Topic</button>
                      </div>
                    </form>
            </div>
    </body>
</html>