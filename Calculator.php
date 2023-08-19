<?php

include "menu.php";



print'<form action="Calculator.php" name="miformulario" Method="POST" >

<label>ingrese capital</label><br>
<input type="numero" name="capital" value="0" ><br>

<label>ingrese entrega</label><br>
<input type="text" value="0" name="entrega"><br>

<label>ingrese cantidad cuota</label><br>
<input type="text" value="0" name="cuota"><br>

<label>tasa de interes es 10% por defecto</label><br>
<input type="text" style="visibility:hidden" name="tasaInteres" value="10"><br>

<label>ingrese descuentos si corresponde</label><br>
<input type="text" value="0" name="descuento"><br>


</select><br><input type=submit class=btn btn-primary>

</form>';

if (isset($_REQUEST["capital">0]))
{
print "<div class='alert alert-success'><a href=# class=close data-dismiss=alert aria-label=close>&times;</a>
<strong>Registro Insertado!</strong></div>";}

$total=0;

    if ( $_REQUEST["capital"]>0){
    $entrega=$_REQUEST['entrega'];
    $contra_ent_=$_REQUEST['descuento'];
    
    $c =$_REQUEST['capital']-($entrega+$contra_ent_); // Capital inicial
    $n = $_REQUEST['cuota']; // Numero de CUOTAS
    $i =$_REQUEST['tasaInteres']/ 100; // Tasa de Interes
    
    
    $a = $c*(($i)/ (  1 - pow((1+$i) , ($n)*-1) )); // Calcular Amortizacion
    
    $a = number_format($a,2,".",""); // Formatear numero a 2 decimales
    $saldo_inicial = $c;
    $saldo_inicial = number_format((float)$saldo_inicial,2,".",""); // Formatear numero a 2 decimales
    
    //////// GENERAR TABLA
    echo "<h3>CUADRO O TABLA DE AMORTIZACION</h3>";
    echo "<table border=1>";
    echo "<td>No.</td>";
    echo "<td>Saldo Inicial</td>";
    echo "<td>Amortizacion</td>";
    echo "<td>Interes</td>";
    echo "<td>Abono Capital</td>";
    echo "<td>Saldo Final</td>";
    
    for($ix=1; $ix<=$n; $ix++){
    $interes = $saldo_inicial*$i; // se calcula el interes para este ciclo
    $interes = number_format((float)$interes,2,".",""); // Formatear numero a 2 decimales
    
    $abono_capital = $a - $interes; // el abono a capital es la amortizacion menos el interes del ciclo
    $abono_capital = number_format((float)$abono_capital,2,".",""); // Formatear numero a 2 decimales
    
    $saldo_final = $saldo_inicial - $abono_capital;
    $saldo_final = number_format((float)$saldo_final,2,".",""); // Formatear numero a 2 decimales
    
    echo "<tr>";
    echo "<td>".$ix."</td>";
    echo "<td>".$saldo_inicial."</td>";
    echo "<td>".$a."</td>";
    echo "<td>".$interes."</td>";
    echo "<td>".$abono_capital."</td>";
    echo "<td>".$saldo_final."</td>";
    
    echo "<tr>";
    
    $saldo_inicial = $saldo_final;
    $saldo_inicial = number_format((float)$saldo_inicial,2,".",""); // Formatear numero a 2 decimales
    $total=$total+$a;
    }
    
    echo "</table>";

   
}
  $total_final =($total+$entrega+$contra_ent_);
  $ii=$i*100;
  $ixx=$ix-1;
  print"<h3>Total Importe:</h3>";print"<h3>$total_final</h3>";  
  print "<h3>Cantidad cuota:$ixx</h3>";
  print"<h3> Monto cuota: $a</h3>";
  print"<h3>con una entrega de: $entrega</h3>";
  print"<h3>y un descuento de: $contra_ent_</h3>";
  
 
?>