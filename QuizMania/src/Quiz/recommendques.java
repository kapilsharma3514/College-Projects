package Quiz;

import javax.swing.*;

import java.awt.event.*;
import java.awt.*;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

public class recommendques implements ActionListener {

	JFrame f;
	login obj = new login();
	String u_name = obj.tf1.getText().toString();
	//String u_name = "kapil_sharma";
	JTextField tf1, tf2, tf3, tf4, tf5, correct, topicnum;
	JButton submit, cancel, b1, b2;
	
	public recommendques()
	{
		f = new JFrame("Recommend A Question");
		f.setLayout(null);
		
		ImageIcon logo = new ImageIcon("quizmania.jpg");
		JLabel l1 = new JLabel();
		l1.setIcon(logo);
		l1.setBounds(30,10,300,170);
	
		JLabel hi = new JLabel("Hi "+u_name+" !");
		hi.setBounds(750,30,200,60);
		hi.setFont(new Font("Comic Sans MS", Font.PLAIN, 24));
		
		JPanel p2 = new JPanel();
		p2.setBackground(Color.black);
		p2.setLayout(null);
		p2.setBounds(20,100,980,50);
		
		
		b1 = new JButton("Logout");
		b1.setBackground(Color.black);
		b1.setForeground(Color.white);
		b1.setBounds(870,8,90,30);
		p2.add(b1);
		
		b2 = new JButton("Home");
		b2.setBackground(Color.black);
		b2.setForeground(Color.white);
		b2.setBounds(670,8,90,30);
		p2.add(b2);
		
		b1.addActionListener(this);
		b2.addActionListener(this);

		
		JPanel p3 = new JPanel();
		p3.setBackground(Color.cyan);
		p3.setLayout(null);
		p3.setBounds(200,245,620,400);
		ImageIcon icon = new ImageIcon("download.jpg");
		p3.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		
		JLabel q = new JLabel("Ques :");
		q.setBounds(30,50,50,50);
		p3.add(q);
		
		tf1 = new JTextField();
		tf1.setBounds(80,50,500,40);
		p3.add(tf1);
		
		tf2 = new JTextField();
		tf2.setBounds(120,100,160,30);
		JLabel a = new JLabel("A:");
		a.setBounds(100,100,50,30);
		
		tf3 = new JTextField();
		tf3.setBounds(370,100,160,30);
		JLabel b = new JLabel("B:");
		b.setBounds(350,100,50,30);
		
		tf4 = new JTextField();
		tf4.setBounds(120,140,160,30);
		JLabel c = new JLabel("C:");
		c.setBounds(100,140,50,30);
		
		tf5 = new JTextField();
		tf5.setBounds(370,140,160,30);
		JLabel d = new JLabel("D:");
		d.setBounds(350,140,50,30);
		
		correct = new JTextField();
		correct.setBounds(240,190,160,30);
		JLabel lcorrect = new JLabel("Correct Ans:");
		lcorrect.setBounds(150,190,160,30);
		
		JLabel tnum = new JLabel("Enter Topic Name:");
		tnum.setBounds(30,265,160,30);
		topicnum = new JTextField();
		topicnum.setBounds(150,265,160,30);
		
		
		submit = new JButton("Submit");
		cancel = new JButton("Cancel");
		submit.setBounds(290,330,120,40);
		submit.setBackground(Color.red);
		cancel.setBackground(Color.red);
		cancel.setBounds(440,330,120,40);
		p3.add(submit); p3.add(cancel);
		
		submit.addActionListener(this);
		cancel.addActionListener(this);
		
		p3.add(tf2); p3.add(tf3); p3.add(tf4); p3.add(tf5); p3.add(correct);
		p3.add(a); p3.add(b); p3.add(c); p3.add(d); p3.add(lcorrect);
		p3.add(tnum); p3.add(topicnum);
		
		f.add(l1);
		f.add(p2);
		f.add(p3);
		f.add(hi);
		f.setVisible(true);
		f.setSize(1025,750);
	}
	
	
	
	public void actionPerformed (ActionEvent ae)
	{
		if (ae.getSource()==cancel || ae.getSource()==b2)
		{
			f.dispose();
			new loginhome();
		}
		
		else if (ae.getSource()==b1)
		{
			f.dispose();
			new home();
		}
		
		else if (ae.getSource()==submit)
		{
			if (correct.getText().toString().equals("") ||
				tf1.getText().toString().equals("") ||
				tf2.getText().toString().equals("") ||
				tf3.getText().toString().equals("") ||
				tf4.getText().toString().equals("") ||
				tf5.getText().toString().equals("") ||
				topicnum.getText().toString().equals("") )
			{
				JOptionPane.showMessageDialog(null, "One or more fields is empty !");
				return;
			}
			
			if (correct.getText().toString().equals(tf2.getText().toString())==false
		      && correct.getText().toString().equals(tf3.getText().toString())==false
		      && correct.getText().toString().equals(tf4.getText().toString())==false
		      && correct.getText().toString().equals(tf5.getText().toString())==false )
			{
				JOptionPane.showMessageDialog(null, "Answer should match with one of the options provided !");
				return;
			}
			
			int flag=0, tnumber;
			
			try 
			{	Class.forName("oracle.jdbc.driver.OracleDriver");
				Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
				
				Statement st = con.createStatement();
				System.out.println(topicnum.getText().toString());
				ResultSet check = st.executeQuery("select count(*) from topics where topicname = '"+topicnum.getText().toString()+"'");
				check.next();
				if ( check.getInt(1)<=0 )
				{
					JOptionPane.showMessageDialog(null, "No such topic is there !");
					con.commit();
					st.close();
					con.close();
					return;
				}
				else
				{
					check = st.executeQuery("select topicno from topics where topicname='"+topicnum.getText().toString()+"'");
					check.next();
					tnumber=check.getInt(1);
				}
				System.out.println("going to select count");
				check = st.executeQuery("select count(*) from recommendations");
				check.next();
				flag = check.getInt(1)+1;
				System.out.println("going to insert flag is "+flag+" topic number is "+tnumber);
				st.executeQuery("insert into recommendations (userno, recno, topicno, ques, a1, a2, a3, a4, correctans) values ( '" + u_name +"',"+flag+","+tnumber+",'"+tf1.getText().toString()+"','"+tf2.getText().toString()+"','"+tf3.getText().toString()+"','"+tf4.getText().toString()+"','"+tf5.getText().toString()+"','"+correct.getText().toString()+"')");
		
																				
				con.commit();
				st.close();
				con.close();
				
			} catch (Exception ex) 
				{ JOptionPane.showMessageDialog(null, ex.getMessage()); }
			
			JOptionPane.showMessageDialog(null, "Recommendation Sent !");
			f.dispose();
			new loginhome();
		}
		
	}
	
	
	public static void main (String args[])
	{
		new recommendques();
	}
	
	
}
