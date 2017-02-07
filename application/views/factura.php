<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/dashboard.css"); ?>" />

<style>
body{
}

div.well{
  height: 250px;
} 

.Absolute-Center {
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
}

.Absolute-Center.is-Responsive {
  width: 50%; 
  height: 50%;
  min-width: 200px;
  max-width: 400px;
  padding: 40px;
}

#logo-container{
  margin: auto;
  margin-bottom: 10px;
  width:200px;
  height:30px;
  /* background-image:url();*/
}
</style>

</head>
<body>


 <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reportes</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Exportar</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="">Facturas</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Factura</h1>
          <div class="row">
           <button type="button" class="btn btn-success">Pagada</button>
           <button type="button" class="btn btn-danger">Generar</button>
        <div class="col-xs-12">
        <div class="invoice-title">
          <h2>Factura</h2><h3 class="pull-right">Num # 12345</h3>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-6">
            <address>
            <strong>Beneficiario:</strong><br>
              Lorem Ipsum<br>
              1234 calle<br>
              num. 4B<br>
              México, Cp 52978
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>Enviado a:</strong><br>
              Lorem Ipsum<br>
              1234 calle<br>
              num. 4B<br>
              México, CP 52978
            </address>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <address>
              <strong>Forma de pago:</strong><br>
              Visa terminación **** 4242<br>
              correo@email.com
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>fecha de orden:</strong><br>
              Marzo 3, 2017<br><br>
            </address>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Resumén</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                                <tr>
                      <td><strong>Clave</strong></td>
                      <td class="text-center"><strong>Precio</strong></td>
                      <td class="text-center"><strong>Cantidad</strong></td>
                      <td class="text-right"><strong>Totales</strong></td>
                                </tr>
                </thead>
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->
                  <tr>
                    <td>BS-200</td>
                    <td class="text-center">$10.99</td>
                    <td class="text-center">1</td>
                    <td class="text-right">$10.99</td>
                  </tr>
                                <tr>
                      <td>BS-400</td>
                    <td class="text-center">$20.00</td>
                    <td class="text-center">3</td>
                    <td class="text-right">$60.00</td>
                  </tr>
                                <tr>
                        <td>BS-1000</td>
                    <td class="text-center">$600.00</td>
                    <td class="text-center">1</td>
                    <td class="text-right">$600.00</td>
                  </tr>
                  <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                    <td class="thick-line text-right">$670.99</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Envío</strong></td>
                    <td class="no-line text-right">$15</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Total</strong></td>
                    <td class="no-line text-right">$685.99</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
<button type="button" class="btn btn-primary">Exportar</button>


        </div>
      </div>
    </div>


<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>