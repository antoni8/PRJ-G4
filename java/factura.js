//if () {
    var conta = 0;
    //document.write(conta);
    function addRow() {
      conta = conta + 1;
      //document.write(conta);
      var table = document.getElementById("demo");
      var rowCount = table.rows.length;
      var rowGood = rowCount - 3;
      //table.innerHTML=rowGood;
      /*if (rowGood>1)
        table.deleteRow(rowGood);*/
      //table.write(conta);
      var row = table.insertRow(2);
      var cellref = row.insertCell(0);
      var cellnom = row.insertCell(1);
      var celltxt = row.insertCell(2);
      var cellalm = row.insertCell(3);
      var cellqtt = row.insertCell(4);
      var cellpreu = row.insertCell(5);
      var celldto = row.insertCell(6);
      var celliva = row.insertCell(7);
      var cellimp = row.insertCell(8);
      //var cellchck = row.insertCell(9);
      cellref.innerHTML = "<input type='text' name='referencia'>";
      cellnom.innerHTML = "<?php echo $hola->getNom($_GET['referencia']);?>";
      celltxt.innerHTML = "<input type='text' name='text' value='[vacío]'>";
      cellalm.innerHTML = "<input type='text' name='almacen'>";
      cellqtt.innerHTML = "<input type='number' name='quantitat'>";
      cellpreu.innerHTML = "<?php echo $preu;?>";
      celldto.innerHTML = "<?php echo $descompte;?>";
      celliva.innerHTML = "<?php echo $iva;?>";
      cellimp.innerHTML = "<?php echo $import;?>";
      //cellchck.innerHTML = "<input type='checkbox' name='check'>";
    }
    function deleteRow() {
      var table = document.getElementById("demo");
      var rowCount = table.rows.length;
      var rowGood = rowCount - 3;
      //table.innerHTML=rowGood;
      if (rowGood>1)
        table.deleteRow(rowGood);
    }
//}
