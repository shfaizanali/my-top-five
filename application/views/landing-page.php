<?php

?>
 <div class="row">
    <div class="span9">
        <div class="row">
            <div class="span9">
                <legend>Recent Lists</legend>
                <?php for($i=0;$i<10;$i++) { ?>
                <div class="row-container">
                    <div class="list-row">
                        <div class="pull-left list-topic-container">
                            <div class="image-container">
                                <img src="<?= base_url(); ?>/me.jpg">
                            </div>
                            <div class="topic-main" ><a href="#" class="main-list">Lorem ipsum dolor sit amet, elit, consectetur adipisicing ipsum dolor sit amet, eli</a></div>

                        </div>

                        <div class="pull-right count-container">
                            
                            <div class="large-count">10</div>
                            <div class="count-lists">Lists</div>
                        </div>
                    </div>
                    <div class="member-stats-main">
                                <span class="stat">
                                <span class="tags-word"><span class="stats-count"><i class="icon-tags"></i></span>                                            
                                    <b>Tags : </b> 
                                    <span class="label">Music</span>
                                    <span class="label">Music</span>
                                    <span class="label">Music</span>
                                    <span class="label">Music</span>
                                    <span class="label">Music</span>
                                    <span class="label">Music</span>
                                    
                                </span>
                                </span>
                                <span class="stat owner-and-created">
                                <span class="tags-word">                                           
                                    <span class="owner-name"><a href="#">Faizan Ali</a></span>
                                </span>
                                <span class="tags-word">                                           
                                    <span class="time">8 minutes ago</span>
                                </span>
                                </span>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
