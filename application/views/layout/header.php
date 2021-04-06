<!DOCTYPE html>
<html>
     <head>
     <title>Tutorial CRUD Codeigniter</title>
     <style type="text/css">
          body {
               width: 50%;
               margin: 0 auto;
          }

          /* Judul Utama */
          h1.title {
               text-align: center;
          }

          /* Judul Halaman */
          .header {
               position: relative;
               margin-bottom: 20px;
          }
          .header:before,
          .header:after {
               display: table;
               content: '';
          }
          .header:after {
               clear: both;
          }
          .header .title {
               float: left;
          }
          .header .title h3 {
               padding: 0;
               margin: 0;
          }
          .header .action {
               float: right;
          }

          /* Tombol */
          .btn {
               display: inline-block;
               padding: 2px 5px;
               margin-bottom: 0;
               font-size: 14px;
               color: #333;
               text-align: center;
               vertical-align: middle;
               cursor: pointer;
               background-color: #ffffff;
               -webkit-border-radius: 3px;
               -webkit-border-radius: 3px;
               -webkit-border-radius: 3px;
               background-image: none !important;
               border: none;
               text-shadow: none;
               box-shadow: none;
               transition: all 0.12s linear 0s !important;
               font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
               text-decoration: none;
          }
          .btn-default {
               color: #333;
               background-color: #fff;
               border: 1px solid #ccc;
          }
          .btn-danger {
               color: #fff;
               background-color: #d9534f;
               border: 1px solid #d43f3a;
          }
          .btn-default, .btn-danger {
               text-shadow: 0 -1px 0 rgba(0,0,0,0.2);
               -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075);
               box-shadow: inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075);
          }

          /* Alert */
          .alert {
               border-width: 1px;
               border-color: #555555;
               border-style: solid;
               padding: 10px 15px;
               margin-bottom: 15px;
               border-radius: 3px;
           }
          .alert.alert-danger {
               color: #721c24;
               background-color: #f8d7da;
               border-color: #f5c6cb;
           }
           .alert.alert-success {
               color: #155724;
               background-color: #d4edda;
               border-color: #c3e6cb;
           }

          /* Forms */
          .form-group {
               margin-bottom: 20px;
          }
          .form-group label {
               display: block;
               margin-bottom: 5px;
          }
          input[type="text"],
          input[type="date"],
          input[type="number"] {
               box-sizing : border-box;
               width: 100%;
               border: 1px solid #cccccc;
               padding: 10px;
               border-radius: 3px;
               display: block;
          }

          /* Table */
          table {
               width: 100%;
               border-spacing: 0;
          }
          table tr th,
          table tr td {
               padding: 5px;
          }
          table thead {
               background-color: #333333;
          }
          table thead tr th {
               color: #ffffff;
               border-top: 1px solid #000000;
               border-right: 1px solid #000000;
               border-bottom: 1px solid #000000;
               text-align: left;
          }
          table thead tr th:first-child {
               border-left: 1px solid #000000
          }
          table tbody tr td {
               border-bottom: 1px solid #555555;
               border-right: 1px solid #555555;
          }
          table tbody tr td:first-child {
               border-left: 1px solid #555555;
          }
          footer {
               margin-top: 20px;
               color: #999999;
               text-align: center;
          }
     </style>
     </head>
<body>
     <h1 class="title">Tutorial CRUD Codeigniter</h1>