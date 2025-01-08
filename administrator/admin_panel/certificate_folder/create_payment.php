<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
        font-family: "main_text";
        src: url(../../../asset/font/Syncopate/Syncopate-Regular.ttf);
        }
        @font-face {
            font-family: "sub_text";
            src: url(../../../asset/font/Afacad_Flux/AfacadFlux-VariableFont_slnt,wght.ttf);
        }
        form{
            font-family:"sub_text";
            color:#005720;
        }
        header h1{
            font-size:1.5rem;
            margin-bottom:20px;
            margin-top:20px;
            color:#005720;
        }
        #purpose_cert,#OR_no,#amount,#date_issue_print{
            width: 100%;
            height:40px;
            margin-top:10px;
            margin-bottom: 10px;
            padding: 0px 0px 0px 10px ;
            border:none;
            border-radius:2px;
        }
        #purpose_cert:focus,#OR_no:focus,#amount:focus,#date_issue_print:focus{
            outline:3px solid #4A9D4f;
            
        }
        label{
            font-size:1.3rem;
            font-weight:600;
        }
        #submit,#cancel{
            padding: 15px;
            margin-right:20px;
            margin-top:20px;
            margin-bottom:20px;
            cursor:pointer;
            border:none;
            border-radius:2px;
            color:white;
        }
        #submit{
            background-color:#4A9D4f;
        }
        #submit:hover{
            background-color:#3cca46;
        }
        #cancel{
            background-color:red;
        }
        #cancel:hover{
            background-color:rgb(255, 113, 113);
        }
    </style>
</head>
<body>
    <header>
        <h1 class = "h1">Create Payment</h1>
    </header>

    <form action="/BIS/administrator/admin_panel/certificate_folder/revenue_insert.php" method = "POST" id = "certForm">
        

        <label for="">Amount</label><br>
        <input type="number" name = "amount" min = "0" placeholder = "Enter Amount"  id = "amount"  step="0.00001" required><br>

        <label for="">Date issue</label><br>
        <input type="date" name = "current_date" placeholder = "Enter Amount"  id = "date_issue_print" required><br>


        <input type="hidden" name = "id_print" id = "id_print">
        <input type="hidden" name = "firstname_print" id = "firstname_print">
        <input type="hidden" name = "middlename_print" id = "middlename_print">
        <input type="hidden" name = "lastname_print" id = "lastname_print">
        <input type="hidden" name = "document_print" id = "document_print">
        <input type="hidden" name = "OR_no_print" id = "OR.no_print">
        <input type="hidden" name = "status_print" id = "status_print">
       



        <input type="submit" name = "sub_print" id = "submit">
       <input type="button" id = "cancel" onclick="this.parentElement.parentElement.parentElement.style.display='none';" value = "Cancel" id = "cancel">
    </form>
    


</body>
</html>