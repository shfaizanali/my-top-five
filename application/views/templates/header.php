<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url(); ?>media/css/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url(); ?>media/css/style.css">
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src ="<?= base_url(); ?>media/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>media/js/scripts.js"></script>
        <title>My Top Five</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="#">Top Five</a>
                    <ul class="nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="<?=  base_url(); ?>index.php/topic/addtopic">Add Topic</a></li>
                        <li><a href="<?=  base_url(); ?>index.php/list5/addlist">Add List</a></li>
                    </ul>
                    <ul class="nav pull-right">
                        <li ><a href="#">Login</a></li>
                        <li><a href="register">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="content">
                <div class="search-container">
                    <form action="#" id="search_box">
                        <div class="wrapper">
                            <input type="text" id="search" name="search" placeholder="Search for Lists" />
                            <button type="submit" class="btn btn-primary search-btn">Search</button>
                        </div>
                    </form>
                </div>