<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/14/17
 * Time: 8:38 PM
 */
include '../config/config.php';
include '../lib/database.php';
include '../helpers/format_helper.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin Area</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet">
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link pull-left" href="index.php">Dashboard</a>
            <a class="nav-link pull-left" href="add_post.php">Add Posts</a>
            <a class="nav-link pull-left" href="add_category.php">Add Category</a>
            <a class="nav-link pull-right" href="../index.php">Visit Blog</a>
        </nav>
    </div>
</div>

<div class="blog-header">
    <div class="container">
        <h1>Admin Area</h1>
    </div>
</div>

<div class="container">

    <div class="row">

        <div class="col-sm-12 blog-main">