package Quiz;

import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import javax.swing.*;


public class userranks implements ActionListener {

	
	public JFrame f;
	login obj = new login();
	String u_name = obj.tf1.getText().toString();
	//String u_name = "kapil_sharma";
	JButton b1, b2, buttons[];
	JLabel att3, heading;
	int  n=0, criteria_1=0, criteria_2=0;
	
	
	JButton genderwise, countrywise, overallwise, totalscorewise, avgscorewise;	
	JLabel username[], tscore[], ascore[], country[], ranklabel[];
	
	
	public userranks()
	{
		f = new JFrame("Rankings");
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
		p3.setBackground(Color.getHSBColor(40, 0.7f, 0.8f));
		p3.setLayout(null);
		//p3.setPreferredSize(new Dimension (620,400));
		
		
		JScrollPane pane = new JScrollPane(p3);
		pane.setBounds(320,240,620,400);
		ImageIcon icon = new ImageIcon("download.jpg");
		pane.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		
		
		JPanel p4 = new JPanel();
		p4.setLayout(null);
		p4.setBounds(50,240,220,400);
		p4.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		
		//JScrollPane pane2 = new JScrollPane();
		//pane2.setLayout(null);
		//pane2.setBounds(50,240,220,400);
		//pane2.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		countrywise = new JButton("Country Wise");
		overallwise = new JButton("Overall");
		genderwise = new JButton("Gender Wise");
		overallwise.setBounds(30,60,160,40);
		countrywise.setBounds(30,110,160,40);
		genderwise.setBounds(30,160,160,40);
		JLabel criteria = new JLabel("Select Rankings Criteria 1 :");
		criteria.setBounds(30,10,160,40);
		p4.add(criteria);
		p4.add(overallwise);
		p4.add(countrywise);
		p4.add(genderwise);
		p4.add(new JSeparator(SwingConstants.HORIZONTAL));
		countrywise.addActionListener(this);
		overallwise.addActionListener(this);
		genderwise.addActionListener(this);
		
		JLabel criteria2 = new JLabel("Select Rankings Criteria 2 :");
		criteria2.setBounds(30,210,160,40);
		totalscorewise = new JButton("Total Score");
		avgscorewise = new JButton("Average Score");
		totalscorewise.setBounds(30,260,160,40);
		avgscorewise.setBounds(30,310,160,40);
		p4.add(criteria2);
		p4.add(totalscorewise);
		p4.add(avgscorewise);
		totalscorewise.addActionListener(this);
		avgscorewise.addActionListener(this);
		
		criteria_1 = 1;
		criteria_2 = 1;
		
		
		try 
		{	Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
			int flag=0;
			Statement st = con.createStatement();
			
			ResultSet rs = st.executeQuery("select count(*) from useroverallstats");
			rs.next();
			n = rs.getInt(1);
			
			rs = st.executeQuery("select count(userno) from userlist where userno not in (select userno from useroverallstats) order by userno");
			rs.next();
			n = n + rs.getInt(1);
			
			username = new JLabel[n];
			tscore = new JLabel[n];
			ascore = new JLabel[n];
			country = new JLabel[n];
			int i=0;
						
			rs = st.executeQuery("select useroverallstats.userno, totalscore, avgscore, country from useroverallstats, userlist where useroverallstats.userno = userlist.userno order by totalscore desc");
			while (rs.next())
			{
				username[i] = new JLabel(rs.getString("userno"));
				//System.out.println("gaya " + username[i].getText());
				tscore[i] = new JLabel(Integer.toString(rs.getInt("totalscore")));
				//System.out.println("gaya " + tscore[i].getText());
				ascore[i] = new JLabel(Double.toString(rs.getDouble("avgscore")));
				country[i] = new JLabel(rs.getString("country"));
				
				System.out.println(username[i].getText() +"||"+ tscore[i].getText() +"||"+ ascore[i].getText() +"||"+ country[i].getText());
				i++;
			}
			
			rs = st.executeQuery("select userno, country from userlist where userno not in (select userno from useroverallstats) order by userno");
			while (rs.next())
			{	
				username[i] = new JLabel(rs.getString("userno"));
				tscore[i] = new JLabel("-");
				ascore[i] = new JLabel("-");
				country[i] = new JLabel(rs.getString("country"));
						
				System.out.println(username[i].getText() + "||"+ tscore[i].getText() +"||"+ ascore[i].getText() +"||"+ country[i].getText());
				i++;
			}
			
			con.commit();
			st.close();
			con.close();
			
		} catch (Exception ae) 
			{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
		
		
		
		
			//buttons = new JButton[n];
			int x, y, i;
			JLabel att1 = new JLabel("Rank");
			JLabel att2 = new JLabel("UserName");
			att3 = new JLabel("Total Score");
			JLabel att4 = new JLabel("Country");
			ranklabel = new JLabel[n];
			att1.setBounds(60,100,160,40);
			att2.setBounds(60+50, 100, 160, 40);
			att3.setBounds(60+50+160, 100, 160, 40);
			att4.setBounds(60+50+320, 100, 160, 40);
			p3.add(att1);
			p3.add(att2);
			p3.add(att3);
			p3.add(att4);
			
			for (x=60, y=140, i=0; i<n; i++, y+=40)
			{	
				ranklabel[i] = new JLabel(Integer.toString(i+1) + " -> ");
				ranklabel[i].setBounds(x,y,160,40);
				username[i].setBounds(x+50,y,160,40);
				tscore[i].setBounds(x+160+50,y,160,40);
				country[i].setBounds(x+320+50,y,160,40);
				p3.add(ranklabel[i]);
				p3.add(username[i]);
				p3.add(tscore[i]);
				p3.add(country[i]);
				System.out.println(username[i].getText() + tscore[i].getText() + ascore[i].getText() + country[i].getText());
			}
			
		heading = new JLabel("OverAll Rankings w.r.t. Total Score");
		heading.setFont(new Font("Arial",Font.BOLD,18));
		heading.setBounds(150,30,450,60);
		p3.add(heading);
			
		p3.setPreferredSize(new Dimension (620,60*n+140));		
		
		f.add(l1);
		f.add(p2);
		f.add(l2);
		f.add(pane);
		f.add(p4);
		f.setVisible(true);
		f.setSize(1025,750);
	}
	
	
	public void update_screen()
	{
		try 
		{	Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
			
			Statement st = con.createStatement();
			
			int i=0;
						
			ResultSet rs;
			System.out.println("criteria_1 = " + criteria_1 + "         criteria_2 = " + criteria_2);
			
			if (criteria_1==1)
			{	
				if (criteria_2==1)
				{	System.out.println("1,1");
					att3.setText("Total Score");
					rs = st.executeQuery("select useroverallstats.userno, totalscore, avgscore, country from useroverallstats, userlist where useroverallstats.userno = userlist.userno order by totalscore desc");
					while (rs.next())
					{
						ranklabel[i].setVisible(true);
						username[i].setText(rs.getString("userno"));
						//System.out.println("gaya " + username[i].getText());
						tscore[i].setText(Integer.toString(rs.getInt("totalscore")));
						//System.out.println("gaya " + tscore[i].getText());
						ascore[i].setText(Double.toString(rs.getDouble("avgscore")));
						country[i].setText(rs.getString("country"));
						i++;
					}
			
					rs = st.executeQuery("select userno, country from userlist where userno not in (select userno from useroverallstats) order by userno");
					while (rs.next())
					{	
						ranklabel[i].setVisible(true);
						username[i].setText(rs.getString("userno"));
						tscore[i].setText("-");
						ascore[i].setText("-");
						country[i].setText(rs.getString("country"));
						i++;
					}
					heading.setText("OverAll Rankings w.r.t. Total Score");
					for ( ; i<n; i++)
					{
						ranklabel[i].setVisible(false);
					}
				}
				
				else if (criteria_2==2)
				{	System.out.println("1,2");
					att3.setText("Average Score");
					rs = st.executeQuery("select useroverallstats.userno, totalscore, avgscore, country from useroverallstats, userlist where useroverallstats.userno = userlist.userno order by avgscore desc");
					while (rs.next())
					{
						ranklabel[i].setVisible(true);
						username[i].setText(rs.getString("userno"));
						//System.out.println("gaya " + username[i].getText());
						tscore[i].setText(Double.toString(rs.getDouble("avgscore")));
						//System.out.println("gaya " + tscore[i].getText());
						//ascore[i].setText(Double.toString(rs.getDouble("avgscore")));
						country[i].setText(rs.getString("country"));
						i++;
					}
			
					rs = st.executeQuery("select userno, country from userlist where userno not in (select userno from useroverallstats) order by userno");
					while (rs.next())
					{	
						ranklabel[i].setVisible(true);
						username[i].setText(rs.getString("userno"));
						tscore[i].setText("-");
						ascore[i].setText("-");
						country[i].setText(rs.getString("country"));
						ranklabel[i].setVisible(false);
						i++;
					}
					heading.setText("OverAll Rankings w.r.t. Average Score");
					
				}
			}
			
			else if (criteria_1==2)
			{	System.out.println("2");
				if (criteria_2==1)
				{	System.out.println("2,1");
					att3.setText("Total Score");
					rs = st.executeQuery("select useroverallstats.userno, totalscore, avgscore, country from useroverallstats, userlist where useroverallstats.userno = userlist.userno and userlist.country = (select country from userlist where userno = '" + u_name + "') order by totalscore desc");
					while (rs.next())
					{
						ranklabel[i].setVisible(true);
						username[i].setText(rs.getString("userno"));
						//System.out.println("gaya " + username[i].getText());
						tscore[i].setText(Integer.toString(rs.getInt("totalscore")));
						//System.out.println("gaya " + tscore[i].getText());
						ascore[i].setText(Double.toString(rs.getDouble("avgscore")));
						country[i].setText(rs.getString("country"));
						i++;
					}
			
					rs = st.executeQuery("select userno, country from userlist where userno not in (select userno from useroverallstats) and country = (select country from userlist where userno = '" + u_name + "') order by userno");
					while (rs.next())
					{	
						ranklabel[i].setVisible(true);
						username[i].setText(rs.getString("userno"));
						tscore[i].setText("-");
						ascore[i].setText("-");
						country[i].setText(rs.getString("country"));
						i++;
					}
					
					while (i<n)
					{
						username[i].setText("");
						tscore[i].setText("");
						ascore[i].setText("");
						country[i].setText("");
						ranklabel[i].setVisible(false);
						i++;
					}
					heading.setText("Country Wise Rankings w.r.t. Total Score");
				}
				
				else if (criteria_2==2)
				{	System.out.println("2,2");
					att3.setText("Average Score");
					rs = st.executeQuery("select useroverallstats.userno, totalscore, avgscore, country from useroverallstats, userlist where useroverallstats.userno = userlist.userno and userlist.country = (select country from userlist where userno = '" + u_name + "') order by avgscore desc");
					while (rs.next())
					{
						ranklabel[i].setVisible(true);
						username[i].setText(rs.getString("userno"));
						//System.out.println("gaya " + username[i].getText());
						tscore[i].setText(Double.toString(rs.getDouble("avgscore")));
						//System.out.println("gaya " + tscore[i].getText());
						//ascore[i].setText(Double.toString(rs.getDouble("avgscore")));
						country[i].setText(rs.getString("country"));
						i++;
					}
			
					rs = st.executeQuery("select userno, country from userlist where userno not in (select userno from useroverallstats) and country = (select country from userlist where userno = '" + u_name + "') order by userno");
					while (rs.next())
					{	
						ranklabel[i].setVisible(true);
						username[i].setText(rs.getString("userno"));
						tscore[i].setText("-");
						ascore[i].setText("-");
						country[i].setText(rs.getString("country"));
						i++;
					}
					
					while (i<n)
					{
						username[i].setText("");
						tscore[i].setText("");
						ascore[i].setText("");
						country[i].setText("");
						i++;
						ranklabel[i].setVisible(false);
					}
					heading.setText("Country Wise Rankings w.r.t. Average Score");
				}
			}
				
			else if (criteria_1==3)
				{
					if (criteria_2==1)
					{	System.out.println("3,1");
						att3.setText("Total Score");
						rs = st.executeQuery("select useroverallstats.userno, totalscore, avgscore, country from useroverallstats, userlist where useroverallstats.userno = userlist.userno and userlist.gender = (select gender from userlist where userno = '" + u_name + "') order by totalscore desc");
						while (rs.next())
						{
							ranklabel[i].setVisible(true);
							username[i].setText(rs.getString("userno"));
							//System.out.println("gaya " + username[i].getText());
							tscore[i].setText(Integer.toString(rs.getInt("totalscore")));
							//System.out.println("gaya " + tscore[i].getText());
							//ascore[i].setText(Double.toString(rs.getDouble("avgscore")));
							country[i].setText(rs.getString("country"));
							i++;
						}
				
						rs = st.executeQuery("select userno, country from userlist where userno not in (select userno from useroverallstats) and gender = (select gender from userlist where userno = '" + u_name + "') order by userno");
						while (rs.next())
						{	
							ranklabel[i].setVisible(true);
							username[i].setText(rs.getString("userno"));
							tscore[i].setText("-");
							ascore[i].setText("-");
							country[i].setText(rs.getString("country"));
							i++;
						}
						
						while (i<n)
						{
							username[i].setText("");
							tscore[i].setText("");
							ascore[i].setText("");
							country[i].setText("");
							ranklabel[i].setVisible(false);
							i++;
						}
						heading.setText("Gender Wise Rankings w.r.t. Total Score");
						
					}
					
					else if (criteria_2==2)
					{	System.out.println("3,2");
						att3.setText("Average Score");
						rs = st.executeQuery("select useroverallstats.userno, totalscore, avgscore, country from useroverallstats, userlist where useroverallstats.userno = userlist.userno and userlist.gender = (select gender from userlist where userno = '" + u_name + "') order by avgscore desc");
						while (rs.next())
						{
							ranklabel[i].setVisible(true);
							username[i].setText(rs.getString("userno"));
							//System.out.println("gaya " + username[i].getText());
							tscore[i].setText(Double.toString(rs.getDouble("avgscore")));
							//System.out.println("gaya " + tscore[i].getText());
							//ascore[i].setText(Double.toString(rs.getDouble("avgscore")));
							country[i].setText(rs.getString("country"));
							i++;
						}
				
						rs = st.executeQuery("select userno, country from userlist where userno not in (select userno from useroverallstats) and gender = (select gender from userlist where userno = '" + u_name + "') order by userno");
						while (rs.next())
						{	
							ranklabel[i].setVisible(true);
							username[i].setText(rs.getString("userno"));
							tscore[i].setText("-");
							ascore[i].setText("-");
							country[i].setText(rs.getString("country"));
							i++;
						}
						
						while (i<n)
						{
							username[i].setText("");
							tscore[i].setText("");
							ascore[i].setText("");
							country[i].setText("");
							ranklabel[i].setVisible(false);
							i++;
						}
						heading.setText("Gender Wise Rankings w.r.t. Average Score");
						
					}
				}
			
			
			con.commit();
			st.close();
			con.close();
			
		} catch (Exception ae) 
			{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
		
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
		
		else if (ev.getSource()==overallwise)
		{
			if (criteria_1==1)
			{System.out.println("returning overallw");
				return;
			}
			System.out.println("updating overallw");
			criteria_1 = 1;
			update_screen();
		}
		
		else if (ev.getSource()==countrywise)
		{
			if (criteria_1==2)
			{System.out.println("returning countryw");
				return;
			}
			System.out.println("updating countryw");
			criteria_1 = 2;
			update_screen();
		}
		
		else if (ev.getSource()==genderwise)
		{
			if (criteria_1==3)
			{	System.out.println("returning genderw");
				return;
			}
			System.out.println("updating genderw");
			criteria_1 = 3;
			update_screen();
		}
		
		else if (ev.getSource()==totalscorewise)
		{
			if (criteria_2==1)
			{System.out.println("returning totalscorewise");
				return;
			}
			System.out.println("updating tsw");
			criteria_2 = 1;
			update_screen();
		}
		
		else if (ev.getSource()==avgscorewise)
		{
			if (criteria_2==2)
			{System.out.println("returning avgscorewise");
				return;
			}
			System.out.println("updating asw");
			criteria_2 = 2;
			update_screen();
		}
	}
	
	
	
	public static void main (String a[])
	{
		new userranks();
		//loginhome obj = new loginhome();
		//obj.login_home();
	}
	
	
}
