<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
</head>
  <body>
    <h1>Registration Form</h1>
    <hr>
    <form>
      <table>
        <tr>
          <td align="left">Full Name:</td>
          <td align="left"><input type="text" name="Name" /></td>
        </tr>
        <tr>
          <td align="left">Email:</td>
          <td align="left"><input type="text" name="email" /></td>
        </tr>
        <tr>
          <td align="left">Password:</td>
          <td align="left"><input type="password" name="pass" /></td>
        </tr>

        <tr>
          <td align="left">Comment:</td>
          <td align="left">
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
          </td>
        </tr>

        <tr>
          <td align="left">Gender:</td>
          <td align="left">
            <input type="radio" name="gender" />Female
            <input type="radio" name="gender" />Male
            <input type="radio" name="gender" />Other
          </td>
        </tr>

        <tr>
          <td align="left">Please choose a hobby</td>
          <td align="left">
            <input type="checkbox" name="hobby1" />Singing
            <input type="checkbox" name="hobby2" />Dancing
            <input type="checkbox" name="hobby3" />Reading
          </td>
        </tr>

        <tr>
          <td align="left">Please choose a file</td>
          <td align="left"><input type="file" name="file" /></td>
        </tr> 

        <tr>
          <td align="left">
            <input type="submit" name="Submit" />
            <input type="reset" name="Reset" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
