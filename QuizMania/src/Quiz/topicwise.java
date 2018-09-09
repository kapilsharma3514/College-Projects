package Quiz;

import java.awt.*;
import java.awt.event.*;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.text.DecimalFormat;

import javax.swing.*;

public class topicwise implements ActionListener {

	
	public JFrame f;
	login obj = new login();
	String u_name = obj.tf1.getText().toString();
	//String u_name = "kapil_sharma";
	JButton b1, b2, buttons[];
	String topicname[];
	int nooftimesplayed[], totalscore[], bestscore[], n=0;
	double avgscore[], avgtime[], totaltime[];
	JLabel times, total_score, avg_score, total_time_played;
	JLabel avg_time, best_score, per;
		
	
	public topicwise()
	{
		f = new JFrame("Topic Wise Stats");
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
		p3.setBackground(Color.blue);
		p3.setLayout(null);
		p3.setPreferredSize(new Dimension (620,400));
		//p3.setBounds(200,245,620,400);
				
		JScrollPane pane = new JScrollPane(p3);
		pane.setLayout(null);
		pane.setBounds(320,240,620,400);
		pane.setBackground(Color.getHSBColor(40, 0.7f, 0.8f));
		ImageIcon icon = new ImageIcon("download.jpg");
		pane.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		
		JPanel p4 = new JPanel();
		p4.setBackground(Color.blue);
		p4.setLayout(null);
		p4.setPreferredSize(new Dimension (200,400));
		
		JScrollPane pane2 = new JScrollPane();
		pane2.setLayout(null);
		pane2.setBounds(50,240,220,400);
		pane2.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		
		try 
		{	Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
			int flag=0;
			Statement st = con.createStatement();
			
			ResultSet rs = st.executeQuery("select count(*) from usertopicwisestats where userno = '" + u_name + "'");
			rs.next();
			
			n = rs.getInt(1);
			topicname = new String[rs.getInt(1)];
			nooftimesplayed = new int[rs.getInt(1)];
			totalscore = new int[rs.getInt(1)];
			avgscore = new double[rs.getInt(1)];
			totaltime = new double[rs.getInt(1)];
			avgtime = new double[rs.getInt(1)];
			bestscore = new int[rs.getInt(1)];
						
			rs = st.executeQuery("select * from usertopicwisestats where userno = '" + u_name + "'");
			int i=0;
			while (rs.next())
			{
				topicname[i] = rs.getString("topicnameplayed");
				nooftimesplayed[i] = rs.getInt("nooftimesplayed");
				totalscore[i] = rs.getInt("totalscore");
				avgscore[i] = rs.getDouble("avgscore");
				totaltime[i] = rs.getDouble("totaltime");
				avgtime[i] = rs.getDouble("avgtimetaken");
				bestscore[i++] = rs.getInt("bestscore");
								
			}
			
			con.commit();
			st.close();
			con.close();
			
		} catch (Exception ae) 
			{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
		
		
		JLabel nothing = new JLabel("No Topic Played Yet !");
		JLabel pic = new JLabel(new ImageIcon("excla2 (1).png"));
		JLabel back = new JLabel (new ImageIcon("lines.jpg"));
		if (n==0)
		{
			nothing.setFont(new Font("Comic Sans MS",Font.BOLD,24));
			nothing.setForeground(Color.black);
			nothing.setBounds(200,300,400,80);
			pic.setBounds(70,50,500,250);
			pane.add(nothing);
			pane.add(pic);
			
			back.setBounds(0,0,220,400);
			pane2.add(back);
		}
		
		else
		{
			buttons = new JButton[n];
			int x, y, i, key=0;
			for (x=30, y=30, i=0; i<n; i++, y+=55)
			{
				buttons[i] = new JButton(topicname[i]);
				buttons[i].setBounds(x,y,160,40);
				pane2.add(buttons[i]);
				buttons[i].addActionListener(new ActionListenerA(i));
				if (topicname[i]=="Cricket")
				{
					key=i;
				}
			}
			
			times = new JLabel ("Played " + nooftimesplayed[key] + " Times");
			times.setFont(new Font("Comic Sans MS", Font.BOLD, 20));
			times.setBounds(40,5,350,100);
			pane.add(times);
			
			total_score = new JLabel ("Total Score -> "+totalscore[key]);
			total_score.setBounds(50,100,160,40);
			pane.add(total_score);
			
			avg_score = new JLabel ("Average Score -> " + avgscore[key]);
			avg_score.setBounds(250,100,160,40);
			pane.add(avg_score);
			
			total_time_played = new JLabel ("Total Time Played -> " + totaltime[key] + "s");
			total_time_played.setBounds(50,160,200,40);
			pane.add(total_time_played);
			
			avg_time = new JLabel ("Average Time Played -> " + avgtime[key] + "s");
			avg_time.setBounds(250,160,200,40);
			pane.add(avg_time);
			
			best_score = new JLabel ("Best Score -> " + bestscore[key]);
			best_score.setBounds(50,220,160,40);
			pane.add(best_score);
			
			double percent = (float)totalscore[key]/(float)(8*nooftimesplayed[key]);
			percent*=10;
			DecimalFormat df = new DecimalFormat("#.##");
			percent = Double.valueOf(df.format(percent));
			per = new JLabel ("Percentage Of Correct Answers -> " + percent + "%");
			per.setBounds(50,280,260,40);
			pane.add(per);
			
		}
		
		
		
		f.add(l1);
		f.add(p2);
		f.add(p3);
		f.add(l2);
		f.add(pane);
		f.add(pane2);
		f.setVisible(true);
		f.setSize(1025,750);
	}
	
	
	
	public class ActionListenerA implements ActionListener
	{
		int index;
		
		public ActionListenerA (int i)
		{
			index=i;
		}
		
		public void actionPerformed (ActionEvent ev)
		{
			times.setText("Played " + nooftimesplayed[index] + " Times");
			total_score.setText("Total Score -> " + totalscore[index]);
			avg_score.setText("Average score -> " + avgscore[index]);
			total_time_played.setText("Total Time Played -> " + totaltime[index]);
			avg_time.setText("Average Time Played -> " + avgtime[index]);
			best_score.setText("Best Score -> " + bestscore[index]);
			double percent = (float)totalscore[index]/(float)(8*nooftimesplayed[index]);
			percent*=10;
			DecimalFormat df = new DecimalFormat("#.##");
			percent = Double.valueOf(df.format(percent));
			per.setText("Percentage Of Correct Answers -> " + percent + "%");
			
		}
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
		
		
	}
	
	
	
	public static void main (String a[])
	{
		new topicwise();
		//loginhome obj = new loginhome();
		//obj.login_home();
	}
	
}
