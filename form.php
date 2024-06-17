<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فرم اطلاعات کاربری</title>
</head>

<body dir="rtl" style="background-color: #35B4D4;color: #452641">
<form method="post" action="dovom.php">
		نام :  
		<br>
	<input type="text" name="txt1">
    	<br><br>
	نام خانوادگی : 
		<br><br>
	<input type="text" name="txt2">
		<br><br>
		جنسیت :
	<br>
		  <label>
		    <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0">
		   زن </label>
		  <br>
		  <label>
		    <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">
		   مرد </label>
		  <br>
		  <label>
		    <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_2">
		  ناشناس  </label>
		  <br><br>
  
	رمز خود را وارد کنید:
	<br>
  <input type="password" name="txt3">
	<br>
	<br> 
	 رمز خود را دوباره وارد کنید:
	<br>
	<input type="password" name="txt4">	
	<br><br>
	<label for="city">شهر شما:</label>
  <select id="city">
	<option value="1"></option>
	<option value="2">اصفهان</option>
	<option value="3">بابل</option>
    <option value="4">اسفراین</option>
	<option value="5">شیراز</option>
	<option value="6">مشهد </option>
	<option value="7">بندر عباس</option>
	<option value="8">گناباد</option>
	<option value="9">تهران</option>
	<option value="10">کرج</option>
	<option value="11">نیشابور</option>
	</select>
	
	  <br><br>
	<label for="city"> پایه تحصیلی شما:</label>
  <select id="city">
	  	<option value="1"></option>
	  	<option value="2">اول</option>
	    <option value="3">دوم</option>
	    <option value="4">سوم</option>
    	<option value="5">چهارم</option>
     	<option value="6">پنجم</option>
   	    <option value="7">ششم</option>
	  	<option value="8">هفتم</option>
    	<option value="9">هشتم</option>
    	<option value="10">نهم</option>
    	<option value="11">دهم</option>
    	<option value="12">یازدهم</option>
	  	<option value="13">دوازدهم</option>
	</select>
	<br><br><br>
	<input type="submit" value="ثبت اطلاعات" name="txt5">
	
</form>
	
</body>
</html>