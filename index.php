<title>Login</title><table width="100%" border="0">
  <tr>
    <td><form name="form1" method="post" action="ceklogin.php">
      <p>&nbsp;</p>
      <table width="34%" border="0" align="center" background="../../skripsi/images/background.jpg">
        <tr>
          <td colspan="3">&nbsp;</td>
          </tr>
        <tr>
          <td width="36%">User ID</td>
          <td width="2%">:</td>
          <td width="62%"><input type="text" name="userid" id="userid"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
          <td>Akses Sebagai</td>
          <td>:</td>
          <td><select name="akses" id="akses">
            <option>---Pilih---</option>
            <option value="admin">Admin</option>
            <option value="guru">Guru</option>
            <option value="siswa">Siswa</option>
          </select>          </td>
        </tr>
        <tr align="center">
          <td colspan="3"><input type="submit" name="button" id="button" value="Login">
            <input type="reset" name="button2" id="button2" value="Reset"></td>
          </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
