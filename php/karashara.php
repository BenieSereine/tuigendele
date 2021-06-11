
<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "tuigendele");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		// i commented here becouse i dont use data from Data 
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['uname'];
		$tinnumber = $_REQUEST['number'];
		$phonenumber = $_REQUEST['phonenumber'];
		$amount = $_REQUEST['amount'];

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO karasharamye(name, tin_number, phone_number,amount) VALUES ('$name','$tinnumber','$phonenumber','$amount')";
		
// $statement = $conn->prepare($company_tin);
// $statement->execute([':tinnumber' => $tin_company ]);
// $person = $statement->fetch(PDO::FETCH_OBJ);
	
		if(mysqli_query($conn, $sql)){
			// send xml to Axiom Server
			$last_id = $conn->insert_id;
            $xml_tosend='<?xml version="1.0"?>
            <sdcrequest>
                <company>
                    <COMPANY_NAMES>ISHYIGA TEST</COMPANY_NAMES>
                    <COMPANY_TIN>999000022</COMPANY_TIN>
                    <COMPANY_SECURITY_KEY>BB8F7E1858GHNV4FD425E055A2369FAA12FC</COMPANY_SECURITY_KEY>
                </company>
                <header>
                    <FLAG>INVOICE</FLAG>
                    <NUM>'.$last_id.'</NUM>
                    <SALFCY>ALGO</SALFCY>
                    <INVDAT>20210426</INVDAT>
                    <CUR>RWF</CUR>
                    <BPCINV>'.$tinnumber.'</BPCINV>
                    <BPINAM>'.$name.'</BPINAM>
                    <TOTAL_VAT>152.54</TOTAL_VAT>
                    <TOTAL_AMOUNT>'.$amount.'</TOTAL_AMOUNT>
                    <ITEMS_COUNTS>1</ITEMS_COUNTS>
                </header>
                <item_list>
             <LIN>
             <ITMREF>MAZ001101</ITMREF>
             <ITMDES>Mazutu</ITMDES>
            <TAXRATE>18.0</TAXRATE>
            <TAXCODE>B</TAXCODE>
            <QUANTITY>1.00</QUANTITY>
            <UNITYPRICE>'.$amount.'</UNITYPRICE>
            <ITMDISCOUNT>0.0</ITMDISCOUNT>
            <BATCH></BATCH>
            <EXPIRE></EXPIRE>
            </LIN>
             </item_list>
            </sdcrequest>';
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,"http://196.223.240.182/ishyiga/api/send_vsdc_request.php");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$xml_tosend);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $server_output = curl_exec($ch);
            echo "response from server".$server_output;
            exit();
            // var_dump($server_output);
            curl_close ($ch); 
            // if($server_output)
		    echo '<script>alert("Thank you! Your data was saved successfully.")</script>';
			echo '<script>window.location.href="../home.php";</script>';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>