     
     //for dynamic id attributes in form
      var idcount=3;

     //calculate total weight
      var total=0;

      function addRow()
      {
        var table = document.getElementById("ftable");
        var index = table.rows.length;
        var row = table.insertRow(index);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        var cell7 = row.insertCell(6);
        var cell8 = row.insertCell(7);
        var cell9 = row.insertCell(8);
        var cell10 = row.insertCell(9);
        var cell11 = row.insertCell(10);
        var cell12 = row.insertCell(11);
        var cell13 = row.insertCell(12);
        var cell14 = row.insertCell(13);
        var cell15 = row.insertCell(14);
        var cell16 = row.insertCell(15);
        var cell17 = row.insertCell(16);
        var cell18 = row.insertCell(17);
        var cell19 = row.insertCell(18);
        var cell20 = row.insertCell(19);
        cell1.innerHTML = '<input type="text" name="fish[]" class="form-control width">';
        cell2.innerHTML = '<input type="text" name="uom[]" class="form-control">';
        cell3.innerHTML = '<input type="text" name="weight[]" onchange="autoweight(this.id,this.value)" id="weight['+idcount+']" class="form-control">';
        cell4.innerHTML = '<input type="number" step="0.1" min="0" id="size1d['+idcount+']" onchange="autoweight(this.id,this.value)" name="size1d[]" class="form-control">';
        cell5.innerHTML = '<input type="number" step="0.1" min="0" id="size1015['+idcount+']" onchange="autoweight(this.id,this.value)" name="size1015[]" class="form-control ">';
        cell6.innerHTML = '<input type="number" step="0.1" min="0" id="size12['+idcount+']" onchange="autoweight(this.id,this.value)" name="size12[]" class="form-control ">';
        cell7.innerHTML = '<input type="number" step="0.1" min="0" id="size23['+idcount+']" onchange="autoweight(this.id,this.value)" name="size23[]" class="form-control ">';
        cell8.innerHTML = '<input type="number" step="0.1" min="0" id="size34['+idcount+']" onchange="autoweight(this.id,this.value)" name="size34[]" class="form-control ">';
        cell9.innerHTML = '<input type="number" step="0.1" min="0" id="size35['+idcount+']" onchange="autoweight(this.id,this.value)" name="size35[]" class="form-control ">';
        cell10.innerHTML = '<input type="number" step="0.1" min="0" id="size45['+idcount+']" onchange="autoweight(this.id,this.value)" name="size45[]" class="form-control ">';
        cell11.innerHTML = '<input type="number" step="0.1" min="0" id="size46['+idcount+']" onchange="autoweight(this.id,this.value)" name="size46[]" class="form-control ">';
        cell12.innerHTML = '<input type="number" step="0.1" min="0" id="size56['+idcount+']" onchange="autoweight(this.id,this.value)" name="size56[]" class="form-control ">';
        cell13.innerHTML = '<input type="number" step="0.1" min="0" id="size58['+idcount+']" onchange="autoweight(this.id,this.value)" name="size58[]" class="form-control ">';
        cell14.innerHTML = '<input type="number" step="0.1" min="0" id="size68['+idcount+']" onchange="autoweight(this.id,this.value)" name="size68[]" class="form-control ">';
        cell15.innerHTML = '<input type="number" step="0.1" min="0" id="size810['+idcount+']" onchange="autoweight(this.id,this.value)" name="size810[]" class="form-control ">';
        cell16.innerHTML = '<input type="number" step="0.1" min="0" id="size1012['+idcount+']" onchange="autoweight(this.id,this.value)" name="size1012[]" class="form-control ">';
        cell17.innerHTML = '<input type="number" step="0.1" min="0" id="size1215['+idcount+']" onchange="autoweight(this.id,this.value)" name="size1215[]" class="form-control ">';
        cell18.innerHTML = '<input type="number" step="0.1" min="0" id="size15up['+idcount+']" onchange="autoweight(this.id,this.value)" name="size15up[]" class="form-control ">';
        cell19.innerHTML = '<input type="number" step="0.1" min="0" id="tcarton['+idcount+']" onchange="autoweight(this.id,this.value)" name="tcarton[]" class="form-control width2">';
        cell20.innerHTML = '<input type="number" step="0.1" min="0" id="tkg['+idcount+']" name="tkg[]" class="form-control width2">';
        idcount++;
      }

      function autoweight(id,val)
      {
        // var num2="3";
        // alert(parseInt(num2));
        var num=id.charAt(id.length - 2);

        if(document.getElementById("size1d["+num+"]").value=="")var one=0;else var one=document.getElementById("size1d["+num+"]").value;
        if(document.getElementById("size1015["+num+"]").value=="")var two=0;else var two=document.getElementById("size1015["+num+"]").value;
        if(document.getElementById("size12["+num+"]").value=="")var three=0;else var three=document.getElementById("size12["+num+"]").value;
        if(document.getElementById("size23["+num+"]").value=="")var four=0;else var four=document.getElementById("size23["+num+"]").value;
        if(document.getElementById("size34["+num+"]").value=="")var five=0;else var five=document.getElementById("size34["+num+"]").value;
        if(document.getElementById("size35["+num+"]").value=="")var six=0;else var six=document.getElementById("size35["+num+"]").value;
        if(document.getElementById("size45["+num+"]").value=="")var seven=0;else var seven=document.getElementById("size45["+num+"]").value;
        if(document.getElementById("size46["+num+"]").value=="")var eight=0;else var eight=document.getElementById("size35["+num+"]").value;
        if(document.getElementById("size56["+num+"]").value=="")var nine=0;else var nine=document.getElementById("size56["+num+"]").value;
        if(document.getElementById("size58["+num+"]").value=="")var ten=0;else var ten=document.getElementById("size58["+num+"]").value;
        if(document.getElementById("size68["+num+"]").value=="")var eleven=0;else var eleven=document.getElementById("size68["+num+"]").value;
        if(document.getElementById("size810["+num+"]").value=="")var twelve=0;else var twelve=document.getElementById("size810["+num+"]").value;
        if(document.getElementById("size1012["+num+"]").value=="")var thirth=0;else var thirt=document.getElementById("size1012["+num+"]").value;
        if(document.getElementById("size1215["+num+"]").value=="")var fourth=0;else var fourt=document.getElementById("size1215["+num+"]").value;
        if(document.getElementById("size15up["+num+"]").value=="")var fifth=0;else var six=document.getElementById("size15up["+num+"]").value;

        

        total=parseFloat(one)+parseFloat(two)+
        parseFloat(three)+parseFloat(four)+parseFloat(five)+
        parseFloat(six)+parseFloat(seven)+parseFloat(eight)+
        parseFloat(nine)+parseFloat(ten)+parseFloat(eleven)+
        parseFloat(twelve)+parseFloat(thirth)+parseFloat(fourth)+
        parseFloat(fifth);

        document.getElementById("tkg["+num+"]").value=Math.round(total * 10) / 10;

        document.getElementById("tcarton["+num+"]").value=parseFloat(document.getElementById("tkg["+num+"]").value)*parseFloat(document.getElementById("weight["+num+"]").value);
      }

     