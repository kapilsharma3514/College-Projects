package Quiz;

import java.awt.*;
import java.text.DecimalFormat;
import java.util.*;
import java.sql.*;
import java.awt.event.*;
import javax.swing.*;
import javax.swing.Timer;

public class selectatopic implements ActionListener {

	public JFrame f;
	public String topic_selected;
	JButton b1, b2, tf[], next, quit, ans1, ans2, ans3, ans4;
	
	login obj = new login();
	String u_name = obj.tf1.getText().toString();
	//String u_name="kapil_sharma";
			
	int currentques=0, qno, temp[], score=0, timertime=12;
	int easy=0, med=0, diff=0;
	String ques[], a1[], a2[], a3[], a4[], correctans[];
	JTextField question;
	JLabel currentscore, response1, response2, r3, r4, timeleft;
	double time1, time;
	
	JPanel p3;
	JScrollPane pane;
	
	Timer timer;
	
	public void select_topic()
	{
		f = new JFrame("Select A Topic");
		f.setLayout(null);
		
		ImageIcon logo = new ImageIcon("quizmania.jpg");
		JLabel l1 = new JLabel();
		l1.setIcon(logo);
		l1.setBounds(30,10,300,170);
	
		JLabel l2 = new JLabel("Hi "+u_name+" !");
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
		
		
		JLabel l3 = new JLabel("Select A Topic To Play !");
		l3.setFont(new Font("Comic Sans MS",Font.BOLD,18));
		l3.setBounds(300,240,500,100);

		
		JPanel p3 = new JPanel();
		p3.setBackground(Color.cyan);
		p3.setLayout(null);
		p3.setPreferredSize(new Dimension(620,300));
		ImageIcon icon = new ImageIcon("download.jpg");
		p3.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		
		JScrollPane pane = new JScrollPane(p3);
		pane.setBounds(200,345,620,300);
		
		int n=0;
		
		
		try
		{
			Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
			Statement st = con.createStatement();
			
			ResultSet rs = st.executeQuery("select topicname, count(*) from topics, questionbank where topics.topicno = questionbank.topicno group by topicname having count(*)>9");
			while (rs.next())
			{
				n++;
			}
				
			rs.close();
			st.close();
			con.close();
		} catch (Exception e)
		{ JOptionPane.showMessageDialog(null,e.getMessage()); }
		
		System.out.println(n);
		tf = new JButton[n];
	
		try
		{
			Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
			Statement st = con.createStatement();
			ResultSet rs = st.executeQuery("select topicname, count(*) from topics, questionbank where topics.topicno = questionbank.topicno group by topicname having count(*)>9");
			
			for (int i=0, y=30; i<n; i++, y+=50)
			{
				rs.next();
				tf[i] = new JButton(rs.getString("topicname"));
				tf[i].setFont(new Font("Arial",Font.PLAIN,14));
				tf[i].setBounds(50,y,200,40);
				p3.add(tf[i]);
				tf[i].addActionListener(new ActionListenerA(i));
				
			}
			
			rs.close();
			st.close();
			con.close();
			
		} catch (Exception e)
		{ JOptionPane.showMessageDialog(null, e.getMessage()); }
		
		
		
		f.add(l1);
		f.add(p2);
		f.add(l3);
		f.add(pane);
		f.add(l2);
		f.setVisible(true);
		f.setSize(1025,750);
	}
	
	
	
	
	class ActionListenerA implements ActionListener {
		int index;
		
		ActionListenerA (int i)
		{
			index=i;
		}
		
		public void actionPerformed (ActionEvent ev)
		{
			//topic_selected=tf[index].getText().toString();
			System.out.println("Selected topic is "+topic_selected);
			f.dispose();
			JOptionPane.showMessageDialog(null, "Every Correct Answer Carries 10 Points\nNo Negative Marking\nTotal Of 8 Questions\n"+
												"First 2 Are Easy, Time Limit Of 12 Seconds\n"+
												"Next 3 Are Medium, Time Limit Of 18 Seconds\n"+
												"Last 3 Are Difficult, Time Limit Of 25 Seconds");
			selectatopic ob = new selectatopic();
			ob.topic_selected=tf[index].getText().toString();
			ob.play();
		}
	}
	
	
	
