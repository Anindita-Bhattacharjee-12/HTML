<!DOCTYPE html>
<html>
 <style>
    h1{
       font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
       font-size:xx-large;
    }
    h2{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size:90%;
    }
    body{
        background-color:lightblue;
    }
    table{
        margin-top:auto ;
        height:40%;
        width:60%;
        border:2px;
        background-color: white;
        padding: 5px;
        margin-right: auto;

    } 
    tr{
        padding: 0px;
        font-size: small;
    }
    td{
        padding: 0px;
        font-size: small;
    }
    input[type="text"]{
        padding: 5px;
        width: 90%;
    }
    input[type="submit"]{
        border:0px;
        background-color: blue;
    }
    div{
        border:1px solid red;
        height:50px;
        width:200px;
        overflow: scroll;
    }
 </style>       
    <body>
        <h1 style="color: darkslateblue; text-align: center;">Bank Management System</h1>
        <p style="color: darkslateblue; text-align: center;">Your Trusted Financial Partner</p>
        <h2 align="left">Customer Registration Form</h2>
        <table>
            <tr>
               <td>Full Name:</td><td><input type="text"></td> 
            </tr>
            <tr>
               <td>Date of Birth</td><td><input type="date"></td> 
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="des">Male 
                    <input type="radio" name="des">Female
                    <input type="radio" name="des">Other
                </td>
            </tr>
            <tr>
            <td>Marital Status:</td>  
            <td>
            <select>
            <option value=" ">Single</option>
           <option value=" ">Married</option> 
           </select>
           </td>
           </tr>
           <tr>
            <td>Account Type:</td>
            <td>
            <select>
            <option value=" ">Savings</option>
            </select>
            </td>
           </tr>
           <tr>
               <td>Initial Deposite Amount:</td><td><input type="text"></td> 
            </tr>
            <tr>
               <td>Mobile Number:</td><td><input type="text"></td> 
            </tr>
            <tr>
               <td>Email Address:</td><td><input type="text"></td> 
            </tr>
            <tr>
               <td>Address:</td><td><input type="text"></td> 
            </tr>
            <tr>
               <td>Occupation:</td><td><input type="text"></td> 
            </tr>
            <tr>
               <td>National ID(NID):</td><td><input type="text"></td> 
            </tr>
            <tr>
               <td>Set Password:</td><td><input type="text"></td> 
            </tr>
            <tr>
            <td>Upload ID Proof</td><td><input type="file"></td>    
            </tr>
            <tr>
                <td>
                <input type="checkbox">I agree to the term and conditions</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register">
                <input type="submit" value="Clear"></td>
                </tr>
        </table>
        <div>
            This is the demo task to show how overflow works in a container---------
        </div>
    </body>
</html>