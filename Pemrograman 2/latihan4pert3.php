<html>
    <head>
        <title>PenggunaanSwitch - Case</title>
        </head>
        <body>Hari ini :
            <?Php
                $nama_hari = date("l");
                    Switch ($nama_hari)
                    {
                          Case "Sunday" ;
                        Print("Minggu");
                	   print "Waktu untuk istirahat";
                       Break;
      Case "Monday" ;
        Print("Senin <br>");
	   print "Meeting awal minggu jam 08.00";
        Break;
      Case "Tuesday" ;
Print("Selasa <br>");
        print "Pembukaan Workshop Diklat";
        Break;
                    }