package Quiz;

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

import java.sql.*;

public class reviewRating implements ActionListener {

	
	public JFrame f;
	login obj = new login();
	String u_name = obj.tf1.getText().toString();
	//String u_name = "wtfudge";
	JButton b1, b2, submit1, submit2;
	JComboBox ratingpts;
	JTextArea treview;
	
	public reviewRating()
	{
		f = new JFrame("Review / Rating");
		f.setLayout(null);
		
		ImageIcon logo = new ImageIcon("quizmania.jpg");
		JLabel l1 = new JLabel();
		l1.setIcon(logo);
		l1.setBounds(30,10,300,170);
	
		JLabel l2 = new JLabel("Hi " + u_name + " !");
		l2.setBounds(750,30,200,60);
		l2.setFont(new Font("Comic Sans MS", Font.PLAIN, 24));
		
		JPanel p2 = new JPanel();
		p2.setBackground(Color.black);
		p2.setLayout(null);
		p2.setBounds(20,100,980,50);
		
		
		b1 = new JButton("Logout");
		b1.setBackground(Color.black);
		b1.setForeground(Color.white);
		b1.setBounds(870,8,90,30);
		p2.add(b1);
		b1.addActionListener(this);
		
		b2 = new JButton("Home");
		b2.setBackground(Color.black);
		b2.setForeground(Color.white);
		b2.setBounds(670,8,90,30);
		p2.add(b2);
		b2.addActionListener(this);

		
		JPanel p3 = new JPanel();
		p3.setBackground(Color.cyan);
		p3.setLayout(null);
		p3.setBounds(430,220,200,190);
		//ImageIcon icon = new ImageIcon("download.jpg");
		p3.setBorder(BorderFactory.createTitledBorder("Rating"));
		
		JLabel lrating = new JLabel("Give Rating Points :");
		lrating.setBounds(50,40,150,30);
		ratingpts = new JComboBox();
		for (int i=1; i<11; i++)
		{
			ratingpts.addItem(i);
		}
		ratingpts.setBounds(70,70,60,30);
		submit1 = new JButton("Submit Rating");
		submit1.setBackground(Color.red);
		submit1.setBounds(20,120,150,30);
		p3.add(lrating);
		p3.add(ratingpts);
		p3.add(submit1);
		
		
		
		JPanel p4 = new JPanel();
		p4.setBackground(Color.cyan);
		p4.setLayout(null);
		p4.setBounds(355,435,345,230);
		p4.setBorder(BorderFactory.createTitledBorder("Review"));
		
		JLabel lreview = new JLabel("Write A Review");
		treview = new JTextArea();
		lreview.setBounds(115,40,150,30);
		treview.setBounds(80,70,180,100);
		submit2 = new JButton("Submit Review");
		submit2.setBackground(Color.red);
		submit2.setBounds(80,180,180,30);
		p4.add(lreview);
		p4.add(treview);
		p4.add(submit2);
		
		
		submit1.addActionListener(this);
		submit2.addActionListener(this);
		
			
		f.add(l1);
		f.add(p2);
		f.add(p3);
		f.add(p4);
		f.add(l2);
		f.setVisible(true);
		f.setSize(1025,750);
	}
	
	
	
	public void actionPerformed (ActionEvent ev)
	{
		if (ev.getSource()==b1)
		{
			f.dispose();
			new home();
		}
		
		else if (ev.getSource()==b2)
		{
			f.dispose();
			new loginhome();
		}
		
		else if (ev.getSource()==submit1)
		{			
			try
			{
				Class.forName("oracle.jdbc.driver.OracleDriver");
				Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
				
				Statement st = con.createStatement();
			
				ResultSet check = st.executeQuery("select count(*) from reviewrating where userno = '"+u_name+"'");
				check.next();
				if (check.getInt(1)>0)
				{
					JOptionPane.showMessageDialog(null, "Already Submitted.. Can't Submit Twice");
					return;
				}
				
				st.executeQuery("insert into reviewrating values ('"+u_name+"',null,"+ratingpts.getSelectedItem()+")");
								
				
				con.commit();
				st.close();
				con.close(); 
			} catch (Exception ae) 
			{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
			
			f.dispose();
			new loginhome();
		}
		
		else if (ev.getSource()==submit2)
		{
			if (treview.getText().toString().equals(""))
			{
				JOptionPane.showMessageDialog(null, "Please Dont Leave It Empty");
				return;
			}
			
			try
			{
				Class.forName("oracle.jdbc.driver.OracleDriver");
				Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
				
				Statement st = con.createStatement();
			
				st.executeUpdate("update reviewrating set review = '"+treview.getText().toString()+"' where userno = '"+u_name+"'");
								
				con.commit();
				st.close();
				con.close(); 
			} catch (Exception ae) 
			{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
			
			f.dispose();
			new loginhome();
		}
		
	}
	
	
	
	
	public static void main (String a[])
	{
		new reviewRating();
	}
	
	
}
