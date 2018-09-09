package Quiz;

import java.awt.*;
import java.awt.event.*;
import java.sql.*;
import javax.swing.*;


public class login implements ActionListener {

public JFrame f;
public JButton b1,b2,b3,b4,b5, loginadmin, forgotadmin;
public static JTextField tf1;
JPasswordField pf1;
	
	public void loginn()
	{
		f = new JFrame("User Login");
		f.setLayout(null);
		
		ImageIcon logo = new ImageIcon("quizmania.jpg");
		JLabel l1 = new JLabel();
		l1.setIcon(logo);
		l1.setBounds(30,10,300,170);
	
		JPanel p2 = new JPanel();
		p2.setBackground(Color.black);
		p2.setLayout(null);
		p2.setBounds(20,100,980,50);
		
		b1 = new JButton("Home");
		b2 = new JButton("Login");
		b3 = new JButton("SignUp");
		b1.addActionListener(this);
		b3.addActionListener(this);
		b2.addActionListener(this);
		b1.setBackground(Color.black);
		b1.setForeground(Color.white);
		b2.setBackground(Color.black);
		b2.setForeground(Color.white);
		b3.setBackground(Color.black);
		b3.setForeground(Color.white);
		b1.setBounds(470,8,90,30);
		b2.setBounds(670,8,90,30);
		b3.setBounds(870,8,90,30);
		p2.add(b1);
		p2.add(b2);
		p2.add(b3);
		
		JPanel p3 = new JPanel();
		p3.setLayout(null);
		p3.setBounds(330,250,370,370);
		p3.setBackground(Color.cyan);
		ImageIcon icon = new ImageIcon("download.jpg");
		p3.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		
		JLabel l2 = new JLabel("Login");
		l2.setFont(new Font("Comic Sans MS",Font.BOLD,32));
		l2.setForeground(Color.red);
		l2.setBounds(150,10,300,50);
		p3.add(l2);
		
		JLabel l3 = new JLabel("UserId :");
		l3.setBounds(40,110,100,30); 
		tf1 = new JTextField("");
		tf1.setBounds(130,110,200,30);
		JLabel l4 = new JLabel("Password :");
		l4.setBounds(40,160,100,30);
		pf1 = new JPasswordField("");
		pf1.setBounds(130,160,200,30);
		p3.add(l3);
		p3.add(l4);
		p3.add(tf1);
		p3.add(pf1);
		
		b4 = new JButton("Forgot Password ?");
		b4.setBackground(Color.white);
		b4.setBounds(40,220,160,25);
		p3.add(b4);
		b5 = new JButton("Submit");
		b5.setBackground(Color.red);
		b5.setForeground(Color.white);
		b5.setBounds(50,295,270,30);
		p3.add(b5);
		
		b5.addActionListener(this);
				
		f.add(l1);
		f.add(p2);
		f.add(p3);
		f.setVisible(true);
		f.setSize(1025,750);
	}
	
	
	
	
	
	public void adminloginn()
	{
		f = new JFrame("Admin Logn");
		f.setLayout(null);
		
		ImageIcon logo = new ImageIcon("quizmania.jpg");
		JLabel l1 = new JLabel();
		l1.setIcon(logo);
		l1.setBounds(30,10,300,170);
	
		JPanel p2 = new JPanel();
		p2.setBackground(Color.black);
		p2.setLayout(null);
		p2.setBounds(20,100,980,50);
		
		b1 = new JButton("Home");
		b2 = new JButton("Login");
		b3 = new JButton("SignUp");
		b1.addActionListener(this);
		b3.addActionListener(this);
		b2.addActionListener(this);
		b1.setBackground(Color.black);
		b1.setForeground(Color.white);
		b2.setBackground(Color.black);
		b2.setForeground(Color.white);
		b3.setBackground(Color.black);
		b3.setForeground(Color.white);
		b1.setBounds(470,8,90,30);
		b2.setBounds(670,8,90,30);
		b3.setBounds(870,8,90,30);
		p2.add(b1);
		p2.add(b2);
		p2.add(b3);
		
		JPanel p3 = new JPanel();
		p3.setLayout(null);
		p3.setBounds(330,250,370,370);
		p3.setBackground(Color.cyan);
		ImageIcon icon = new ImageIcon("download.jpg");
		p3.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		
		JLabel l2 = new JLabel("Admin Login");
		l2.setFont(new Font("Comic Sans MS",Font.BOLD,32));
		l2.setForeground(Color.red);
		l2.setBounds(100,10,300,50);
		p3.add(l2);
		
		JLabel l3 = new JLabel("UserId :");
		l3.setBounds(40,110,100,30); 
		tf1 = new JTextField("");
		tf1.setBounds(130,110,200,30);
		JLabel l4 = new JLabel("Password :");
		l4.setBounds(40,160,100,30);
		pf1 = new JPasswordField("");
		pf1.setBounds(130,160,200,30);
		p3.add(l3);
		p3.add(l4);
		p3.add(tf1);
		p3.add(pf1);
		
		forgotadmin = new JButton("Forgot Password ?");
		forgotadmin.setBackground(Color.white);
		forgotadmin.setBounds(40,220,160,25);
		p3.add(forgotadmin);
		loginadmin = new JButton("Submit");
		loginadmin.setBackground(Color.red);
		loginadmin.setForeground(Color.white);
		loginadmin.setBounds(50,295,270,30);
		p3.add(loginadmin);
		
		loginadmin.addActionListener(this);
		
		f.add(l1);
		f.add(p2);
		f.add(p3);
		f.setVisible(true);
		f.setSize(1025,750);
	}
	
	
	
