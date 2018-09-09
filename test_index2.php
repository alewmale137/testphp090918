<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #005;
    padding: 5px;
    text-align: center;
    font-size: 30px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 500px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #599;
    height: 500px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #097;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
  
  <article>
	
    <h1>ลงทะเบียน</h1>
    
    
<form method="post" action="result2.php">  
		ชื่อ:
		<input type="text" name="name" >
		
		นามสกุล:
		<input type="text" name="surname" >
		<br>
		<br>
		ที่อยู่:
		<input type="text" name="address" >
		
		<br>
		<br>
		เบอร์โทรศัพท์:
		<input type="text" name="number" >
		อีเมล:
		<input type="email" name="email">
		<br>
		<br>
		
		วันเกิด:
		<input type="text" name="birthday">
		
		อายุ:
		<input type="text" name="age" >
		
		
		เพศ:
		<select name="gender">
			<option value="ชาย">ชาย</option>
			<option value="หญิง">หญิง</option>
		 </select>
		<br>
		<br>
		<input type="submit" name="submit" value="Submit">  
		
		
		
	</form> 
	
  </article>
</section>



    </body>
</html>