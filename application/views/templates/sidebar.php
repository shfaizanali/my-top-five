<?php ?>
<div class="span3">
    <div class="side-bar">
        <legend>Top Members</legend>
        <?php for ($count=0;$count<3;$count++):?>
        <div class="top-members"> 
            <div class="image-container">
                <img src="http://localhost/my-top-five/me.jpg"></img>
            </div>
            <a href="#" class="member-name">Lorem Ipsum</a>
            <div>
                <i class="icon-plus-sign"></i>                                       
                <a href="#" class="follow-sidebar"><b>Follow</b></a> 
            </div>
            
            <div class="member-info">
                <div class="member-stats">
                    <span class="stat"><span class="mini-count">8</span><a href="#">followers</a></span>
                    <span class="stat"><span class="mini-count">8</span><a href="#">topics</a></span>
                    <span class="stat"><span class="mini-count">8</span><a href="#">lists</a></span>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
    <div class="side-bar">
        <legend>Top Lists</legend>
        <?php for ($count=0;$count<3;$count++):?>
        <div class="mini-list">
            <div class="member-name mini-list-name">
                <a href="#">Lorem ipsum dolor sit amet, elit, consectetur adipisicing </a>
            </div>
            <div class="member-stats">
                <span class="stat"><span class="mini-count">8</span><a href="#">followers</a></span>
                <span class="stat"><span class="mini-count">8</span><a href="#">topics</a></span>
                <span class="stat"><span class="mini-count">8</span><a href="#">lists</a></span>
            </div>
        </div>
        <?php endfor;?>
    </div>
</div>