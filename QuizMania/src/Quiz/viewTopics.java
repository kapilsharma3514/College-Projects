package Quiz;

import java.awt.*;
import java.awt.event.*;
import java.sql.*;
import java.text.DecimalFormat;

import javax.swing.*;




public class viewTopics implements ActionListener {

	
	public JFrame f;
	login obj = new login();
	String u_name = obj.tf1.getText().toString();
	//String u_name = "kapil_sharma";
	JButton b1, b2, buttons[];
	String topicname[], s_topic;
	int n1=0, n2=0;
	JPanel p3;
	JLabel lques[]=null, lans[]=null, ldiff[]=null;
	JLabel lcansd[]=null, lwansd[]=null, lpercent[]=null;
	
		
	
	public viewTopics()
	{
		f = new JFrame("Topics n Qustions Lists");
		f.setLayout(null);
		
		int n3=0;
		
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

		
		p3 = new JPanel();
		p3.setBackground(Color.cyan);
		p3.setLayout(null);
		ImageIcon icon = new ImageIcon("download.jpg");
				
		JScrollPane pane = new JScrollPane(p3);
		pane.setBounds(320,240,620,400);
		pane.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
						
		JPanel p4 = new JPanel();
		p4.setBackground(Color.blue);
		p4.setLayout(null);
		p4.setPreferredSize(new Dimension (200,400));
		
		JScrollPane pane2 = new JScrollPane(p4);
		pane2.setBounds(50,240,220,400);
		pane2.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		String ques[]=null, ans[]=null, diff[]=null;
		int cansd[]=null, wansd[]=null;

		try 
		{	Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
			int flag=0;
			Statement st = con.createStatement();
			
			ResultSet rs = st.executeQuery("select count(*) from topics");
			rs.next();
			n1 = rs.getInt(1);
			topicname = new String[n1];
			
			rs = st.executeQuery("select * from topics");
			int i=0;
			while (rs.next())
			{
				topicname[i++] = rs.getString("topicname");								
			}
			
			s_topic = topicname[0];
			
			rs = st.executeQuery("select max(count(*)) from questionbank group by topicno");
			rs.next();
			n2 = rs.getInt(1);
			
			rs = st.executeQuery("select count(*) from questionbank, topics where questionbank.topicno = topics.topicno and topicname = '"+s_topic+"'");
			rs.next();
			n3 = rs.getInt(1);
			
			ques = new String[n2];
			ans = new String[n2];
			diff = new String[n2];
			cansd = new int[n2];
			wansd = new int[n2];
			lques = new JLabel[n2];
			lans = new JLabel[n2];
			ldiff = new JLabel[n2];
			lcansd = new JLabel[n2];
			lwansd = new JLabel[n2];
			lpercent = new JLabel[n2];
			
			rs = st.executeQuery("select ques, correctans, correctlyansd, wronglyansd, difficulty from questionbank, topics where questionbank.topicno = topics.topicno and topicname = '"+s_topic+"'");
			i=0;
			while (rs.next())
			{
				ques[i] = rs.getString("ques");
				ans[i] = rs.getString("correctans");
				diff[i] = rs.getString("difficulty");
				cansd[i] = rs.getInt("correctlyansd");
				wansd[i++] = rs.getInt("wronglyansd");
			}
			con.commit();
			st.close();
			con.close();
			
		} catch (Exception ae) 
			{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
		
		
		
		
			buttons = new JButton[n1];
			int x, y, i;
			for (x=30, y=30, i=0; i<n1; i++, y+=55)
			{
				buttons[i] = new JButton(topicname[i]);
				buttons[i].setBounds(x,y,160,40);
				p4.add(buttons[i]);
				buttons[i].addActionListener(new ActionListenerA(i));
			}
			
			for (x=40, y=30, i=0; i<n2; i++, y+=110)
			{
				if (i<n3)
				{
					lques[i] = new JLabel(Integer.toString(i+1)+" -> "+ques[i]);
					lans[i] = new JLabel("Answer : "+ans[i]);
					ldiff[i] = new JLabel("Difficulty : "+diff[i]);
					lcansd[i] = new JLabel("Correctly Answered : "+cansd[i]);
					lwansd[i] = new JLabel("Wrongly Answered : "+wansd[i]);
					String per;
					Double perc;
					if (wansd[i]==0)
					{ if (cansd[i]!=0)
						per="100.00"; 
					else
						per="-";
					}
					else
					{ perc = ((double)(cansd[i]*100)/(double)(cansd[i]+wansd[i]));
					  DecimalFormat df = new DecimalFormat("#.##");
					  perc = Double.valueOf(df.format(perc));
					  per = Double.toString(perc);
					}
					lpercent[i] = new JLabel("Precentage : " + per + "%");
				}
				
				else
				{
					lques[i] = new JLabel("");
					lans[i] = new JLabel("");
					ldiff[i] = new JLabel("");
					lcansd[i] = new JLabel("");
					lwansd[i] = new JLabel("");
					lpercent[i] = new JLabel("");
				}
				
				lques[i].setBounds(x,y,1200,30);
				lans[i].setBounds(x,y+30,300,30);
				ldiff[i].setBounds(x+300,y+30,100,30);
				lcansd[i].setBounds(x,y+60,200,30);
				lwansd[i].setBounds(x+150,y+60,200,30);
				lpercent[i].setBounds(x+300,y+60,200,30);
				
				p3.add(lques[i]); p3.add(lans[i]); p3.add(ldiff[i]);
				p3.add(lcansd[i]); p3.add(lwansd[i]); p3.add(lpercent[i]);
			}
			p3.setPreferredSize(new Dimension (1200,y+100));
		
		
		
		f.add(l1);
		f.add(p2);
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
			s_topic = topicname[index];
			System.out.println(s_topic+" is now selected");
			
			String ques[]=null, ans[]=null, diff[]=null;
			int cansd[]=null, wansd[]=null, n3=0;
			
			
			try 
			{	Class.forName("oracle.jdbc.driver.OracleDriver");
				Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
				int flag=0;
				Statement st = con.createStatement();
				
				ResultSet rs = st.executeQuery("select count(*) from questionbank, topics where questionbank.topicno = topics.topicno and topicname = '"+s_topic+"'");
				rs.next();
				n3 = rs.getInt(1);
				ques = new String[n2];
				ans = new String[n2];
				diff = new String[n2];
				cansd = new int[n2];
				wansd = new int[n2];
				
				rs = st.executeQuery("select ques, correctans, correctlyansd, wronglyansd, difficulty from questionbank, topics where questionbank.topicno = topics.topicno and topicname = '"+s_topic+"'");
				int i=0;
				while (rs.next())
				{
					ques[i] = rs.getString("ques");
					ans[i] = rs.getString("correctans");
					diff[i] = rs.getString("difficulty");
					cansd[i] = rs.getInt("correctlyansd");
					wansd[i++] = rs.getInt("wronglyansd");
				}
				con.commit();
				st.close();
				con.close();
				
			} catch (Exception ae) 
				{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
			
			
			
			if (n3==0)
			{
				for (int i=0; i<n2; i++)
				{
					lques[i].setText("");
					lans[i].setText("");
					ldiff[i].setText("");
					lcansd[i].setText("");
					lwansd[i].setText("");
					lpercent[i].setText("");
				}
				lques[0].setText("No Questions At Present");
								
			}
			
			else
			{
				int x, y, i;
				
				for (i=0; i<n2; i++)
				{	
					if (i<n3)
					{
						lques[i].setText(Integer.toString(i+1)+" -> "+ques[i]);
						lans[i].setText("Answer : "+ans[i]);
						ldiff[i].setText("Difficulty : "+diff[i]);
						lcansd[i].setText("Correctly Answered : "+cansd[i]);
						lwansd[i].setText("Wrongly Answered : "+wansd[i]);
						String per;
						Double perc;
						if (wansd[i]==0)
						{ if (cansd[i]!=0)
							per="100.00"; 
						else
							per="-";
						}
						else
						{ perc = ((double)(cansd[i]*100)/(double)(cansd[i]+wansd[i]));
						DecimalFormat df = new DecimalFormat("#.##");
						perc = Double.valueOf(df.format(perc));
						per = Double.toString(perc);
						}
						lpercent[i].setText("Precentage : " + per + "%");
					
					}
					
					else
					{
						lques[i].setText("");
						lans[i].setText("");
						ldiff[i].setText("");
						lcansd[i].setText("");
						lwansd[i].setText("");
						lpercent[i].setText("");
					}
				
				}
			}
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
			new adminlogin();
		}
		
		
	}
		
	
	
	public static void main (String a[])
	{
		new viewTopics();
		//loginhome obj = new loginhome();
		//obj.login_home();
	}
	
	
}
