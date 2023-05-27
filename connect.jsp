<%@ page import = "java.sql.*"%>
<%
String FNAME=request.getParameter("FNAME");
String EMAIL=request.getParameter("EMAIL");
String CNO=request.getParameter("CNO");
String PW=request.getParameter("PW");

try{
	Class.forName("com.mysql.jdbc.Driver");
	Connection conn=DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root","");
	PreparedStatement ps = conn.prepareStatement("insert into registration(FNAME,EMAIL,CNO,PW)")values(?,?,?,?);");
	ps.setString(1,FNAME);
	ps.setString(2,EMAIL);
	ps.setString(3,CNO);
	ps.setString(4,PW);
	int x= ps.executeUpadate();
	if(x>0)
	{
		out.println("Registration done successfully...");
	}
	else{
	out.println("Registration failed...");
	}
}
catch( Exception e)
{
	out.println(e);
}
%>