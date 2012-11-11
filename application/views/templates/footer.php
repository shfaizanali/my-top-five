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
                  <form class="list-form add-topic-form form-horizontal" action="index.php/do-add-topic" method="POST">
                    <div class="control-group title-cg">
                        <label class="control-label">Topic :</label>
                        <div class="controls">
                            <input class="input-xlarge inputTitle" type="text" name="topicname" placeholder="Type your topic here" />
                        </div>
                        <span class="help-block title-error" style="margin-left: 129px;">100 characters maximum</span>
                    </div>
                    


                    <div class="control-group desc-cg">
                        <label class="control-label">Description :</label>
                        <div class="controls">
                            <textarea rows="6" style="width:271px;" name="topic-description" placeholder="Enter the description about your topic" class="inputDescription"></textarea>
                        </div>    
                        <span class="help-block desc-error" style="margin-left: 129px;">500 characters maximum</span>
                    </div>
                    

                    <div class="control-group tags-controlgroup">
                        <label class="control-label">Tags :</label>
                        <div class="controls">
                            <div class="input-append">
                                <div class="input-prepend input-append">
                                    <span class="add-on"><i class="icon-tags"></i></span><input class="span4 inputTags typeahead" id="appendedPrependedInput" size="16" type="text" placeholder="Add tags to your list" autocomplete="off"/><button class="btn btn-inverse" id="addTags"type="button">Add</button>
                                </div>
                            </div>
                        </div>
                        <span class="help-block tags-error" style="margin-left: 129px;"></span>    
                    
                    </div>
                    <div class="tags-container"></div>
                    
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary form-submit">Add Topic</button>
                      </div>
                    </form>
            </div>
            
            <div class="modal hide fade" id="login" style="overflow: auto;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3>You must be logged in to perform this action</h3>
                  </div>
                <div style="padding: 128px 138px;">
                    <a href="<?= $loggedURL; ?>"><img src="<?= base_url(); ?>media/img/facebook-connect-button.png"></img></a>
                </div>
            </div>
    </body>
</html>