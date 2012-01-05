<?php

class RedUNIT_Mysql_Setget extends RedUNIT_Mysql {

	public function run() {
	
	
		asrt(setget("-1"),"-1");
		asrt(setget(-1),"-1");
		asrt(setget("-0.25"),"-0.25");
		asrt(setget(-0.25),"-0.25");
		asrt(setget("0.12345678"),"0.12345678");
		asrt(setget(0.12345678),"0.12345678");
		asrt(setget("-0.12345678"),"-0.12345678");
		asrt(setget(-0.12345678),"-0.12345678");
		asrt(setget("2147483647"),"2147483647");
		asrt(setget(2147483647),"2147483647");
		asrt(setget(-2147483647),"-2147483647");
		asrt(setget("-2147483647"),"-2147483647");
		asrt(setget("2147483648"),"2147483648");
		asrt(setget("-2147483648"),"-2147483648");
		asrt(setget("199936710040730"),"199936710040730");
		asrt(setget("-199936710040730"),"-199936710040730");
		//Architecture dependent... only test this if you are sure what arch
		//asrt(setget("2147483647123456"),"2.14748364712346e+15");
		//asrt(setget(2147483647123456),"2.14748364712e+15");
		asrt(setget("2010-10-11"),"2010-10-11");
		asrt(setget("2010-10-11 12:10"),"2010-10-11 12:10");
		asrt(setget("2010-10-11 12:10:11"),"2010-10-11 12:10:11");
		asrt(setget("x2010-10-11 12:10:11"),"x2010-10-11 12:10:11");
		asrt(setget("a"),"a");
		asrt(setget("."),".");
		asrt(setget("\""),"\"");
		asrt(setget("just some text"),"just some text");
		asrt(setget(true),"1");
		asrt(setget(false),"0");
		asrt(setget("true"),"true");
		asrt(setget("false"),"false");
		asrt(setget("null"),"null");
		asrt(setget("NULL"),"NULL");
		asrt(setget("0123",1),"0123");
		asrt(setget("0000123",1),"0000123");
		asrt(setget(null),null);
		asrt((setget(0)==0),true);
		asrt((setget(1)==1),true);
		asrt((setget(true)==true),true);
		asrt((setget(false)==false),true);
	
	}

}