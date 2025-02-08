<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 0px;
}
#customers tr {
height:10px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.invoice_container{
    position: relative;
    margin:auto;
    margin-top: 10px;
    margin-bottom: 100px;
    background-color:white;
    display:flex;
    width:80%;
    min-height:370px;
    border-radius: 15px 15px 0px 0px;
    overflow:scroll;
}
</style>
</head>
<body>
<div class="invoice_container">
<h1>A Fancy Table</h1>

<table id="customers">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>

</table>
</div>

</body>
</html>

