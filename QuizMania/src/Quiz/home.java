package Quiz;

import javax.swing.*;
import java.awt.event.*;
import java.awt.*;
import java.sql.*;
import java.text.DateFormat;
import java.text.DecimalFormat;
import java.text.SimpleDateFormat;
import java.util.Date;

public class home implements ActionListener, MouseListener {

	public JFrame f;
	JButton b1, b2, b3;
	JLabel admin, rev, datentime, l2;
	Timer timer;
	
	public home()
	{
		int count=0, sum=0;
		Double avg=null;
		JLabel avgl=null;
		
		f = new JFrame("Home");
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
		b2.addActionListener(this);
		b3 = new JButton("SignUp");
		b3.addActionListener(this);
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
		
		admin = new JLabel("Admin Login");
		admin.setFont(new Font("Arial", Font.BOLD, 14));
		admin.setForeground(Color.blue);
		admin.setBounds(900,68,90,30);
		f.add(admin);
		admin.addMouseListener(this);
		
		ImageIcon i2 = new ImageIcon("site_image.jpg");
		l2 = new JLabel();
		l2.setIcon(i2);
		l2.setBounds(30,250,960,200);
		//l2.addMouseListener(this);
		
		JLabel l3 = new JLabel("Quizzes Are The Way To Go...");
		l3.setFont(new Font("Comic Sans MS",Font.BOLD,30));		
		l3.setForeground(Color.black);
		l3.setBounds(260,160,500,80);
		
		JPanel p3 = new JPanel();
		p3.setLayout(null);
		p3.setBackground(Color.black);
		p3.setBounds(30, 490, 960, 200);
		
		JLabel l4 = new JLabel();
		l4.setIcon(new ImageIcon("quizmania.jpg"));
		l4.setBounds(140,20,350,140);
		
		//JLabel l5 = new JLabel("Our Focus");
		//l5.setForeground(Color.white);
		JTextArea ta = new JTextArea("Our Focus\n\nQuiz Mania is all about a variety\nof quizzes from a numerous topics\nfrom around the world");
		ta.setEditable(false);
		ta.setFont(new Font("Arial",Font.PLAIN,20));
		ta.setBackground(Color.black);
		ta.setForeground(Color.white);
		ta.setBounds(510,40,400,300);
		
		p3.add(l4);
		p3.add(ta);
		
		try 
		{
			Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
			
			Statement st = con.createStatement();
		
			ResultSet rs = st.executeQuery("select rating from reviewrating");
			while (rs.next())
			{
				sum+=rs.getInt(1);
				count++;
			}
			
			if (count==0)
				avg=0.00;
			else
				avg = (double)sum/(double)count;
						
			DecimalFormat df = new DecimalFormat("#.#");
			avg = Double.valueOf(df.format(avg));
			avgl = new JLabel("Avg Rating : "+Double.toString(avg));
			avgl.setBounds(900,10,100,30);
			
			con.commit();
			st.close();
			con.close(); 
		
		} catch (Exception ae) 
		{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
		
		
		rev = new JLabel("Reviews");
		rev.setBounds(900,30,100,30);
		rev.addMouseListener(this);
		
		// ----------- For Date & Time ------------
		DateFormat dateFormat = new SimpleDateFormat("dd-MMM-yyyy HH:mm:ss");
		Date date = new Date();
		String sdate = (dateFormat.format(date)).toString();
		datentime = new JLabel(sdate);
		datentime.setBounds(870,140,160,50);
		TimerClass tc = new TimerClass();
		timer = new Timer(1000,tc);
		timer.start();
		// ----------- For Date & Time ------------
		
		
		f.add(datentime);
		f.add(l1);
		f.add(p2);
		f.add(l2);
		f.add(l3);
		f.add(p3);
		f.add(avgl);
		f.add(rev);
		f.setVisible(true);
		f.setSize(1025,750);
	}
	
	
	public void mouseClicked (MouseEvent ae)
	{
		if (ae.getSource()==admin)
		{	
			timer.stop();
			f.dispose();
			login obj = new login();
			obj.adminloginn();
		}
		
		else if (ae.getSource()==rev)
		{
			int  y=30;
			JFrame f2 = new JFrame("Reviews");
			f2.setLayout(null);
			JLabel lrev[];
			try 
			{
				Class.forName("oracle.jdbc.driver.OracleDriver");
				Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
				
				Statement st = con.createStatement();
			
				ResultSet rs = st.executeQuery("select count(*) from reviewrating where userno is not null");
				rs.next();
				lrev = new JLabel[rs.getInt(1)];
				
				int i=0;
				rs = st.executeQuery("select userno, review from reviewrating");
				while (rs.next())
				{
					lrev[i] = new JLabel(rs.getString(1) + " -> " + rs.getString(2));
					lrev[i].setBounds(50,y,800,30);
					y+=40;
					f2.add(lrev[i]);
				}
				
				
				
				con.commit();
				st.close();
				con.close(); 
			
			} catch (Exception e) 
			{ JOptionPane.showMessageDialog(null, e.getMessage()); }
			
			f2.setSize(840,y+70);
			f2.setVisible(true);
		}
	}
	
	public void mouseEntered (MouseEvent ae)
	{
		/*if (ae.getSource()==l2)
		{
			DateFormat dateFormat = new SimpleDateFormat("dd-MMM-yyyy HH:mm:ss");
			Date date = new Date();
			String sdate = (dateFormat.format(date)).toString();
			datentime.setText(sdate);
			if (sdate.contains("01-Jan"))
			{
				ImageIcon ii = new ImageIcon("hny.jpg");
				l2.setIcon(ii);
			}
		}*/
	}
	
	public void mouseExited (MouseEvent ae)
	{
		/*if (ae.getSource()==l2)
		{
			DateFormat dateFormat = new SimpleDateFormat("dd-MMM-yyyy HH:mm:ss");
			Date date = new Date();
			String sdate = (dateFormat.format(date)).toString();
			datentime.setText(sdate);
			if (sdate.contains("01-Jan"))
			{
				ImageIcon ii = new ImageIcon("hny.jpg");
				l2.setIcon(ii);
			}
			else
			{
				ImageIcon ii = new ImageIcon("site_image.jpg");
				l2.setIcon(ii);
			}
		}*/
	}
	
	public void mousePressed (MouseEvent ae)
	{
		
	}
	
	public void mouseReleased (MouseEvent ae)
	{
		
	}
	
	public void actionPerformed (ActionEvent ae)
	{
		timer.stop();
		
		if (ae.getSource()==b2)
		{
			f.dispose();
			login obj = new login();
			obj.loginn();
		}
		
		else if (ae.getSource()==b3)
		{
			f.dispose();
			new signup();
		}
	}
	
	
	
	// ----------- Timer Class ------------
	public class TimerClass implements ActionListener {
		
		public void actionPerformed (ActionEvent ae)
		{
			DateFormat dateFormat = new SimpleDateFormat("dd-MMM-yyyy HH:mm:ss");
			Date date = new Date();
			String sdate = (dateFormat.format(date)).toString();
			datentime.setText(sdate);
			if (sdate.contains("01-Jan"))
			{
				ImageIcon ii = new ImageIcon("hny.jpg");
				l2.setIcon(ii);
			}
			else
			{
				ImageIcon ii = new ImageIcon("site_image.jpg");
				l2.setIcon(ii);
			}
		}
	}
	// ----------- Timer Class ------------
	
	
	public static void main (String a[])
	{
		new home();
	}
	
	
}
