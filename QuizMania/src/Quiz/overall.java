package Quiz;

import java.awt.Color;
import java.awt.Dimension;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.text.DecimalFormat;
import javax.swing.*;


public class overall implements ActionListener {

	
	public JFrame f;
	login obj = new login();
	String u_name = obj.tf1.getText().toString();
	//String u_name = "kapil_sharma";
	JButton b1, b2;
	JLabel buttons[];
	String topicname, besttopic, topicmax, rank;
	int nooftimesplayed, totalscore, bestscore, totaltopicsplayed, n=0;
	int size=0, topicmaxn, besttopicn;
	double avgscore, avgtime, totaltime;
	JLabel times, total_score, avg_score, total_time_played;
	JLabel avg_time, best_score, per;
		
	
	public overall()
	{
		f = new JFrame("Overall Stats");
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
		//p4.setBackground(Color.blue);
		p4.setLayout(null);
		
		JScrollPane pane2 = new JScrollPane(p4);
		//pane2.setLayout(null);
		pane2.setBounds(50,240,220,400);
		pane2.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		
		try 
		{	Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
			int flag=0;
			Statement st = con.createStatement();
			
			ResultSet rs = st.executeQuery("select count(*) from useroverallstats where userno = '" + u_name + "'");
			rs.next();
			
			n = rs.getInt(1);
			
			rs = st.executeQuery("select count(*) from userlist");
			rs.next();
			size = rs.getInt(1);
			
			if (n>0)
			{									
				rs = st.executeQuery("select * from useroverallstats where userno = '" + u_name + "'");
			
			while (rs.next())
			{
				nooftimesplayed = rs.getInt("nooftimesplayed");
				totalscore = rs.getInt("totalscore");
				avgscore = rs.getDouble("avgscore");
				totaltime = rs.getDouble("totaltime");
				avgtime = rs.getDouble("avgtimetaken");
				bestscore = rs.getInt("maxscore");
				totaltopicsplayed = rs.getInt("totaltopicsplayed");
				topicmax = rs.getString("topicmax");
				besttopic = rs.getString("besttopic");
								
			}
			
			rs = st.executeQuery("select userno from useroverallstats order by totalscore desc");
			int i=0;
			while (rs.next())
			{
				i++;
				if ( u_name.equals(rs.getString(1)) )
				{
					rank = Integer.toString(i);
				}
				
			}
			
			if (i==0)
			{
				rank = "--";
			}
			
			rs = st.executeQuery("select nooftimesplayed from usertopicwisestats where userno = '" + u_name + "' and topicnameplayed = '" + topicmax + "'");
			rs.next();
			topicmaxn = rs.getInt(1);
						
			rs = st.executeQuery("select totalscore from usertopicwisestats where userno = '" + u_name + "' and topicnameplayed = '" + besttopic + "'");
			rs.next();
			besttopicn = rs.getInt(1);
			
			}
			buttons = new JLabel[size];
			int i=0;
			JLabel l = new JLabel("Rankings :");
			l.setBounds(30,10,160,40);
			p4.add(l);
			int x=30, y=45;
			rs = st.executeQuery("select userno from useroverallstats order by totalscore desc");
			while (rs.next())
			{System.out.println("abc123  size = " + size);
				buttons[i] = new JLabel("" + Integer.toString(i+1) + " -> " + rs.getString(1));
				buttons[i].setBounds(x,y,160,40);
				y+=35;
				p4.add(buttons[i++]);
			}
			System.out.println("about");
			rs = st.executeQuery("select userno from userlist where userno not in (select userno from useroverallstats) order by userno");
			while (rs.next())
			{System.out.println("xyz123");
				buttons[i] = new JLabel("" + Integer.toString(i+1) + " -> " + rs.getString(1));
				buttons[i].setBounds(x,y,160,40);
				y+=35;
				p4.add(buttons[i++]);
			}
			
			p4.setPreferredSize(new Dimension (200,(size)*50+20));
			
			con.commit();
			st.close();
			con.close();
			
		} catch (Exception ae) 
			{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
		
		
		JLabel nothing = new JLabel("No Topic Played Yet !");
		JLabel pic = new JLabel(new ImageIcon("excla2 (1).png"));
		//JLabel back = new JLabel (new ImageIcon("lines.jpg"));
		if (n==0)
		{
			nothing.setFont(new Font("Comic Sans MS",Font.BOLD,24));
			nothing.setForeground(Color.black);
			nothing.setBounds(200,300,400,80);
			pic.setBounds(70,50,500,250);
			pane.add(nothing);
			pane.add(pic);
			
			//back.setBounds(0,0,220,400);
			//pane2.add(back);
		}
		
		else
		{
			times = new JLabel ("Played " + nooftimesplayed + " Times");
			times.setFont(new Font("Comic Sans MS", Font.BOLD, 20));
			times.setBounds(40,5,350,100);
			pane.add(times);
			
			total_score = new JLabel ("Total Score -> "+totalscore);
			total_score.setBounds(50,80,160,40);
			pane.add(total_score);
			
			avg_score = new JLabel ("Average Score -> " + avgscore);
			avg_score.setBounds(250,80,160,40);
			pane.add(avg_score);
			
			total_time_played = new JLabel ("Total Time Played -> " + totaltime + "s");
			total_time_played.setBounds(50,120,200,40);
			pane.add(total_time_played);
			
			avg_time = new JLabel ("Average Time Played -> " + avgtime + "s");
			avg_time.setBounds(250,120,200,40);
			pane.add(avg_time);
			
			best_score = new JLabel ("Best Score -> " + bestscore);
			best_score.setBounds(50,160,160,40);
			pane.add(best_score);
			
			double percent = (float)totalscore/(float)(8*nooftimesplayed);
			percent*=10;
			DecimalFormat df = new DecimalFormat("#.##");
			percent = Double.valueOf(df.format(percent));
			per = new JLabel ("Percentage Of Correct Answers -> " + percent + "%");
			per.setBounds(50,200,260,40);
			pane.add(per);
			
			JLabel topic_max = new JLabel ("Topic Played Most -> " + topicmax + " (" + topicmaxn + ")");
			topic_max.setBounds(50,240,260,40);
			pane.add(topic_max);
			
			JLabel best_topic = new JLabel ("Topic With Max Total Score -> " + besttopic + " (" + besttopicn + ")");
			best_topic.setBounds(50,280,260,40);
			pane.add(best_topic);
			
			JLabel ranklabel = new JLabel ("User Rank -> " + rank + " (Total " + size + " Users)");
			ranklabel.setBounds(50,320,260,40);
			pane.add(ranklabel);
			
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
		new overall();
		//loginhome obj = new loginhome();
		//obj.login_home();
	}
	
	
}
