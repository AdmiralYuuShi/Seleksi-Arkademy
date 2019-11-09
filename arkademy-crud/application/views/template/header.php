<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <title>ARKADEMY COFFEE SHOP</title>
</head>
<body>
<!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top bayang">
    <div class="container">
      <a class="navbar-brand" href=""><img src="<?= base_url() ?>assets/img/arkademy-logo.png" width="8%"><span class="judul"><span style="color: #FF8FB2;">ARKADEMY</span> COFFEE SHOP</span></a>
      <button class="nav-link btn text-white pr-5 pl-5" data-toggle="modal" data-target="#exampleModal" style="background-color: #FF8FB2;">ADD</button>
    </div>
  </nav>
