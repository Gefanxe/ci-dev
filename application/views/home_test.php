<?php
defined('BASEPATH') or exit('No direct script access allowed');
$CI = &get_instance();
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
	<head>
	  <base href="<?=base_url() . 'public/';?>"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>資料顯示範例</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <style>
      table {
        border-spacing: 1;
        border-collapse: collapse;
        background: white;
        border-radius: 6px;
        overflow: hidden;
        max-width: 800px;
        width: 100%;
        margin: 0 auto;
        position: relative;
      }
      table * {
        position: relative;
      }
      table td, table th {
        padding-left: 8px;
      }
      table thead tr {
        height: 60px;
        background: #FFED86;
        font-size: 16px;
      }
      table tbody tr {
        height: 48px;
        border-bottom: 1px solid #E3F1D5;
      }
      table tbody tr:last-child {
        border: 0;
      }
      table td, table th {
        text-align: left;
      }
      table td.l, table th.l {
        text-align: right;
      }
      table td.c, table th.c {
        text-align: center;
      }
      table td.r, table th.r {
        text-align: center;
      }

      @media screen and (max-width: 35.5em) {
        table {
          display: block;
        }
        table > *, table tr, table td, table th {
          display: block;
        }
        table thead {
          display: none;
        }
        table tbody tr {
          height: auto;
          padding: 8px 0;
        }
        table tbody tr td {
          padding-left: 45%;
          margin-bottom: 12px;
        }
        table tbody tr td:last-child {
          margin-bottom: 0;
        }
        table tbody tr td:before {
          position: absolute;
          font-weight: 700;
          width: 40%;
          left: 10px;
          top: 0;
        }
        table tbody tr td:nth-child(1):before {
          content: "Code";
        }
        table tbody tr td:nth-child(2):before {
          content: "Stock";
        }
        table tbody tr td:nth-child(3):before {
          content: "Cap";
        }
        table tbody tr td:nth-child(4):before {
          content: "Inch";
        }
        table tbody tr td:nth-child(5):before {
          content: "Box Type";
        }
      }
      body {
        background: #9BC86A;
        font: 400 14px 'Calibri','Arial';
        padding: 20px;
      }

      blockquote {
        color: white;
        text-align: center;
      }
    </style>

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
  	<![endif]-->

  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>id</th>
          <th>姓名</th>
          <th>電話</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($friends as $f): ?>
          <tr>
            <td><?php echo $f->id; ?></td>
            <td><?php echo $f->name; ?></td>
            <td><?php echo $f->tel; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </body>
</html>