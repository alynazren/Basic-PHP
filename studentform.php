<html>
<head>
    <title>Student Details Form </title>    
</head>
<body style="text-align: center;">
    <font face="arial" size="2" color="white">
     <form method="post" action="studentdetails.php">
      <table style="margin:auto; text-align:'left';">
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="name" size="30" required></td>
        </tr>
        <tr>
            <td>Matric No</td>
            <td>:</td>
            <td><input type="text" name="matricNo" size="30" required></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td><input type="radio" name="gender" size="30" value="Male">Male 
            <input type="radio" name="gender" size="30" value="Female">Female</td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>:</td>
            <td><input type="text" name="dob" size="30"></td>
        </tr>
        <tr>
            <td>citizenship</td>
            <td>:</td>
            <td><input type="text" name="citizen" size="30"></td>
        </tr>
        <tr>
            <td>Marital Status</td>
            <td>:</td>
            <td><input type="radio" name="marital" size="30" value="Single">Single 
            <input type="radio" name="marital" size="30" value="Married">Married</td>
        </tr>
        <tr>
            <td>Religion</td>
            <td>:</td>
            <td>
                <select name="religion">
                    <option value="">Please select here</option>
                    <option value="Islam">Islam</option>
                    <option value="Chinesse">Chinese</option>
                    <option value="Indian">Indian</option>
                    <option value="Others">Others</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Active</td>
            <td>:</td>
            <td><input type="radio" name="activ" size="30">Active 
            <input type="radio" name="notactiv" size="30">Not active</td>
        </tr>
        <tr>
            <td>Current Year</td>
            <td>:</td>
            <td><input type="text" name="currentYear" size="30" required></td>
        </tr>
        <tr>
            <td>ID No</td>
            <td>:</td>
            <td><input type="text" name="idno" size="30"></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td>:</td>
            <td><input type="text" name="email" size="30" required></td>
        </tr>  
        
      </table><br><br>
      <input type="submit" value="Submit">
        <input type="reset" value="Reset">
     </form>
    </font>
</body>
</html>