	public void actionPerformed (ActionEvent e)
	{
		
		if (e.getSource()==b1)
		{
			f.dispose();
			new home();
		}
		
		else if (e.getSource()==b3)
		{
			f.dispose();
			new signup();
		}
		
		else if (e.getSource()==b2)
		{
			tf1.setText("");
			pf1.setText("");
		}
		
		else if (e.getSource()==b5)
		{
			if (tf1.getText().toString().equals(""))
			{	JOptionPane.showMessageDialog(null,"Enter UserName");
				return;
			}
			
			else if (pf1.getText().toString().equals(""))
			{	JOptionPane.showMessageDialog(null,"Enter Password");
			    return;
			}
			
			try 
			{	Class.forName("oracle.jdbc.driver.OracleDriver");
				Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
				int flag=0;
				Statement st = con.createStatement();
				
				ResultSet check = st.executeQuery("select USERNO, PASSWORD from userlist");
				while (check.next())
				{
					String checkname = check.getString("USERNO");
					String checkpassword = check.getString("PASSWORD");
					if (tf1.getText().toString().equals(checkname))
					{
						if (pf1.getText().toString().equals(checkpassword)==false)
						{
							JOptionPane.showMessageDialog(null,"Wrong Password");
							return;
						}
						
						else
						{	
							JOptionPane.showMessageDialog(null,"Login Successfull");
							f.dispose();
							new loginhome();
							flag=1;
							//return;
						}
					}
				}
				if (flag==0)
				JOptionPane.showMessageDialog(null,"Wrong Username");
																				
				con.commit();
				st.close();
				con.close();
				
			} catch (Exception ae) 
				{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
			
			
			//check here whether the password/username is correct or not
			return;
			
		}
		
		else if (e.getSource()==loginadmin)
		{
			if (tf1.getText().toString().equals(""))
			{	JOptionPane.showMessageDialog(null,"Enter UserName");
				return;
			}
			
			else if (pf1.getText().toString().equals(""))
			{	JOptionPane.showMessageDialog(null,"Enter Password");
			    return;
			}
			
			try 
			{	Class.forName("oracle.jdbc.driver.OracleDriver");
				Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
				int flag=0;
				Statement st = con.createStatement();
				
				ResultSet check = st.executeQuery("select ADMINNO, PASSWORD from admin");
				while (check.next())
				{
					String checkname = check.getString("ADMINNO");
					String checkpassword = check.getString("PASSWORD");
					if (tf1.getText().toString().equals(checkname))
					{
						if (pf1.getText().toString().equals(checkpassword)==false)
						{
							JOptionPane.showMessageDialog(null,"Wrong Password");
							return;
						}
						
						else
						{	
							JOptionPane.showMessageDialog(null,"Login Successfull");
							f.dispose();
							new adminlogin();
							flag=1;
							//return;
						}
					}
				}
				if (flag==0)
				JOptionPane.showMessageDialog(null,"Wrong Username");
																				
				con.commit();
				st.close();
				con.close();
				
			} catch (Exception ae) 
				{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
			
			
			//check here whether the password/username is correct or not
			return;
			
			//establish connection to database and open inbox
		}
		
	}
	
	
	
	public static void main (String a[])
	{
		login obj = new login();
		obj.loginn();
	}
	
	
}
