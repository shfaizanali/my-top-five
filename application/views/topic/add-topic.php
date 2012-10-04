<?php
?>
<div class="row">
    <div class="span8">
        <div class="row">
            <div class="span8">
                <legend>Add a New Topic</legend>
                <form class="list-form">

                      <label>Topic</label>
                      <div class="control-group">
                          <input class="input-xlarge" type="text" placeholder="Type your topic here">
                      </div>
                      <span class="help-block"></span>

                      <label>Description</label>
                      <div class="control-group">
                          <textarea rows="6" style="width:271px;" placeholder="Enter the description about your topic"></textarea>
                      </div>
                      <span class="help-block"></span>

                      <label>Tags: </label>
                      <div class="input-append">
                            <div class="input-prepend input-append">
                                <span class="add-on"><i class="icon-tags"></i></span><input class="span4" id="appendedPrependedInput" size="16" type="text" placeholder="Add tags to your list"><button class="btn btn-inverse" type="button">Add</button>
                            </div>
                      </div>
                      <span class="help-block"><span class="label">Music</span></span>


                      <button type="submit" class="btn btn-primary form-submit">Add Topic</button>


                </form>
            </div>
        </div>
</div>