	public void play()
	{
		f = new JFrame("Lets Play");
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
		
		//topic_selected="Cricket";
		
		// select ques, a1, a2, a3, a4, correctAns from topics, 
		// questionbank where topics.topicid=questionbank.topicid
		// and topics.topicname="Cricket";
		
	    p3 = new JPanel();
	    p3.setLayout(null);
	    p3.setBackground(Color.cyan);
	    p3.setPreferredSize(new Dimension(600,300));
	    ImageIcon icon = new ImageIcon("download.jpg");
		p3.setBorder(BorderFactory.createMatteBorder(3, 3, 3, 3, icon));
		
	    
	    pane = new JScrollPane(p3);
	    pane.setBounds(240,300,600,300);
		
	    int total=0;
	    
	    
	    try
	    {	Class.forName("oracle.jdbc.driver.OracleDriver");
	    	Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
	    	Statement st = con.createStatement();
	    	ResultSet rs = st.executeQuery("select count(*) as col from questionbank, topics where topics.topicno=questionbank.topicno and topicname='"+topic_selected+"'");
	    	rs.next();
	    	total = rs.getInt("col");
	    	  System.out.println("count * gives " + rs.getInt(1));
	    	rs = st.executeQuery("select count(*) as col from questionbank, topics where topics.topicno=questionbank.topicno and topicname='"+topic_selected+"' and difficulty='E'");
	    	rs.next();
	    	easy = rs.getInt("col");
	    	  System.out.println("No of easy Ques -> " + easy);
	    	rs = st.executeQuery("select count(*) as col from questionbank, topics where topics.topicno=questionbank.topicno and topicname='"+topic_selected+"' and difficulty='M'");
		    rs.next();
		    med = rs.getInt("col");
		      System.out.println("No of easy Ques -> " + med);
		    rs = st.executeQuery("select count(*) as col from questionbank, topics where topics.topicno=questionbank.topicno and topicname='"+topic_selected+"' and difficulty='D'");
			rs.next();
			diff = rs.getInt("col");
			  System.out.println("No of easy Ques -> " + diff);
	    	rs.close();
	    	st.close();
	    	con.close();
	    	
	    } catch (Exception e)
		{ JOptionPane.showMessageDialog(null, e.getMessage()); }
	    
	    
	    ques = new String[total];
    	a1 = new String[total];
    	a2 = new String[total];
    	a3 = new String[total];
    	a4 = new String[total];
    	correctans = new String[total];
	    
    	
    	try
	    {	Class.forName("oracle.jdbc.driver.OracleDriver");
	    	Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
	    	Statement st = con.createStatement();
	    	System.out.println("Topic name going as "+topic_selected);
	    	ResultSet rs = st.executeQuery("select * from questionbank, topics where topics.topicno=questionbank.topicno and topicname='"+topic_selected+"'");
	    	
	    	for (int i=0; i<total; i++)
	    	{
	    		rs.next();
	    		
	    		ques[i] = rs.getString("ques");
	    		a1[i] = rs.getString("a1");
	    		a2[i] = rs.getString("a2");
	    		a3[i] = rs.getString("a3");
	    		a4[i] = rs.getString("a4");
	    		correctans[i] = rs.getString("correctans");
	    	}
	    	
	    	rs.close();
	    	st.close();
	    	con.close();
	    	
	    } catch (Exception e)
		{ JOptionPane.showMessageDialog(null, e.getMessage()); }
	    
	  
	    
	    System.out.println(total);
	    // 5 Questions... Total >5 Questions...
	    // Keep Them In Array
	    // Display Random 5 Questions
	    
	    Random rn = new Random();
	    /*int r,  tempsize=0;
	    temp = new int[total];
	    for (int i=0; i<8; i++)
	    { r = rn.nextInt(total)+1;
	      for (int j=0; j<tempsize; j++)
	      { if (r==temp[j])
	        { 	r = rn.nextInt(total)+1;
	        	j=-1;
	        }
	      }
	      System.out.print(r+ " ");
	      temp[tempsize++]=r;
	      // do with i
	    }*/
	    int r,  tempsize=0;
	    temp = new int[easy];
	    for (int i=0; i<2; i++)
	    { r = rn.nextInt(easy)+1;
	      for (int j=0; j<tempsize; j++)
	      { if (r==temp[j])
	        { 	r = rn.nextInt(easy)+1;
	        	j=-1;
	        }
	      }
	      System.out.print(r+ " ");
	      temp[tempsize++]=r;
	      // do with i
	    }
	    
	    
	    qno = 1;
	    String Data = "  "+qno+"->  "+ques[temp[0]-1];
	    question = new JTextField(Data);
	    //question.setBounds(40,50,500,50);
	    question.setPreferredSize(new Dimension(Data.length()*10,50));
	    question.setBackground(Color.black);
	    question.setForeground(Color.black);
	    question.setFont(new Font("Arial",Font.BOLD,14));
	    question.setEnabled(false);
	   // p3.add(question);
	    
	    JScrollPane pane2 = new JScrollPane(question);
	    pane2.setBounds(40,50,500,50);
	    pane2.setVerticalScrollBarPolicy(ScrollPaneConstants.VERTICAL_SCROLLBAR_NEVER);
	    p3.add(pane2);
	    
	    
	    ans1 = new JButton(a1[temp[currentques]-1]);
	    ans1.setBounds(40,120,250,40);
	    p3.add(ans1);
	    
	    ans2 = new JButton(a2[temp[currentques]-1]);
	    ans2.setBounds(300,120,250,40);
	    p3.add(ans2);
	    
	    ans3 = new JButton(a3[temp[currentques]-1]);
	    ans3.setBounds(40,170,250,40);
	    p3.add(ans3);
	    
	    ans4 = new JButton(a4[temp[currentques]-1]);
	    ans4.setBounds(300,170,250,40);
	    p3.add(ans4);
	    
	    ans1.addActionListener(this);
	    ans2.addActionListener(this);
	    ans3.addActionListener(this);
	    ans4.addActionListener(this);
	    
	    quit = new JButton("Quit");
	    quit.addActionListener(this);
	    next = new JButton("Next");
	    quit.setBounds(310,230,70,30);
	    next.setBounds(400,230,70,30);
	    quit.setBackground(Color.magenta);
	    next.setBackground(Color.magenta);
	    next.setEnabled(false);
	    //p3.add(quit);
	    p3.add(next);
	    
	    next.addActionListener(this);
	    
	    currentscore = new JLabel("Current Score : "+score);
	    currentscore.setBounds(460,600,200,100);
	    currentscore.setFont(new Font("Arial",Font.ROMAN_BASELINE,20));
	    
	    JLabel topicheading = new JLabel(topic_selected + " Quiz", JLabel.CENTER);
	    topicheading.setBounds(440,150,200,100);
	    topicheading.setFont(new Font("Arial",Font.CENTER_BASELINE,20));
	    f.add(topicheading);
	    
	    ImageIcon img1 = new ImageIcon("right1 (1).jpg");
		response1 = new JLabel();
		response1.setIcon(img1);
		response1.setBounds(30,360,200,200);
	    ImageIcon img2 = new ImageIcon("wrong.jpg");
		response2 = new JLabel();
		response2.setIcon(img2);
		response2.setBounds(30,360,200,200);
		f.add(response1); f.add(response2);
		response1.setVisible(false);
		response2.setVisible(false);
		ImageIcon img3 = new ImageIcon("thumbs_up (1).jpg");
		r3 = new JLabel();
		r3.setIcon(img3);
		r3.setBounds(870,360,200,200);
		ImageIcon img4 = new ImageIcon("thumbs_down (1).jpg");
		r4 = new JLabel();
		r4.setIcon(img4);
		r4.setBounds(870,360,200,200);
		f.add(r4);
		r3.setVisible(false);
		r4.setVisible(false);
		f.add(r3);
		
		//----------- FOR TIMER ---------------
		timeleft = new JLabel("Time Left -> " + timertime + " Seconds");
		timeleft.setFont(new Font("Comic Sans MS", Font.CENTER_BASELINE, 18));
		timeleft.setBounds(440,200,400,100);
		TimerClass tc = new TimerClass();
		timer = new Timer(1000,tc);
		f.add(timeleft);
		timer.start();
		//----------- TIMER OVER --------------
			    
		f.add(l1);
		f.add(p2);
		//f.add(l3);
		f.add(pane);
		f.add(l2);
		f.add(currentscore);
		f.setVisible(true);
		f.setSize(1025,750);
		
		
		time1 = System.currentTimeMillis();
		//JOptionPane.showMessageDialog(null, time1);
	}
	
		
	public void enter_in_result_table(double time)
	{	
		int flag=0;
		String no1=null, no2=null;
		
		try 
		{	Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
			
			Statement st = con.createStatement();
			ResultSet check;
			
			int percent;
			percent = (score*100)/233;
			
			// ------ Taking username with rank # 1 ------
			check = st.executeQuery("select userno from useroverallstats order by totalscore desc");
			check.next();
			no1 = check.getString(1);
			// ------ Taking username with rank # 1 ------
			
			st.executeQuery("insert into results values ('"+u_name+"','"+topic_selected+"',"+score+",80,"+percent+","+time+")");
						
			check = st.executeQuery("select userno, topicnameplayed from usertopicwisestats");
			if (check!=null)
			while (check.next())
			{
				if ( u_name.equals(check.getString("userno").toString()) && topic_selected.equals(check.getString("topicnameplayed").toString()) )
				{
					flag=1;
					System.out.println("checked");
					break;
				}
			}
			else { System.out.println("Skipped"); }
			
			if (flag==0)
			{	
				double dscore = score;
				DecimalFormat df = new DecimalFormat("#.##");
				dscore = Double.valueOf(df.format(dscore));
				//System.out.println("username : "+u_name+"   Topic selected : "+topic_selected);
				//System.out.println("score : "+score+"  dscore : "+dscore+"  time : "+time);
				st.executeQuery("insert into usertopicwisestats values ( '" + u_name + "','" + topic_selected + "'," + score + "," + score + "," + dscore + ",1," + time + "," + time + ")");
			}
			
			else
			{
				check = st.executeQuery("select * from usertopicwisestats where topicnameplayed = '"+topic_selected+"' and userno = '"+u_name+"'");
				int n=0, best_score=0;
				double totalscore=0, totaltime=0, avgscore=0, avgtime=0;
				check.next();
				n = check.getInt("nooftimesplayed");
				n++;
				best_score = check.getInt("bestscore");
				totalscore = check.getInt("totalscore");
				totaltime = check.getDouble("totaltime");
				totalscore+=score;
				totaltime+=time;
				avgscore = (float)totalscore/n;
				avgtime = totaltime/n;
				if (best_score<score)
					best_score = score;
				DecimalFormat df = new DecimalFormat("#.##");
				avgscore = Double.valueOf(df.format(avgscore));
				totaltime = Double.valueOf(df.format(totaltime));
				avgtime = Double.valueOf(df.format(avgtime));
				
				st.executeQuery("update usertopicwisestats set totalscore = " + totalscore + ", bestscore = " + best_score + ", avgscore = " + avgscore + ", nooftimesplayed = " + n + ", avgtimetaken = " + avgtime + ", totaltime = " + totaltime + " where userno = '" + u_name + "' and topicnameplayed = '" + topic_selected + "'");
				
			}
			
			
			
			flag=0;
			
			check = st.executeQuery("select count(*) from usertopicwisestats where userno = '" + u_name + "'");
			check.next();
			flag = check.getInt(1);
			
			check = st.executeQuery("select count(*) from useroverallstats where userno = '" + u_name + "'");
			check.next();
			int checkit = 0;
			checkit = check.getInt(1);
			
			if (flag==0)
			{
				double dscore = score;
				DecimalFormat df = new DecimalFormat("#.##");
				dscore = Double.valueOf(df.format(dscore));
				//System.out.println("username : "+u_name+"   Topic selected : "+topic_selected);
				//System.out.println("score : "+score+"  dscore : "+dscore+"  time : "+time);
				
				st.executeQuery("insert into useroverallstats values ( '" + u_name + "',1," + dscore + ", " + score + ", 1, " + topic_selected + "','" + topic_selected + "', "+ time + ", " + time + ", " + score + ")");
			}
			
			else
			{
				
				check = st.executeQuery("select * from usertopicwisestats where userno = '" + u_name + "'");
				int totalscore=0, n=0, maxscore = -1;
				double totaltime=0, avgscore=0, avgtime=0;
				while (check.next())
				{
					totalscore += check.getInt("totalscore");
					totaltime += check.getDouble("totaltime");
					n += check.getInt("nooftimesplayed");
					avgscore = (float)totalscore/n;
					avgtime = totaltime/n;					
				}
				
				check = st.executeQuery("select max(bestscore) from usertopicwisestats where userno = '" + u_name + "'");
				check.next();
				maxscore = check.getInt(1);
				
				check = st.executeQuery("select count(distinct(topicnameplayed)) from usertopicwisestats where userno = '" + u_name + "'");
				check.next();
				int nooftopicsplayed = check.getInt(1);
				
				check = st.executeQuery("select topicnameplayed from usertopicwisestats where nooftimesplayed = (select max(nooftimesplayed) from usertopicwisestats where userno = '" + u_name + "') and userno = '" + u_name + "'");
				check.next();
				String mostplayed = check.getString(1);
				
				check = st.executeQuery("select topicnameplayed from usertopicwisestats where totalscore = (select max(totalscore) from usertopicwisestats where userno = '" + u_name + "') and userno = '" + u_name + "'");
				check.next();
				String besttopic = check.getString(1);
				
				DecimalFormat df = new DecimalFormat("#.##");
				avgscore = Double.valueOf(df.format(avgscore));
				totaltime = Double.valueOf(df.format(totaltime));
				avgtime = Double.valueOf(df.format(avgtime));

				if (checkit!=0)
				st.executeQuery("update useroverallstats set totaltopicsplayed = " + nooftopicsplayed + ", avgscore = " + avgscore + ", maxscore = " + maxscore + ", nooftimesplayed = " + n + ", topicmax = '" + mostplayed + "', besttopic = '" + besttopic + "', avgtimetaken = " + avgtime + ", totaltime = " + totaltime + ", totalscore = " + totalscore + " where userno = '" + u_name + "'");
				
				else 
				{	
					st.executeQuery("insert into useroverallstats values ( '" + u_name + "', " + nooftopicsplayed + ", " + avgscore + ", " + maxscore + ", " + n + ", '" + mostplayed + "', '" + besttopic + "', " + avgtime + ", " + totaltime + ", " + totalscore + ")");
				}
				
			}
			
			
			// ------ Taking username with rank # 1 ------
			check = st.executeQuery("select userno from useroverallstats order by totalscore desc");
			check.next();
			no2 = check.getString(1);
			if (no1.equals(no2)==false)
			{
				JOptionPane.showMessageDialog(null, "Congratulations.. You Are Now Number 1 In Our Rankings");
			}
			// ------ Taking username with rank # 1 ------
			
				
			con.commit();
			st.close();
			con.close();
			
		} catch (Exception ae) 
			{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
		
	}
	
	
	public void actionPerformed (ActionEvent e)
	{
		int correct=0, wrong=0;
		
		if (e.getSource()==b1)
		{
			if (timer.isRunning()==true)
			{
				timer.stop();
			}
			
			f.dispose();
			new home();
		}
		
		else if (e.getSource()==quit)
		{
			f.dispose();
			new loginhome();
		}
		
		else if (e.getSource()==b2)
		{
			f.dispose();
			new loginhome();
		}
		
		else if (e.getSource()==next)
		{
			

			currentques++;
			qno++;
			
			if (currentques==8)
			{
				timer.stop();
				double time2 = System.currentTimeMillis();
				//JOptionPane.showMessageDialog(null, time2);
				time = (time2-time1)*(double)0.001;
				DecimalFormat df = new DecimalFormat("#.##");
				time = Double.valueOf(df.format(time));
				String t = Double.toString(time);
				JOptionPane.showMessageDialog(null, "Your Final Score : " + score + "  Time Taken : " + time);
				next.setEnabled(false);
				ans1.setEnabled(false);
				ans2.setEnabled(false);
				ans3.setEnabled(false);
				ans4.setEnabled(false);
				response1.setVisible(false);
				response2.setVisible(false);
				r3.setVisible(false);
				r4.setVisible(false);
				p3.add(quit);
				currentscore.setText("Final Score : "+score);
				
				enter_in_result_table(time);
				
				return;
			}
			
			ans1.setEnabled(true);
			ans2.setEnabled(true);
			ans3.setEnabled(true);
			ans4.setEnabled(true);
			response1.setVisible(false);
			response2.setVisible(false);
			r3.setVisible(false);
			r4.setVisible(false);

			if (currentques==1)
			{
				timertime=12;
			}
			
			else if (currentques==2)
			{	
				qno=1;
				Random rn = new Random();
				int r,  tempsize=0;
			    temp = new int[med];
			    for (int i=0; i<3; i++)
			    { r = rn.nextInt(med)+1+easy;
			      for (int j=0; j<tempsize; j++)
			      { if (r==temp[j])
			        { 	r = rn.nextInt(med)+1+easy;
			        	j=-1;
			        }
			      }
			      System.out.print(r+ " ");
			      temp[tempsize++]=r;
			      // do with i
			    }
			    timertime=18;
			}
			
			else if (currentques==3 || currentques==4)
			{
				timertime=18;
			}
			
			else if (currentques==5)
			{
				qno=1;
				Random rn = new Random();
				int r,  tempsize=0;
			    temp = new int[diff];
			    for (int i=0; i<3; i++)
			    { r = rn.nextInt(diff)+1+easy+med;
			      for (int j=0; j<tempsize; j++)
			      { if (r==temp[j])
			        { 	r = rn.nextInt(diff)+1+easy+med;
			        	j=-1;
			        }
			      }
			      System.out.print(r+ " ");
			      temp[tempsize++]=r;
			      // do with i
			    }
			    timertime=25;
			}
			
			else
			{
				timertime=25;
			}
			
			timeleft.setText("Time Left -> " + timertime + " Seconds");
			timer.setDelay(1000);
			timer.restart();
			
			String Data = "  "+(currentques+1)+"->  "+ques[temp[qno-1]-1]; 
			question.setText(Data);
			question.setPreferredSize(new Dimension(Data.length()*10,40));
			ans1.setText(a1[temp[qno-1]-1]);
			ans2.setText(a2[temp[qno-1]-1]);
			ans3.setText(a3[temp[qno-1]-1]);
			ans4.setText(a4[temp[qno-1]-1]);
		}
		
		else if (e.getSource()==ans1)
		{	
			//if (timer.isRunning()==true)
			//{
			//	timer.stop();
			//}
			timer.stop();
			
			try
		    {	Class.forName("oracle.jdbc.driver.OracleDriver");
		    	Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
		    	Statement st = con.createStatement();
		    	ResultSet rs = st.executeQuery("select correctlyansd, wronglyansd from questionbank where ques = '" + ques[temp[qno-1]-1] + "'");
		    	rs.next();
		    	correct = rs.getInt("correctlyansd");
		    	wrong = rs.getInt("wronglyansd");
		    	System.out.println(correct);
		    	
		    	rs.close();
		    	st.close();
		    	con.close();
		    	
		    } catch (Exception ex)
			{ JOptionPane.showMessageDialog(null, ex.getMessage()); }
		    
			
			if (ans1.getText().toString().equals(correctans[temp[qno-1]-1]))
					{
						//JOptionPane.showMessageDialog(null, "Correct Answer");
						response1.setVisible(true);
						response2.setVisible(false);
						r3.setVisible(true);
						r4.setVisible(false);
						score=score+10+timertime;
						currentscore.setText("Current Score : "+score);
						correct++;
					}
			else 
			{
				//JOptionPane.showMessageDialog(null, "Wrong Answer");
				response1.setVisible(false);
				response2.setVisible(true);
				r3.setVisible(false);
				r4.setVisible(true);
				wrong++;
			}
			ans1.setEnabled(false);
			ans2.setEnabled(false);
			ans3.setEnabled(false);
			ans4.setEnabled(false);
			next.setEnabled(true);
			
			try
		    {	Class.forName("oracle.jdbc.driver.OracleDriver");
		    	Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
		    	Statement st = con.createStatement();
		    	st.executeUpdate("update questionbank set correctlyansd=" + Integer.toString(correct) + " , wronglyansd = " + Integer.toString(wrong) + " where ques = '" + ques[temp[qno-1]-1] + "'");
		    	
		    	System.out.println(correct + "update kiya");
		    	
		    	st.close();
		    	con.close(); 
		    	
		    } catch (Exception ex)
			{ JOptionPane.showMessageDialog(null, ex.getMessage()); }
			
		}
		
		else if (e.getSource()==ans2)
		{
			timer.stop();
						
			try
		    {	Class.forName("oracle.jdbc.driver.OracleDriver");
		    	Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
		    	Statement st = con.createStatement();
		    	ResultSet rs = st.executeQuery("select correctlyansd, wronglyansd from questionbank where ques = '" + ques[temp[qno-1]-1] + "'");
		    	rs.next();
		    	correct = rs.getInt("correctlyansd");
		    	wrong = rs.getInt("wronglyansd");
		    	System.out.println(correct);
		    	
		    	rs.close();
		    	st.close();
		    	con.close();
		    	
		    } catch (Exception ex)
			{ JOptionPane.showMessageDialog(null, ex.getMessage()); }
			
			if (ans2.getText().toString().equals(correctans[temp[qno-1]-1]))
					{
						//JOptionPane.showMessageDialog(null, "Correct Answer");
				response1.setVisible(true);
				response2.setVisible(false);
				r3.setVisible(true);
				r4.setVisible(false);
						score+=10+timertime;
						currentscore.setText("Current Score : "+score);
						correct++;
					}
			else 
			{
				//JOptionPane.showMessageDialog(null, "Wrong Answer");
				response1.setVisible(false);
				response2.setVisible(true);
				r3.setVisible(false);
				r4.setVisible(true);
				wrong++;
			}
			ans1.setEnabled(false);
			ans2.setEnabled(false);
			ans3.setEnabled(false);
			ans4.setEnabled(false);
			next.setEnabled(true);
			
			try
		    {	Class.forName("oracle.jdbc.driver.OracleDriver");
		    	Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
		    	Statement st = con.createStatement();
		    	st.executeUpdate("update questionbank set correctlyansd=" + Integer.toString(correct) + " , wronglyansd = " + Integer.toString(wrong) + " where ques = '" + ques[temp[qno-1]-1] + "'");
		    	
		    	System.out.println(correct + "update kiya");
		    	
		    	st.close();
		    	con.close(); 
		    	
		    } catch (Exception ex)
			{ JOptionPane.showMessageDialog(null, ex.getMessage()); }
			
		}
		
		else if (e.getSource()==ans3)
		{
			timer.stop();
			
			try
		    {	Class.forName("oracle.jdbc.driver.OracleDriver");
		    	Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
		    	Statement st = con.createStatement();
		    	ResultSet rs = st.executeQuery("select correctlyansd, wronglyansd from questionbank where ques = '" + ques[temp[qno-1]-1] + "'");
		    	rs.next();
		    	correct = rs.getInt("correctlyansd");
		    	wrong = rs.getInt("wronglyansd");
		    	System.out.println(correct);
		    	
		    	rs.close();
		    	st.close();
		    	con.close();
		    	
		    } catch (Exception ex)
			{ JOptionPane.showMessageDialog(null, ex.getMessage()); }
			
			if (ans3.getText().toString().equals(correctans[temp[qno-1]-1]))
					{
						//JOptionPane.showMessageDialog(null, "Correct Answer");
				response1.setVisible(true);
				response2.setVisible(false);
				r3.setVisible(true);
				r4.setVisible(false);
						score+=10+timertime;
						currentscore.setText("Current Score : "+score);
						correct++;
					}
			else 
			{
				//JOptionPane.showMessageDialog(null, "Wrong Answer");
				response1.setVisible(false);
				response2.setVisible(true);
				r3.setVisible(false);
				r4.setVisible(true);
				wrong++;
			}
			ans1.setEnabled(false);
			ans2.setEnabled(false);
			ans3.setEnabled(false);
			ans4.setEnabled(false);
			next.setEnabled(true);
			
			try
		    {	Class.forName("oracle.jdbc.driver.OracleDriver");
		    	Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
		    	Statement st = con.createStatement();
		    	st.executeUpdate("update questionbank set correctlyansd=" + correct + " , wronglyansd = " + (wrong) + " where ques = '" + ques[temp[qno-1]-1] + "'");
		    	
		    	System.out.println(correct + "update kiya");
		    	
		    	st.close();
		    	con.close(); 
		    	
		    } catch (Exception ex)
			{ JOptionPane.showMessageDialog(null, ex.getMessage()); }
			
		}
		
		else if (e.getSource()==ans4)
		{
			timer.stop();
			
			try
		    {	Class.forName("oracle.jdbc.driver.OracleDriver");
		    	Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
		    	Statement st = con.createStatement();
		    	ResultSet rs = st.executeQuery("select correctlyansd, wronglyansd from questionbank where ques = '" + ques[temp[qno-1]-1] + "'");
		    	rs.next();
		    	correct = rs.getInt("correctlyansd");
		    	wrong = rs.getInt("wronglyansd");
		    	System.out.println(correct);
		    	
		    	rs.close();
		    	st.close();
		    	con.close();
		    	
		    } catch (Exception ex)
			{ JOptionPane.showMessageDialog(null, ex.getMessage()); }
			
			if (ans4.getText().toString().equals(correctans[temp[qno-1]-1]))
					{
						//JOptionPane.showMessageDialog(null, "Correct Answer");
				response1.setVisible(true);
				response2.setVisible(false);
				r3.setVisible(true);
				r4.setVisible(false);
						score+=10+timertime;
						currentscore.setText("Current Score : "+score);
						correct++;
					}
			else 
			{
				//JOptionPane.showMessageDialog(null, "Wrong Answer");
				response1.setVisible(false);
				response2.setVisible(true);
				r3.setVisible(false);
				r4.setVisible(true);
				wrong++;
			}
			ans1.setEnabled(false);
			ans2.setEnabled(false);
			ans3.setEnabled(false);
			ans4.setEnabled(false);
			next.setEnabled(true);
			
			try
		    {	Class.forName("oracle.jdbc.driver.OracleDriver");
		    	Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
		    	Statement st = con.createStatement();
		    	st.executeUpdate("update questionbank set correctlyansd=" + Integer.toString(correct) + " , wronglyansd = " + Integer.toString(wrong) + " where ques = '" + ques[temp[qno-1]-1] + "'");
		    	
		    	System.out.println(correct + "update kiya");
		    	
		    	st.close();
		    	con.close(); 
		    	
		    } catch (Exception ex)
			{ JOptionPane.showMessageDialog(null, ex.getMessage()); }
			
		}
		
	}
	
	
	
	// ------- Class For Timer --------
	public class TimerClass implements ActionListener {
		
		public void actionPerformed (ActionEvent ae)
		{
			if (timertime>=1)
			{
				timertime--;
				timeleft.setText("Time Left -> " + timertime + " Seconds");
			}
			
			else
			{
				timeleft.setText("          Time Over");
				JOptionPane.showMessageDialog(null, "Your Time Limit Is Over\nProceed To Next Question\nClick To Continue");
				next.doClick();	
			}
		
		}
	}
	// ------- Class For Timer --------
	
	
	
	public static void main (String a[])
	{
		selectatopic obj = new selectatopic();
		obj.topic_selected="IT";
		obj.play();
	}
	
}
